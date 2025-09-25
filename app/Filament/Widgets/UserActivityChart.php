<?php

namespace App\Filament\Widgets;

use Carbon\Carbon;
use App\Models\User;
use Filament\Forms\Components\Select;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Filament\Schemas\Schema;
use Filament\Widgets\ChartWidget\Concerns\HasFiltersSchema as ConcernsHasFiltersSchema;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;


class UserActivityChart extends ApexChartWidget
{
    use ConcernsHasFiltersSchema;

    protected static ?string $chartId = 'userActivityChart';
    protected static ?string $heading = 'User Activities';
    protected static ?string $loadingIndicator = 'Loading Data aktivitas...';
    protected static ?int $sort = 1;

    /**
     * Gunakan Schema (sesuai HasFiltersSchema yang dipanggil oleh plugin).
     */
    public function filtersSchema(Schema $schema): Schema
    {
        return $schema->components([
            Select::make('filter')
                ->label('Rentang Waktu')
                ->options([
                    '7_days'  => '7 Hari Terakhir',
                    '30_days' => '30 Hari Terakhir',
                    '90_days' => '90 Hari Terakhir',
                ])
                ->default('7_days')
                ->reactive()
                ->columnSpanFull(),

            Select::make('author_id')
                ->label('Author')
                // gunakan author_id sebagai value, tampilkan nama user
                ->options(
                    User::query()
                        ->whereNotNull('author_id')
                        ->pluck('name', 'author_id')
                        ->toArray()
                )
                ->placeholder('Semua User')
                ->searchable()
                ->reactive()
                ->columnSpanFull(),
        ]);
    }

    /**
     * Build options chart — membaca filter secara robust (beberapa kemungkinan properti/ method).
     */
    protected function getOptions(): array
    {
        // Default
        $filter = '7_days';
        $authorId = null;

        // 1) properti yang sering dipakai di beberapa versi/package
        if (property_exists($this, 'filterFormData') && is_array($this->filterFormData)) {
            $filter = $this->filterFormData['filter'] ?? $filter;
            $authorId = $this->filterFormData['author_id'] ?? null;
        }
        // 2) alternatif properti
        elseif (property_exists($this, 'filters') && is_array($this->filters)) {
            $filter = $this->filters['filter'] ?? $filter;
            $authorId = $this->filters['author_id'] ?? null;
        }
        // 3) jika trait/package menyediakan getter
        elseif (method_exists($this, 'getFilterState')) {
            $filter = $this->getFilterState('filter') ?? $filter;
            $authorId = $this->getFilterState('author_id') ?? null;
        }
        // 4) fallback dari request (mis. untuk testing)
        else {
            $filter = request()->input('filter', $filter);
            $authorId = request()->input('author_id', null);
        }

        // hitung range hari
        $range = match ($filter) {
            '30_days' => 30,
            '90_days' => 90,
            default => 7,
        };

        $cacheKey = "user_activity_chart_{$range}_" . ($authorId ?: 'all');

        // Cache agar tidak query tiap load
        $data = Cache::remember($cacheKey, now()->addMinutes(3), function () use ($range, $authorId) {
            $query = DB::table('user_activities')
                ->selectRaw('DATE(created_at) as date, COUNT(*) as total')
                ->where('created_at', '>=', now()->subDays($range));

            if ($authorId) {
                // author_id disimpan di tabel user_activities (pastikan migration sudah ada)
                $query->where('author_id', $authorId);
            }

            $rows = $query->groupBy('date')->orderBy('date')->pluck('total', 'date')->toArray();

            // Pastikan semua hari dalam range ada (jika tidak ada data, isi 0)
            $result = [];
            for ($i = $range - 1; $i >= 0; $i--) {
                $d = Carbon::today()->subDays($i)->toDateString(); // YYYY-mm-dd
                $result[$d] = $rows[$d] ?? 0;
            }

            return $result; // keyed by YYYY-mm-dd => count
        });

        // Format categories menjadi label yang ramah
        $categories = array_map(fn($d) => Carbon::parse($d)->format('d M'), array_keys($data));
        $seriesData = array_values($data);

        // Pastikan tidak kosong -> mencegah error apexcharts (reading 'length')
        if (empty($seriesData)) {
            $categories = ['No Data'];
            $seriesData = [0];
        }
        sleep(2);
        return [
            'chart' => [
                'type' => 'bar',
                'height' => 350,
            ],
            'series' => [
                [
                    'name' => 'Aktivitas',
                    'data' => $seriesData,
                ],
            ],
            'xaxis' => [
                'categories' => $categories,
            ],
            'yaxis' => [
                'title' => ['text' => 'Jumlah Akses'],
            ],
            'colors' => ['#4f46e5'],
            'legend' => ['position' => 'top'],
        ];
    }
}

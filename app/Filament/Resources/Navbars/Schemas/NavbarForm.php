<?php



namespace App\Filament\Resources\Navbars\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use BladeUI\Icons\Factory as IconFactory;

class NavbarForm
{
    protected static function humanizeIconName(string $icon): string
    {
        $label = str_replace(['heroicon-o-', 'heroicon-s-', 'heroicon-m-'], '', $icon);
        $label = str_replace('-', ' ', $label);
        $label = ucwords($label);

        $style = '';
        if (str_starts_with($icon, 'heroicon-o-')) {
            $style = ' (Outline)';
        } elseif (str_starts_with($icon, 'heroicon-s-')) {
            $style = ' (Solid)';
        } elseif (str_starts_with($icon, 'heroicon-m-')) {
            $style = ' (Mini)';
        }

        // hasil: <icon kecil> Label (Style)
        return "<x-{$icon} class='w-5 h-5 inline text-gray-600 mr-1' /> {$label}{$style}";
    }



    protected static function getHeroicons(): array
    {
        $factory = app(\BladeUI\Icons\Factory::class);
        $icons = [];

        foreach ($factory->all() as $set => $options) {
            $prefix = $options['prefix'] ?? '';

            foreach ($options['paths'] as $path) {
                foreach (glob($path . '/*.svg') as $file) {
                    $name = pathinfo($file, PATHINFO_FILENAME);
                    $fullName = $prefix ? "{$prefix}-{$name}" : $name;

                    // langsung simpan string biasa
                    $icons[$fullName] = $fullName;
                }
            }
        }

        asort($icons);

        return $icons; // contoh: ['heroicon-o-home' => 'heroicon-o-home']
    }



    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('title')
                ->label('Nama Menu')
                ->required()
                ->maxLength(15),

            Select::make('slug')
                ->label('URL dari Halaman')
                ->options(function ($record) {
                    $options = \App\Models\Pages::pluck('slug', 'slug')->toArray();

                    // Pastikan value lama tetap ada biar valid
                    if ($record && $record->slug && !isset($options[$record->slug])) {
                        $options[$record->slug] = $record->slug;
                    }

                    return $options;
                })
                ->searchable()
                ->nullable()
                ->placeholder('Pilih halaman...'),
            TextInput::make('manual_slug')
                ->label('Atau Manual URL')
                ->helperText('Isi jika tidak pilih halaman. Akan otomatis dijadikan slug.')
                ->placeholder('contoh: about-us')
                ->nullable(),
            Select::make('parent_id')
                ->label('Parent Menu')
                ->nullable()
                ->relationship('parent', 'title') // sudah benar setelah perbaikan model
                ->helperText('Kosongkan jika menu utama'),

            TextInput::make('order')
                ->label('Urutan Menu')
                ->required()
                ->default(0)
                ->helperText('Semakin kecil semakin duluan tampil'),

            Select::make('icon')
                ->label('Icon Menu (opsional)')
                ->options(function ($get) {
                    $icons = static::getHeroicons();
                    $recordIcon = $get('icon');
                    // pastikan value lama tetap ada
                    if ($recordIcon && !isset($icons[$recordIcon])) {
                        $icons[$recordIcon] = $recordIcon;
                    }
                    return $icons;
                })
                ->searchable()
                ->nullable()
                ->helperText('Icon dari https://blade-ui-kit.com/. Gunakan kit, kosongkan jika tidak perlu.')
        ]);
    }
}

<?php

namespace App\Filament\Resources\ServicesPages;

use App\Filament\Resources\ServicesPages\Pages\CreateServicesPage;
use App\Filament\Resources\ServicesPages\Pages\EditServicesPage;
use App\Filament\Resources\ServicesPages\Pages\ListServicesPages;
use App\Filament\Resources\ServicesPages\Schemas\ServicesPageForm;
use App\Filament\Resources\ServicesPages\Tables\ServicesPagesTable;
use App\Models\Services;
use UnitEnum;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ServicesPageResource extends Resource
{
    protected static ?string $model = Services::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    protected static string|UnitEnum|null $navigationGroup = 'Pengaturan Website';
    protected static ?string $recordTitleAttribute = 'Layanan Halaman';


    public static function form(Schema $schema): Schema
    {
        return ServicesPageForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ServicesPagesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListServicesPages::route('/'),
            'create' => CreateServicesPage::route('/create'),
            'edit' => EditServicesPage::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}

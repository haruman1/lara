<?php

namespace App\Filament\Resources\PagesAdmins;

use App\Filament\Resources\PagesAdmins\Pages\CreatePagesAdmin;
use App\Filament\Resources\PagesAdmins\Pages\EditPagesAdmin;
use App\Filament\Resources\PagesAdmins\Pages\ListPagesAdmins;
use App\Filament\Resources\PagesAdmins\Schemas\PagesAdminForm;
use App\Filament\Resources\PagesAdmins\Tables\PagesAdminsTable;
use App\Models\Pages;
use UnitEnum;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PagesAdminResource extends Resource
{
    protected static ?string $model = Pages::class;

    protected static string|\BackedEnum|null $navigationIcon = 'bi-stack';
    protected static string | \UnitEnum | null $navigationGroup = 'Pengaturan';
    protected static ?string $recordTitleAttribute = 'Page Dynamic';

    public static function form(Schema $schema): Schema
    {
        return PagesAdminForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PagesAdminsTable::configure($table);
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
            'index' => ListPagesAdmins::route('/'),
            'create' => CreatePagesAdmin::route('/create'),
            'edit' => EditPagesAdmin::route('/{record}/edit'),
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

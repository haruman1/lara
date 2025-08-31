<?php

namespace App\Filament\Resources\PostBlogs;

use App\Filament\Resources\PostBlogs\Pages\CreatePostBlog;
use App\Filament\Resources\PostBlogs\Pages\EditPostBlog;
use App\Filament\Resources\PostBlogs\Pages\ListPostBlogs;
use App\Filament\Resources\PostBlogs\Schemas\PostBlogForm;
use App\Filament\Resources\PostBlogs\Tables\PostBlogsTable;
use App\Models\PostBlog;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PostBlogResource extends Resource
{
    protected static ?string $model = PostBlog::class;

    protected static string|UnitEnum|null $navigationGroup = 'Blog';
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedDocumentText;
    protected static string|BackedEnum|null $activeNavigationIcon = Heroicon::DocumentText;

    protected static ?string $recordTitleAttribute = ' Post';

    public static function form(Schema $schema): Schema
    {
        return PostBlogForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PostBlogsTable::configure($table);
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
            'index' => ListPostBlogs::route('/'),
            'create' => CreatePostBlog::route('/create'),
            'edit' => EditPostBlog::route('/{record}/edit'),
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

<?php

namespace App\Filament\Resources\PagesAdmins\Schemas;

use Faker\Core\File;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class PagesAdminForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->columnSpanFull()
                    ->lazy()
                    ->afterStateUpdated(function ($set, $get, $state) {
                        if ($get('slug')) {
                            return;
                        }
                        $set('slug', Str::slug($state));
                    })
                    ->trim()
                    ->helperText('Judul halaman untuk menampilkan pada halaman website.'),
                TextInput::make('slug')
                    ->required()
                    ->columnSpanFull()
                    ->trim()
                    ->helperText('URL link otomatis akan dibuat dari judul jika dikosongkan.'),
                FileUpload::make('image')
                    ->label('Main Image / Thumbnail')
                    ->directory('pages/images')
                    ->image()
                    ->disk('public')
                    ->maxSize(2048), // max 2MB
                RichEditor::make('content')
                    ->required()
                    ->columnSpanFull(),
                Select::make('author_id')
                    ->label('Created By')
                    ->required()
                    ->relationship(
                        name: 'author',
                        titleAttribute: 'name',
                        modifyQueryUsing: fn($query) => $query->whereHas('roles', fn($q) => $q->where('name', 'admin'))
                    )
                    ->columnSpanFull(),

            ]);
    }
}

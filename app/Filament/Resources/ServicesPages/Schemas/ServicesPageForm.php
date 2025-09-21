<?php

namespace App\Filament\Resources\ServicesPages\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ServicesPageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // Define your form components here
                TextInput::make('name')
                    ->label('Nama Layanan')
                    ->required()
                    ->maxLength(255)
                    ->lazy()
                    ->afterStateUpdated(function ($set, $get, $state) {
                        if ($get('slug')) {
                            return;
                        }
                        $set('slug', Str::slug($state));
                    })
                    ->trim(),
                RichEditor::make('description')
                    ->label('Deskripsi Layanan')
                    ->nullable(),
                TextInput::make('price')
                    ->label('Harga Layanan')
                    ->required()
                    ->numeric(),
                FileUpload::make('image')
                    ->label('Gambar Layanan')
                    ->directory('services/images')
                    ->nullable()
                    ->image()
                    ->maxSize(1024) // Maksimal 1MB
                    ->disk('public'),
                TextInput::make('tentang_layanan')
                    ->label('Tentang Layanan')
                    ->required()
                    ->maxLength(255),
                TextInput::make('slug')
                    ->label('Slug')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255),
            ]);
    }
}

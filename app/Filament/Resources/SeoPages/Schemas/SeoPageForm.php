<?php

namespace App\Filament\Resources\SeoPages\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class SeoPageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Form SEO Page')
                    ->schema([
                        Select::make('slug')
                            ->label('Slug / Path')
                            ->relationship(
                                name: 'pageLink',
                                titleAttribute: 'slug',
                            )
                            ->unique(ignoreRecord: true)
                            ->placeholder('Pilih halaman...')
                            ->helperText('Contoh: about, contact, products/item-1, dll. Jangan gunakan karakter "/" di awal.')
                            ->afterStateUpdated(fn($state, callable $set) => $set('manual_slug', null)),
                        TextInput::make('manual_slug')
                            ->label('Manual Slug')
                            ->helperText('Isi jika ingin menimpa slug/path default dari halaman. Akan otomatis diubah jadi slug format.')
                            ->placeholder('Contoh: About Us → about-us')
                            ->unique(ignoreRecord: true)
                            ->nullable(),
                        TextInput::make('title')
                            ->label('Title')
                            ->required(),

                        Textarea::make('meta_description')
                            ->label('Meta Description')
                            ->rows(3),

                        TextInput::make('meta_keywords')
                            ->label('Meta Keywords')
                            ->placeholder('kata kunci dipisahkan koma'),



                    ])
                    ->collapsible()
                    ->columns(1)
                    ->columnSpanFull(), // ✅ ini bikin section Form SEO Page full ke bawah

                Section::make('Open Graph (Facebook, WA, LinkedIn)')
                    ->schema([
                        TextInput::make('og_title')->label('OG Title'),
                        Textarea::make('og_description')->label('OG Description')->rows(3),
                        TextInput::make('og_type')->label('OG Type')->default('website'),
                        TextInput::make('og_url')->label('OG URL'),
                        FileUpload::make('og_image')
                            ->label('OG Image')
                            ->directory('seo/og')
                            ->image()
                            ->disk('public')
                            ->maxSize(2048), // max 2MB
                    ])
                    ->collapsible(),

                Section::make('Twitter Card')
                    ->schema([
                        Select::make('twitter_card')
                            ->label('Twitter Card')
                            ->options([
                                'summary' => 'Summary',
                                'summary_large_image' => 'Summary Large Image',
                            ])
                            ->default('summary'),
                        TextInput::make('twitter_title')->label('Twitter Title'),
                        Textarea::make('twitter_description')->label('Twitter Description')->rows(3),
                        FileUpload::make('twitter_image')
                            ->label('Twitter Image')
                            ->directory('seo/twitter')
                            ->image()
                            ->disk('public')
                            ->maxSize(2048),
                    ])
                    ->collapsible(),
            ]);
    }
}

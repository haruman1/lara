<?php

namespace App\Filament\Resources\Posts\Schemas;

use App\Filament\Fields\PostContent;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use App\Filament\Fields\PostFooter;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Actions;
use Filament\Schemas\Components\Grid;
use Pboivin\FilamentPeek\Forms\Actions\InlinePreviewAction;
use Illuminate\Support\Str;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                Grid::make()
                    ->columns(2)
                    ->schema([
                        TextInput::make('title')
                            ->columnSpan(1)
                            ->required()
                            ->lazy()
                            ->afterStateUpdated(function ($set, $get, $state) {
                                if ($get('slug')) {
                                    return;
                                }
                                $set('slug', Str::slug($state));
                            }),

                        TextInput::make('slug')
                            ->columnSpan(1)
                            ->required(),

                        DateTimePicker::make('published_at')
                            ->columnSpan(1),

                        Select::make('category_id')
                            ->relationship('category', 'name')
                            ->columnSpan(1)
                            ->required(),

                        Toggle::make('is_featured')
                            ->columnSpanFull()
                            ->required(),
                    ]),

                Section::make('Post Content')
                    ->schema([
                        Actions::make([
                            InlinePreviewAction::make()
                                ->label('Preview Post Content')
                                ->builderName('content_blocks')
                        ])
                            ->columnSpanFull()
                            ->alignRight(),

                        PostContent::make('content_blocks')
                            ->label('Blocks')
                            ->columnSpanFull(),
                    ])->collapsible(),

                Section::make('Post Footer')
                    ->schema([
                        PostFooter::make('footer_blocks')
                            ->label('Blocks')
                            ->columnSpanFull(),
                    ])->collapsible(),

                TextInput::make('main_image_url')
                    ->label('Main image URL')
                    ->columnSpanFull(),

                FileUpload::make('main_image_upload')
                    ->label('Main image upload')
                    ->columnSpanFull(),
            ]);
    }
}

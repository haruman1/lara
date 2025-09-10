<?php

namespace App\Filament\Resources\Posts\Tables;

use Filament\Actions\ActionGroup;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;
use Pboivin\FilamentPeek\Tables\Actions\ListPreviewAction;

class PostsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('category.name')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('published_at')
                    ->dateTime()
                    ->sortable(),

                IconColumn::make('is_featured')
                    ->boolean()
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('category')
                    ->relationship('category', 'name'),

                TernaryFilter::make('is_featured'),
            ])
            ->recordActions([
                ActionGroup::make([
                    ListPreviewAction::make(),
                    EditAction::make(),
                    DeleteAction::make(),
                ]),
            ])->defaultSort('published_at', 'desc')
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}

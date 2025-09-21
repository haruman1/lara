<?php

namespace App\Filament\Resources\ServicesPages\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class ServicesPagesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                // Define your table columns here
                TextColumn::make('name')->sortable()->searchable(),
                TextColumn::make('price')->money('idr', true),
                TextColumn::make('tentang_layanan')->sortable()->searchable(),
                TextColumn::make('slug')->sortable()->searchable(),
                TextColumn::make('description')->limit(50)->wrap(),
                TextColumn::make('image')->label('Gambar')->getStateUsing(function ($record) {
                    return $record->image ? 'Ya' : 'Tidak';
                })->sortable(),
                // Assuming you want to show created_at and updated_at columns
                TextColumn::make('created_at')->dateTime()->sortable(),
                TextColumn::make('updated_at')->dateTime()->sortable(),
            ])
            ->filters([
                TrashedFilter::make(),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ]);
    }
}

<?php

namespace App\Filament\Resources\Categories\Tables;

use Filament\Actions\ActionGroup;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Notifications\Notification;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CategoriesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('posts_count')
                    ->label('Posts')
                    ->counts('posts'),
            ])
            ->recordActions([
                ActionGroup::make([
                    EditAction::make(),

                    DeleteAction::make()
                        ->before(function ($record, $action) {
                            if ($record->posts()->count() > 0) {
                                Notification::make()
                                    ->title("Can't delete the category, it contains posts")
                                    ->danger()
                                    ->send();

                                $action->cancel();
                            }
                        }),
                ]),
            ])
            ->filters([])
            ->toolbarActions([]);
    }
}

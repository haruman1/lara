<?php

namespace App\Filament\Resources\ServicesPages\Pages;

use App\Filament\Resources\ServicesPages\ServicesPageResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListServicesPages extends ListRecords
{
    protected static string $resource = ServicesPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

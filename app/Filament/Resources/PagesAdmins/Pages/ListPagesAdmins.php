<?php

namespace App\Filament\Resources\PagesAdmins\Pages;

use App\Filament\Resources\PagesAdmins\PagesAdminResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPagesAdmins extends ListRecords
{
    protected static string $resource = PagesAdminResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

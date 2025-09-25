<?php

namespace App\Filament\Resources\PagesAdmins\Pages;

use App\Filament\Resources\PagesAdmins\PagesAdminResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;

class EditPagesAdmin extends EditRecord
{
    protected static string $resource = PagesAdminResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}

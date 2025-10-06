<?php

declare(strict_types=1);

namespace App\Filament\Resources\SeoPages\Pages;


use App\Filament\Resources\SeoPages\SeoPageResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewSeoPage extends ViewRecord
{
    protected static string $resource = SeoPageResource::class;

    protected function getActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}

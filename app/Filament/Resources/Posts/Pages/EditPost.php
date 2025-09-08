<?php

namespace App\Filament\Resources\Posts\Pages;


use App\Filament\Resources\Posts\PostResource;

use Filament\Resources\Pages\EditRecord;

class EditPost extends EditRecord
{
    use HasPostPreview;
    protected static string $resource = PostResource::class;
}

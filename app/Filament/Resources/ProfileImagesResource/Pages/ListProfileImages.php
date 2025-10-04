<?php

namespace App\Filament\Resources\ProfileImagesResource\Pages;

use App\Filament\Resources\ProfileImagesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProfileImages extends ListRecords
{
    protected static string $resource = ProfileImagesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

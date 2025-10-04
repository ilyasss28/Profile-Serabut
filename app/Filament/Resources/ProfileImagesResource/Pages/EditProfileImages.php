<?php

namespace App\Filament\Resources\ProfileImagesResource\Pages;

use App\Filament\Resources\ProfileImagesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProfileImages extends EditRecord
{
    protected static string $resource = ProfileImagesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

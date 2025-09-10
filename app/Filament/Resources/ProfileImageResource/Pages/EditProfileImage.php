<?php

namespace App\Filament\Resources\ProfileImageResource\Pages;

use App\Filament\Resources\ProfileImageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProfileImage extends EditRecord
{
    protected static string $resource = ProfileImageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

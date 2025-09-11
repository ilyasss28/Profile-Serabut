<?php

namespace App\Filament\Resources\KategoriFAQResource\Pages;

use App\Filament\Resources\KategoriFAQResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKategoriFAQ extends EditRecord
{
    protected static string $resource = KategoriFAQResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

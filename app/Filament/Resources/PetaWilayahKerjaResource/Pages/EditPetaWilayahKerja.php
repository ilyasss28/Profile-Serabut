<?php

namespace App\Filament\Resources\PetaWilayahKerjaResource\Pages;

use App\Filament\Resources\PetaWilayahKerjaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPetaWilayahKerja extends EditRecord
{
    protected static string $resource = PetaWilayahKerjaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

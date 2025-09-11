<?php

namespace App\Filament\Resources\PetaWilayahKerjaResource\Pages;

use App\Filament\Resources\PetaWilayahKerjaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPetaWilayahKerjas extends ListRecords
{
    protected static string $resource = PetaWilayahKerjaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

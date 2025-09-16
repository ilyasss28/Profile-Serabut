<?php

namespace App\Filament\Resources\GaleryKategoriResource\Pages;

use App\Filament\Resources\GaleryKategoriResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGaleryKategoris extends ListRecords
{
    protected static string $resource = GaleryKategoriResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

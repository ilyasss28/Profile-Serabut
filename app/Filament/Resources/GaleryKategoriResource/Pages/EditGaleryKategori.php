<?php

namespace App\Filament\Resources\GaleryKategoriResource\Pages;

use App\Filament\Resources\GaleryKategoriResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGaleryKategori extends EditRecord
{
    protected static string $resource = GaleryKategoriResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

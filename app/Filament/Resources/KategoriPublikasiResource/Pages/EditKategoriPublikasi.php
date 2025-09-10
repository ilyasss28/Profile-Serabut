<?php

namespace App\Filament\Resources\KategoriPublikasiResource\Pages;

use App\Filament\Resources\KategoriPublikasiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKategoriPublikasi extends EditRecord
{
    protected static string $resource = KategoriPublikasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

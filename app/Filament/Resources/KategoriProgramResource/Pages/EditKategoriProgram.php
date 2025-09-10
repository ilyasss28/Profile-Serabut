<?php

namespace App\Filament\Resources\KategoriProgramResource\Pages;

use App\Filament\Resources\KategoriProgramResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKategoriProgram extends EditRecord
{
    protected static string $resource = KategoriProgramResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

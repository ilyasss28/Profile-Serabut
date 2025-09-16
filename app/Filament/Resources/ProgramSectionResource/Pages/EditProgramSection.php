<?php

namespace App\Filament\Resources\ProgramSectionResource\Pages;

use App\Filament\Resources\ProgramSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProgramSection extends EditRecord
{
    protected static string $resource = ProgramSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

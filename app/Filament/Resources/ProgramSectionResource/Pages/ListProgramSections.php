<?php

namespace App\Filament\Resources\ProgramSectionResource\Pages;

use App\Filament\Resources\ProgramSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProgramSections extends ListRecords
{
    protected static string $resource = ProgramSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\KategoriFAQResource\Pages;

use App\Filament\Resources\KategoriFAQResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKategoriFAQS extends ListRecords
{
    protected static string $resource = KategoriFAQResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

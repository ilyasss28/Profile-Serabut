<?php

namespace App\Filament\Resources\WilayahKerjaResource\Pages;

use App\Filament\Resources\WilayahKerjaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWilayahKerjas extends ListRecords
{
    protected static string $resource = WilayahKerjaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\ProfileImageResource\Pages;

use App\Filament\Resources\ProfileImageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProfileImages extends ListRecords
{
    protected static string $resource = ProfileImageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

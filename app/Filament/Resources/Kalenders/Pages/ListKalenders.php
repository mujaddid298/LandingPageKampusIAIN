<?php

namespace App\Filament\Resources\Kalenders\Pages;

use App\Filament\Resources\Kalenders\KalenderResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListKalenders extends ListRecords
{
    protected static string $resource = KalenderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\Peprodis\Pages;

use App\Filament\Resources\Peprodis\PeprodiResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPeprodis extends ListRecords
{
    protected static string $resource = PeprodiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

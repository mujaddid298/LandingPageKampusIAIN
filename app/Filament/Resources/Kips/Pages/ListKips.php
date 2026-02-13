<?php

namespace App\Filament\Resources\Kips\Pages;

use App\Filament\Resources\Kips\KipResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListKips extends ListRecords
{
    protected static string $resource = KipResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

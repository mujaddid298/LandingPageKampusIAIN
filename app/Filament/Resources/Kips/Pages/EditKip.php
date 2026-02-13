<?php

namespace App\Filament\Resources\Kips\Pages;

use App\Filament\Resources\Kips\KipResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditKip extends EditRecord
{
    protected static string $resource = KipResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

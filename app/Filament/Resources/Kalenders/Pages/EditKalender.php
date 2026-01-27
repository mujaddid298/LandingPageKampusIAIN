<?php

namespace App\Filament\Resources\Kalenders\Pages;

use App\Filament\Resources\Kalenders\KalenderResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditKalender extends EditRecord
{
    protected static string $resource = KalenderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

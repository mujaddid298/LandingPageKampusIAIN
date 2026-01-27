<?php

namespace App\Filament\Resources\Peprodis\Pages;

use App\Filament\Resources\Peprodis\PeprodiResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPeprodi extends EditRecord
{
    protected static string $resource = PeprodiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

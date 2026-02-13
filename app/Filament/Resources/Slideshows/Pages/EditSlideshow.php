<?php

namespace App\Filament\Resources\Slideshows\Pages;

use App\Filament\Resources\Slideshows\SlideshowResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSlideshow extends EditRecord
{
    protected static string $resource = SlideshowResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

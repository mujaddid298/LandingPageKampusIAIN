<?php

namespace App\Filament\Resources\Slideshows\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SlideshowForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                FileUpload::make('image')
                    ->label('Foto Slideshow')
                    ->disk('public')
                    ->visibility('public')
                    ->directory('slideshow')
                    ->image(),
            ]);
    }
}

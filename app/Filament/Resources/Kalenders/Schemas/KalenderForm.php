<?php

namespace App\Filament\Resources\Kalenders\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class KalenderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                FileUpload::make('file')
                    ->image()
                    ->disk('public')
                    ->directory('kalender')
                    ->acceptedFileTypes(['application/pdf'])
                    ->visibility('public')
                    ->required(),
            ]);
    }
}

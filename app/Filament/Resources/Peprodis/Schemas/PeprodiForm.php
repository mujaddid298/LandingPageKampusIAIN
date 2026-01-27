<?php

namespace App\Filament\Resources\Peprodis\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PeprodiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama Pengelola Prodi')
                    ->required(),
                TextInput::make('prodi')
                    ->label('Program Studi')
                    ->required(),
                TextInput::make('no_wa')
                    ->label('No. WhatsApp')
                    ->required(),
                FileUpload::make('image')
                    ->label('Foto Pengelola Prodi')
                    ->disk('public')
                    ->visibility('public')
                    ->directory('peprodi')
                    ->image(),
            ]);
    }
}

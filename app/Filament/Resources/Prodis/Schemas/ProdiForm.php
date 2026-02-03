<?php

namespace App\Filament\Resources\Prodis\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class ProdiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                FileUpload::make('file_pdf')
                    ->label('File PDF')
                    ->disk('public')
                    ->visibility('public')
                    ->directory('akreditasi')
                    ->acceptedFileTypes(['application/pdf'])
                    ->nullable(),
            ]);
    }
}

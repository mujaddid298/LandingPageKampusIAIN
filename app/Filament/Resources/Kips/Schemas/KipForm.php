<?php

namespace App\Filament\Resources\Kips\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class KipForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
                      ->components([
                TextInput::make('title')
                    ->required(),
                Textarea::make('content')
                    ->required()
                    ->rows(10)
                    ->columnSpanFull(),
                FileUpload::make('thumbnail')
                    ->label('File Tumbnail')
                    ->disk('public')
                    ->directory('kip/thumbnail')
                    ->image()
                    ->visibility('public')
                    ->nullable(),
                 FileUpload::make('file_pdf')
                    ->label('File PDF')
                    ->disk('public')
                    ->visibility('public')
                    ->directory('kip')
                    ->acceptedFileTypes(['application/pdf'])
                    ->nullable(),
            ]);
    }
}

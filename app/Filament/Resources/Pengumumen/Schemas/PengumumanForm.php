<?php

namespace App\Filament\Resources\Pengumumen\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;

class PengumumanForm
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
                    ->directory('pengumuman/thumbnail')
                    ->image()
                    ->visibility('public')
                    ->nullable(),
                 FileUpload::make('file_pdf')
                    ->label('File PDF')
                    ->disk('public')
                    ->visibility('public')
                    ->directory('pengumuman')
                    ->acceptedFileTypes(['application/pdf'])
                    ->nullable(),
            ]);
    }
}

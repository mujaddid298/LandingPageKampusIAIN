<?php

namespace App\Filament\Resources\Kalenders;

use App\Filament\Resources\Kalenders\Pages\CreateKalender;
use App\Filament\Resources\Kalenders\Pages\EditKalender;
use App\Filament\Resources\Kalenders\Pages\ListKalenders;
use App\Filament\Resources\Kalenders\Schemas\KalenderForm;
use App\Filament\Resources\Kalenders\Tables\KalendersTable;
use App\Models\Kalender;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class KalenderResource extends Resource
{
    protected static ?string $model = Kalender::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::CalendarDateRange;
    protected static ?string $pluralModelLabel = 'Kalender Pendidikan'; 

    public static function form(Schema $schema): Schema
    {
        return KalenderForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return KalendersTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListKalenders::route('/'),
            'create' => CreateKalender::route('/create'),
            'edit' => EditKalender::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources\Kips;

use App\Filament\Resources\Kips\Pages\CreateKip;
use App\Filament\Resources\Kips\Pages\EditKip;
use App\Filament\Resources\Kips\Pages\ListKips;
use App\Filament\Resources\Kips\Schemas\KipForm;
use App\Filament\Resources\Kips\Tables\KipsTable;
use App\Models\Kip;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class KipResource extends Resource
{
    protected static ?string $model = Kip::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedNewspaper;

    protected static ?string $recordTitleAttribute = 'judul';

    protected static ?string $pluralModelLabel = 'KIP Kuliah';

    public static function form(Schema $schema): Schema
    {
        return KipForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return KipsTable::configure($table);
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
            'index' => ListKips::route('/'),
            'create' => CreateKip::route('/create'),
            'edit' => EditKip::route('/{record}/edit'),
        ];
    }
}

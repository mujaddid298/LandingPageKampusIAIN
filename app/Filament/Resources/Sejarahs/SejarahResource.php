<?php

namespace App\Filament\Resources\Sejarahs;

use App\Filament\Resources\Sejarahs\Pages\CreateSejarah;
use App\Filament\Resources\Sejarahs\Pages\EditSejarah;
use App\Filament\Resources\Sejarahs\Pages\ListSejarahs;
use App\Filament\Resources\Sejarahs\Schemas\SejarahForm;
use App\Filament\Resources\Sejarahs\Tables\SejarahsTable;
use App\Models\Sejarah;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SejarahResource extends Resource
{
    protected static ?string $model = Sejarah::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedBookOpen;

    protected static ?string $recordTitleAttribute = 'name';
        protected static ?string $modelLabel = 'Sejarah'; // Label singular
    protected static ?string $pluralModelLabel = 'Sejarah'; 

    public static function form(Schema $schema): Schema
    {
        return SejarahForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SejarahsTable::configure($table);
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
            'index' => ListSejarahs::route('/'),
            'create' => CreateSejarah::route('/create'),
            'edit' => EditSejarah::route('/{record}/edit'),
        ];
    }
}

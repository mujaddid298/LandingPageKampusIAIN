<?php

namespace App\Filament\Resources\Peprodis;

use App\Filament\Resources\Peprodis\Pages\CreatePeprodi;
use App\Filament\Resources\Peprodis\Pages\EditPeprodi;
use App\Filament\Resources\Peprodis\Pages\ListPeprodis;
use App\Filament\Resources\Peprodis\Schemas\PeprodiForm;
use App\Filament\Resources\Peprodis\Tables\PeprodisTable;
use App\Models\Peprodi;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PeprodiResource extends Resource
{
    protected static ?string $model = Peprodi::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedUser;
    protected static ?string $modelLabel = 'Pengelola Prodi'; // Label singular
    protected static ?string $pluralModelLabel = 'Pengelola Prodi'; 

    public static function form(Schema $schema): Schema
    {
        return PeprodiForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PeprodisTable::configure($table);
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
            'index' => ListPeprodis::route('/'),
            'create' => CreatePeprodi::route('/create'),
            'edit' => EditPeprodi::route('/{record}/edit'),
        ];
    }
}

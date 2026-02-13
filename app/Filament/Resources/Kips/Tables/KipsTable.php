<?php

namespace App\Filament\Resources\Kips\Tables;

use App\Models\Kip;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class KipsTable
{
    public static function configure(Table $table): Table
    {
        return $table
        ->columns([    
        TextColumn::make('title')
                    ->searchable(),
                TextColumn::make('content')
                    ->limit(50)
                    ->searchable(),
                ImageColumn::make('thumbnail')
                    ->label('Thumbnail')
                    ->disk('public')
                    ->visibility('public')
                    ->square(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
             ->actions([
                EditAction::make(),
            ])
            ->filters([
            SelectFilter::make('tahun')
                ->label('Tahun')
                ->options(
                    Kip::query()
                        ->selectRaw('YEAR(created_at) as tahun')
                        ->distinct()
                        ->orderBy('tahun', 'desc')
                        ->pluck('tahun', 'tahun')
                        ->toArray()
                )
                ->query(function ($query, $data) {
                    if ($data['value']) {
                        $query->whereYear('created_at', $data['value']);
                    }
                }),
        ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}

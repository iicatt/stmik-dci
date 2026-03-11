<?php

namespace App\Filament\Resources\Banners\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;

// Kita samakan persis dengan import milik DosensTable
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;

class BannersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Preview')
                    ->square()
                    ->defaultImageUrl(url('/images/placeholder.png')), 
                    
                TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->limit(40)
                    ->default('Banner Gambar (Tanpa Judul)'),
                    
                TextColumn::make('type')
                    ->label('Tipe')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'text' => 'primary',
                        'image' => 'success',
                        default => 'gray',
                    })
                    ->formatStateUsing(fn (string $state): string => strtoupper($state)),
                    
                ToggleColumn::make('is_active')
                    ->label('Status'),
            ])
            ->defaultSort('sort_order')
            ->reorderable('sort_order') 
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
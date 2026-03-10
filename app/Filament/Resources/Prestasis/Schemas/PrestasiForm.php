<?php

namespace App\Filament\Resources\Prestasis\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;

class PrestasiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('image')
                    ->label('Gambar Prestasi')
                    ->image()
                    ->directory('prestasi')
                    ->required(),
                TextInput::make('title')
                    ->label('Judul Prestasi')
                    ->required(),
                Textarea::make('description')
                    ->label('Deskripsi')
                    ->required(),
                TextInput::make('link')
                    ->label('Link Detail (Opsional)')
                    ->url(),
            ]);
    }
}

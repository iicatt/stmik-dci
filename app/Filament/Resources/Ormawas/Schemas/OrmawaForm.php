<?php

namespace App\Filament\Resources\Ormawas\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;

class OrmawaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Toggle::make('is_active')
                    ->label('Status Aktif')
                    ->default(true),

                TextInput::make('nama_organisasi')
                    ->label('Nama Organisasi')
                    ->placeholder('Unit Kegiatan Mahasiswa')
                    ->required(),

                TextInput::make('singkatan')
                    ->label('Singkatan (Tampil di Span)')
                    ->placeholder('FORMAT')
                    ->required(),

                Textarea::make('deskripsi')
                    ->label('Deskripsi Singkat')
                    ->rows(3)
                    ->required()
                    ->columnSpanFull(),

                FileUpload::make('logo')
                    ->label('Logo Organisasi')
                    ->image()
                    ->directory('ormawa')
                    ->required()
                    ->columnSpanFull(),

                TextInput::make('link_selengkapnya')
                    ->label('Link Detail (Bisa ketik #)')
                    ->default('#'),

                TextInput::make('sort_order')
                    ->label('Urutan Tampil')
                    ->numeric()
                    ->default(0),
            ]);
    }
}
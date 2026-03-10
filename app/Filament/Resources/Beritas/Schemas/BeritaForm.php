<?php

namespace App\Filament\Resources\Beritas\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Get;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;
use Filament\Forms\Components\Select;

class BeritaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul')
                    ->label('Judul Berita')
                    ->required()
                    ->live() // update slug otomatis saat mengetik
                    ->afterStateUpdated(function ($state, callable $set) {
                        $set('slug', Str::slug($state));
                    }),

                TextInput::make('slug')
                    ->dehydrated() // ikut disimpan
                    ->required(),

                Textarea::make('konten')
                    ->label('Isi Berita')
                    ->required()
                    ->columnSpanFull(),

                

                FileUpload::make('thumbnail')
                    ->image()
                    ->directory('beritas/thumbnails')
                    ->preserveFilenames()
                    ->visibility('public')
                    ->appendFiles()
                    ->maxSize(4096)
                    ->required(),



               FileUpload::make('lampiran')
                    ->acceptedFileTypes(['application/pdf'])
                    ->directory('beritas/lampiran')
                    ->visibility('public'),

                Select::make('category')
                    ->label('Kategori Berita')
                    ->options([
                        'Akademik' => 'Akademik',
                        'Kemahasiswaan' => 'Kemahasiswaan',
                        'Ormawa' => 'Ormawa',
                        'Pengumuman' => 'Pengumuman',
                    ])
                    ->required(),

            ]);
    }
}

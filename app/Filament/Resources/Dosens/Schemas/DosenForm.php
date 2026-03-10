<?php

namespace App\Filament\Resources\Dosens\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Schemas\Components\Utilities\Set; // <- Ini adalah jalur yang benar untuk Filament versi baru
use Illuminate\Support\Str;

class DosenForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // --- Profil Dosen ---
                TextInput::make('nama')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),
                
                TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true),
                
                FileUpload::make('foto')
                    ->image()
                    ->directory('dosen')
                    ->required(),
                
                TextInput::make('jabatan_prodi')
                    ->label('Jabatan (Contoh: Ketua Prodi)'),

                // --- Data Akademik ---
                TextInput::make('nidn')
                    ->label('NIDN'),
                TextInput::make('jabatan_akademik'),
                TextInput::make('program_studi'),
                TextInput::make('bidang_keahlian'),
                TextInput::make('kelompok_keahlian'),
                
                Textarea::make('pendidikan')
                    ->rows(3)
                    ->columnSpanFull(),

                // --- Daftar Publikasi ---
                Repeater::make('publikasi')
                    ->schema([
                        TextInput::make('judul_publikasi')->required(),
                        TextInput::make('link_publikasi')->url()->label('Link URL'),
                    ])
                    ->columns(2)
                    ->addActionLabel('Tambah Publikasi')
                    ->columnSpanFull(),
            ]);
    }
}
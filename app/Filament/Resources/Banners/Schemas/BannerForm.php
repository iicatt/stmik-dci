<?php

namespace App\Filament\Resources\Banners\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Utilities\Get; // <-- INI YANG KITA PERBAIKI

class BannerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // --- Pengaturan Dasar ---
                Toggle::make('is_active')
                    ->label('Status Aktif')
                    ->default(true)
                    ->required(),

                Select::make('type')
                    ->label('Tipe Banner')
                    ->options([
                        'text' => 'Teks & Gambar (Seperti Gambar 2)',
                        'image' => 'Hanya Gambar Full',
                    ])
                    ->live() // Wajib agar kolom teks bisa muncul/hilang otomatis
                    ->required()
                    ->default('text'),
                    
                TextInput::make('sort_order')
                    ->label('Urutan')
                    ->required()
                    ->numeric()
                    ->default(0),

                // --- Konten Teks (Hanya muncul jika tipe text dipilih) ---
                TextInput::make('title')
                    ->label('Judul Utama')
                    ->visible(fn (Get $get) => $get('type') === 'text'),
                    
                TextInput::make('highlight_word')
                    ->label('Kata Diwarnai (Highlight)')
                    ->visible(fn (Get $get) => $get('type') === 'text'),
                    
                TextInput::make('button_text')
                    ->label('Teks Tombol')
                    ->default('Baca Selengkapnya')
                    ->visible(fn (Get $get) => $get('type') === 'text'),
                    
                TextInput::make('button_url')
                    ->label('Link Tombol (Bisa ketik /tentang-kami)')
                    ->visible(fn (Get $get) => $get('type') === 'text'),
                    
                Textarea::make('content')
                    ->label('Deskripsi')
                    ->columnSpanFull()
                    ->visible(fn (Get $get) => $get('type') === 'text'),

                // --- Gambar (Wajib untuk semua tipe) ---
                FileUpload::make('image')
                    ->label('Upload Foto (Untuk Latar atau Full)')
                    ->image()
                    ->directory('banners')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
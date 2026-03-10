<?php

namespace App\Filament\Resources\Dosens\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class DosenInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('nama'),
                TextEntry::make('slug'),
                TextEntry::make('foto'),
                TextEntry::make('jabatan_prodi')
                    ->placeholder('-'),
                TextEntry::make('nidn')
                    ->placeholder('-'),
                TextEntry::make('jabatan_akademik')
                    ->placeholder('-'),
                TextEntry::make('program_studi')
                    ->placeholder('-'),
                TextEntry::make('bidang_keahlian')
                    ->placeholder('-'),
                TextEntry::make('kelompok_keahlian')
                    ->placeholder('-'),
                TextEntry::make('pendidikan')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('publikasi')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}

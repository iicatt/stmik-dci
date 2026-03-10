<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $guarded = []; // Mengizinkan semua kolom diisi

    // Mengubah format json dari database menjadi array agar mudah dibaca Filament
    protected $casts = [
        'publikasi' => 'array',
    ];
}

<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $fillable = [
        'judul',
        'slug',
        'konten',
        'thumbnail',
        'lampiran',
        'category'
    ];
    
    protected static function boot()
{
    parent::boot();

    static::creating(function ($berita) {
        $slug = Str::slug($berita->judul);

        // Cek apakah slug sudah ada
        $count = Berita::where('slug', 'like', "{$slug}%")->count();

        // Jika sudah ada, tambahkan angka di belakang
        $berita->slug = $count ? "{$slug}-{$count}" : $slug;
    });

    static::updating(function ($berita) {
        $slug = Str::slug($berita->judul);

        $count = Berita::where('slug', 'like', "{$slug}%")
            ->where('id', '!=', $berita->id)
            ->count();

        $berita->slug = $count ? "{$slug}-{$count}" : $slug;
    });
}


}

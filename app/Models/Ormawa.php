<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ormawa extends Model
{
    protected $fillable = [
        'nama_organisasi',
        'singkatan',
        'deskripsi',
        'logo',
        'link_selengkapnya',
        'sort_order',
        'is_active',
    ];
}

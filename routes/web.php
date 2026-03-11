<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Models\Berita;
use App\Models\Banner;
use App\Models\Ormawa; // Tambahkan import model Ormawa
use App\Http\Controllers\Front\DosenController;

// 1. Halaman Beranda (Menggabungkan Banner, Ormawa, Berita, & Prestasi)
Route::get('/', function () {
    // Ambil data Banner
    $banners = Banner::where('is_active', true)
                     ->orderBy('sort_order')
                     ->get();

    // Ambil data Ormawa/UKM
    $ormawas = Ormawa::where('is_active', true)
                     ->orderBy('sort_order')
                     ->get();

    // Ambil data Berita Per Kategori
    $beritaPerKategori = Berita::latest()->get()->groupBy('category');
    
    // Ambil data Prestasi
    $prestasis = \App\Models\Prestasi::latest()->get(); 

    // Kirim SEMUA data ke view 'index'
    return view('index', compact('banners', 'ormawas', 'beritaPerKategori', 'prestasis'));
});

// 2. Halaman Berita
Route::get('/berita', function () {
    $beritas = Berita::latest()->get(); 
    return view('berita', compact('beritas'));
});

// 3. Halaman Dosen (Dinamis menggunakan Controller)
Route::get('/dosen', [DosenController::class, 'index'])->name('dosen.index');
Route::get('/dosen/{slug}', [DosenController::class, 'show'])->name('dosen.show');

// 4. Halaman Statis Lainnya
Route::get('/tentang-kami', function () {
    return view('about');
});
Route::get('/prodi', function () {
    return view('prodi');
});
Route::get('/mi', function () {
    return view('mi');
});
Route::get('/ti', function () {
    return view('ti');
});
Route::get('/ormawa', function () {
    return view('ormawa');
});
Route::get('/kontak', function () {
    return view('contact');
});
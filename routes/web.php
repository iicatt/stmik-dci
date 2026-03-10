<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Models\Berita;
use App\Http\Controllers\Front\DosenController;

// 1. Halaman Beranda (Mengirimkan berita & prestasi)
Route::get('/', function () {
    $beritaPerKategori = Berita::latest()->get()->groupBy('category');
    $prestasis = \App\Models\Prestasi::latest()->get(); 
    return view('index', compact('beritaPerKategori', 'prestasis'));
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
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
// Route untuk Halaman Daftar Berita
Route::get('/berita', function () {
    // Mengambil berita dengan Pagination (batas 6 berita per halaman)
    $beritas = \App\Models\Berita::latest()->paginate(6);
    
    // Mengambil 4 berita terbaru khusus untuk ditaruh di Sidebar Kanan
    $beritaTerbaru = \App\Models\Berita::latest()->take(4)->get(); 

    return view('berita', compact('beritas', 'beritaTerbaru'));
});
// Rute untuk Halaman Detail Berita
Route::get('/berita/{slug}', function ($slug) {
    $berita = \App\Models\Berita::where('slug', $slug)->firstOrFail();
    
    // Ambil 4 berita terbaru untuk sidebar kanan
    $beritaTerbaru = \App\Models\Berita::where('id', '!=', $berita->id)
                                      ->latest()
                                      ->take(4)
                                      ->get();

    return view('detailberita', compact('berita', 'beritaTerbaru'));
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
    // Mengambil data ormawa yang aktif, diurutkan berdasarkan sort_order
    $ormawas = \App\Models\Ormawa::where('is_active', true)
                                 ->orderBy('sort_order')
                                 ->get();
                                 
    return view('ormawa', compact('ormawas'));
});
Route::get('/kontak', function () {
    return view('contact');
});
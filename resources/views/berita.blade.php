@extends('layouts.app')

@section('title', 'Berita - STMIK DCI')

@section('content')

<div class="banner_page">
    <div class="banner_page_box">
        <h1>Berita </h1>
        <h1><font>STMIK DCI</font></h1>    
    </div>
</div>

<div class="container_halaman_berita">
    
    <div class="kiri_berita">
        
        <div class="breadcrumb" style="margin-bottom: 30px; color: #666; font-size: 16px;">
            <iconify-icon icon="mdi:home" style="font-size: 20px; vertical-align: middle;"></iconify-icon> 
            <span style="margin: 0 10px;">></span> 
            <a href="/" style="text-decoration: none; color: #666;">Home</a> 
            <span style="margin: 0 10px;">></span> 
            <strong>Berita</strong>
        </div>

        <div class="grid_berita">
            @forelse($beritas as $item)
            <a href="/berita/{{ $item->slug }}" class="card_berita">
                <img src="{{ asset('storage/' . $item->thumbnail) }}" alt="{{ $item->judul }}">
                <div class="tanggal">{{ $item->created_at->format('d/m/Y') }}</div>
                <h3>{{ $item->judul }}</h3>
                <p>{{ Str::limit(strip_tags($item->isi), 80) }}</p>
            </a>
            @empty
                <p>Belum ada berita yang diterbitkan.</p>
            @endforelse
        </div>

        <div class="pagination" style="margin-top: 40px;">
            {{ $beritas->links() }}
        </div>
    </div>

    <div class="kanan_sidebar sidebar_terbaru">
        <h2>Terbaru</h2>
        <div class="list_terbaru">
            @foreach($beritaTerbaru as $terbaru)
            <div class="item_terbaru">
                {{-- Kotak abu-abu seperti di desain, atau bisa diisi gambar asli jika mau --}}
                <img src="{{ asset('storage/' . $terbaru->thumbnail) }}" alt="">
                <a href="/berita/{{ $terbaru->slug }}">
                    {{ $terbaru->judul }}
                </a>
            </div>
            @endforeach
        </div>
    </div>

</div>

@endsection
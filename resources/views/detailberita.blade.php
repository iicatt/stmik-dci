@extends('layouts.app')

@section('title', $berita->judul . ' - STMIK DCI')

@section('content')



<div class="container_detail_berita">
    
    <div class="kiri_konten">
        
        <div class="social_share">
            <a href="#" class="bg-fb"><iconify-icon icon="ri:facebook-fill"></iconify-icon></a>
            <a href="#" class="bg-ig"><iconify-icon icon="ri:instagram-line"></iconify-icon></a>
            <a href="#" class="bg-tw"><iconify-icon icon="ri:twitter-x-fill"></iconify-icon></a>
            <a href="#" class="bg-tt"><iconify-icon icon="ri:tiktok-fill"></iconify-icon></a>
            <a href="#" class="bg-yt"><iconify-icon icon="ri:youtube-fill"></iconify-icon></a>
            <a href="#" class="bg-wa"><iconify-icon icon="ri:whatsapp-line"></iconify-icon></a>
        </div>

        <div class="breadcrumb_detail">
            <iconify-icon icon="mdi:home" style="font-size: 20px;"></iconify-icon> 
            <span>></span> 
            <a href="/">Home</a> 
            <span>></span> 
            <a href="/berita">Berita</a>
        </div>

        <h1 class="judul_utama">{{ $berita->judul }}</h1>

        <img src="{{ asset('storage/' . $berita->thumbnail) }}" alt="{{ $berita->judul }}" class="gambar_utama">

        <div class="isi_artikel">
            {!! $berita->konten !!}
        </div>

        @if ($berita->lampiran)
        <div style="margin-top: 40px; padding: 20px; background: #f9f9f9; border-left: 4px solid #0c1c4f; border-radius: 5px;">
            <p style="margin-bottom: 10px; font-weight: bold; color: #0c1c4f;">📎 Lampiran Dokumen:</p>
            <a href="{{ asset('storage/' . $berita->lampiran) }}" target="_blank" style="display: inline-block; padding: 8px 15px; background: #0c1c4f; color: white; text-decoration: none; border-radius: 5px; font-size: 14px;">
                Unduh Lampiran
            </a>
        </div>
        @endif
    </div>

    <div class="kanan_sidebar sidebar_terbaru">
        <h3>Terbaru</h3>
        
        <div class="list_sidebar">
            @forelse($beritaTerbaru as $terbaru)
            <div class="item_sidebar">
                <img src="{{ asset('storage/' . $terbaru->thumbnail) }}" alt="{{ $terbaru->judul }}">
                <div>
                    <a href="/berita/{{ $terbaru->slug }}">{{ $terbaru->judul }}</a>
                </div>
            </div>
            @empty
            <p style="color: #666; font-size: 14px;">Belum ada berita lainnya.</p>
            @endforelse
        </div>
    </div>

</div>

@endsection
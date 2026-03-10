
@extends('layouts.app')

@section('title', 'Hasil Seleksi Wawancara Calon Mahasiswa Baru - STMIK DCI')

@section('content')


    <div class="container_berita_detail"><div class="content_berita">
        <div class="breadcrumb">
            <a href="/">Home</a> <span>›</span> <a href="/berita">Berita</a> <span>›</span> 
            <span>{{ $berita->judul }}</span>
        </div>

        <h2 class="judul_berita">
            {{ $berita->judul }}
        </h2>

        <div class="gambar_berita">
            <img src="{{ asset('storage/' . $berita->thumbnail) }}" alt="{{ $berita->judul }}">
        </div>

        <div class="isi_berita">
            {!! $berita->konten !!}
        </div>

        @if ($berita->lampiran)
        <p class="lampiran">
            📎 <a href="{{ asset('storage/' . $berita->lampiran) }}" target="_blank">Unduh Lampiran</a>
        </p>
        @endif
    </div>
    @endsection

    <!-- SIDEBAR -->
    <aside class="sidebar_berita">
        <h3>Terbaru</h3>
        <ul>
            <li>
                <img src="/images/thumb1.png" alt="">
                <a href="#">Mahasiswa STMIK DCI Raih JUARA 1 Wordpress Case Competition 2024 Tingkat Nasional</a>
            </li>
            <li>
                <img src="/images/thumb2.png" alt="">
                <a href="#">Workshop Fotografi 2024: Membangun Karya Visual Kreatif</a>
            </li>
            <li>
                <img src="/images/thumb3.png" alt="">
                <a href="#">PKKMB STMIK DCI 2024: Membangun Generasi Digital yang Inovatif</a>
            </li>
            <li>
                <img src="/images/thumb4.png" alt="">
                <a href="#">Dosen STMIK DCI Rilis Riset Sistem Informasi Geospasial</a>
            </li>
        </ul>
    </aside>
</div>
@endsection

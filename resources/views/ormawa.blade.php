@extends('layouts.app')

@section('title', 'Organisasi Mahasiswa - STMIK DCI')

@section('content')
<div class="banner_page">
    <div class="banner_page_box">
        <h1>INFO</h1>
        <h1><font>ORMAWA STMIK DCI</font></h1>    
    </div>
</div>

<div class="container_ormawa">
    <div class="intro_ormawa">
        <h2>Organisasi Mahasiswa STMIK DCI</h2>
        <p>
            Menjadi wadah pengembangan potensi, kreativitas, dan kepemimpinan mahasiswa STMIK DCI.
            Temukan berbagai organisasi mahasiswa (Ormawa) yang dapat menjadi tempat berkontribusi
            dan berkembang bersama.
        </p>
    </div>

    <div class="grid_ormawa">

        {{-- Looping Data Ormawa dari Database --}}
        @forelse($ormawas as $item)
        <div class="ormawa_card">
            {{-- Asumsi nama kolom gambar kamu adalah 'gambar' atau 'logo' --}}
            <img src="{{ asset('storage/' . $item->logo) }}" alt="{{ $item->nama }}">
            
            <div class="ormawa_info">
                {{-- Asumsi nama kolomnya 'nama' dan 'deskripsi' --}}
                <h3>{{ $item->nama }}</h3>
                <p>{{ $item->deskripsi }}</p>
            </div>
        </div>
        @empty
        <div style="grid-column: 1 / -1; text-align: center; padding: 40px;">
            <p style="color: #fff; font-size: 18px;">Belum ada data Ormawa yang ditambahkan.</p>
        </div>
        @endforelse

    </div>
</div>
@endsection
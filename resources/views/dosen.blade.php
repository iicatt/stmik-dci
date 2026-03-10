@extends('layouts.app')

@section('title', 'Dosen Teknik Informatika - STMIK DCI Kota Tasikmalaya')

@section('content')
<div class="banner_page">
    <div class="banner_page_box">
        <h1>Dosen </h1>
        <h1><font>STMIK DCI</font></h1>    
    </div>
</div>

<div class="container_dosen">
    <h2 class="section-title">Dosen Program Studi Teknik Informatika</h2>

    <div class="grid_dosen">
        @foreach ($dosens as $dosen)
            <a href="{{ route('dosen.show', $dosen->slug) }}" style="text-decoration: none; color: inherit;">
                <div class="dosen_card">
                    <img src="{{ asset('storage/' . $dosen->foto) }}" alt="{{ $dosen->nama }}">
                    <h3>{{ $dosen->nama }}</h3>
                    <p>{{ $dosen->jabatan_prodi ?? 'Dosen Tetap - Teknik Informatika' }}</p>
                </div>
            </a>
        @endforeach
    </div>
</div>
@endsection
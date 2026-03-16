@extends('layouts.app')

@section('title', 'Dosen Teknik Informatika - STMIK DCI Kota Tasikmalaya')

@section('content')
<div class="banner_page">
    <div class="banner_page_box">
        <h1> <font>Dosen</font></h1>
        <p>Semua Dosen STMIK DCI</p>   
    </div>
</div>

<div class="container_dosen">
    <h2 class="section-title">Dosen STMIK DCI</h2>

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
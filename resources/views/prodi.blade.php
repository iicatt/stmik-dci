@extends('layouts.app')

@section('title', 'STMIK DCI Kota Tasikmalaya')

@section('content')
<div class="banner_page">
    <div class="banner_page_box">
        <h1>Tentang <font>Program Studi</font></h1>
        <p>Program Studi yang ada di STMIK DCI</p>  
    </div>
    <div class="content_about">
        <p>STMIK DCI memiliki dua program studi unggulan yang dirancang untuk menjawab kebutuhan dunia digital saat ini,yaitu Teknik Informatika (S1) yang memfokuskan pada penguasaan teknologi, pemrograman, dan pengembangan sistem berbasis komputer, serta Manajemen Informatika (D3) yang menekankan pada keterampilan praktis dalam pengelolaan data dan sistem informasi. Kedua program ini didukung oleh kurikulum yang relevan dengan dunia industri, tenaga pengajar profesional, dan lingkungan belajar yang kondusif untuk mencetak lulusan yang kompeten, adaptif, dan siap bersaing di era transformasi digital.</p>
    </div>
</div>

<div class="banner_prodi">
    <div class="prodi-card">
        <img src="{{ asset('images/ti_logo.png') }}" alt="Logo Teknik Informatika">
        <h3>TEKNIK INFORMATIKA</h3>
        <a href="{{ url('/ti') }}" class="lihat-link">Lihat Selengkapnya</a>
    </div>

    <div class="prodi-card">
        <img src="{{ asset('images/mi_logo.png') }}" alt="Logo Manajemen Informatika">
        <h3>MANAJEMEN INFORMATIKA</h3>
        <a href="{{ url('/mi') }}" class="lihat-link">Lihat Selengkapnya</a>
    </div>
</div>
@endsection
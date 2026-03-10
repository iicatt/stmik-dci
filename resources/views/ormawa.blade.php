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

        <!-- Senat Mahasiswa -->
        <div class="ormawa_card">
            <img src="/images/ormawa/senat.png" alt="Senat Mahasiswa">
            <div class="ormawa_info">
                <h3>Senat Mahasiswa</h3>
                <p>Badan legislatif mahasiswa yang berperan dalam pembentukan kebijakan kampus dan pengawasan ormawa.</p>
            </div>
        </div>

        <!-- BEM -->
        <div class="ormawa_card">
            <img src="/images/ormawa/bem.png" alt="BEM">
            <div class="ormawa_info">
                <h3>BEM</h3>
                <p>Badan Eksekutif Mahasiswa sebagai pelaksana kegiatan kemahasiswaan dan penyalur aspirasi mahasiswa STMIK DCI.</p>
            </div>
        </div>

        <!-- HIMATIKA -->
        <div class="ormawa_card">
            <img src="/images/ormawa/himatika.png" alt="HIMATIKA">
            <div class="ormawa_info">
                <h3>HIMATIKA</h3>
                <p>Himpunan Mahasiswa Teknik Informatika sebagai wadah akademik dan pengembangan minat mahasiswa TI.</p>
            </div>
        </div>

        <!-- HIMMAJI -->
        <div class="ormawa_card">
            <img src="/images/ormawa/himmaji.png" alt="HIMMAJI">
            <div class="ormawa_info">
                <h3>HIMMAJI</h3>
                <p>Himpunan Mahasiswa Manajemen Informatika yang berfokus pada pengembangan kemampuan manajerial dan teknologi informasi.</p>
            </div>
        </div>

        <!-- UKM FORMAT -->
        <div class="ormawa_card">
            <img src="/images/ormawa/format.png" alt="UKM FORMAT">
            <div class="ormawa_info">
                <h3>UKM FORMAT</h3>
                <p>Unit Kegiatan Mahasiswa Fotografi, Multimedia, dan Art (FORMAT) yang mewadahi kreativitas di bidang seni visual dan dokumentasi.</p>
            </div>
        </div>

        <!-- UKM MUSIK -->
        <div class="ormawa_card">
            <img src="/images/ormawa/musik.png" alt="UKM Musik">
            <div class="ormawa_info">
                <h3>UKM Musik</h3>
                <p>UKM yang menyalurkan minat dan bakat mahasiswa di bidang musik dan seni pertunjukan.</p>
            </div>
        </div>

        <!-- UKM LDK -->
        <div class="ormawa_card">
            <img src="/images/ormawa/ldk.png" alt="UKM LDK">
            <div class="ormawa_info">
                <h3>UKM LDK</h3>
                <p>Lembaga Dakwah Kampus sebagai wadah pembinaan spiritual dan kegiatan keagamaan mahasiswa STMIK DCI.</p>
            </div>
        </div>

        <!-- UKM OLAHRAGA -->
        <div class="ormawa_card">
            <img src="/images/ormawa/olahraga.png" alt="UKM Olahraga">
            <div class="ormawa_info">
                <h3>UKM Olahraga</h3>
                <p>Mengembangkan semangat sportivitas dan kesehatan jasmani melalui berbagai cabang olahraga.</p>
            </div>
        </div>

        <!-- UKM ZARADIKA -->
        <div class="ormawa_card">
            <img src="/images/ormawa/zaradika.png" alt="UKM Zaradika">
            <div class="ormawa_info">
                <h3>UKM Zaradika</h3>
                <p>Unit kegiatan mahasiswa yang berfokus pada kepedulian sosial, penanggulangan bencana, dan pengabdian masyarakat.</p>
            </div>
        </div>

    </div>
</div>
@endsection

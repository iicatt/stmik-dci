@extends('layouts.app')

@section('title', $dosen->nama . ' - STMIK DCI Kota Tasikmalaya')

@section('content')
<div class="banner_page">
    <div class="banner_page_box">
        <h1>Detail Dosen</h1>
        <h1><font>STMIK DCI</font></h1>    
    </div>
</div>

<div class="container_dosen_detail">
    <div class="dosen_detail_box">
        <div class="dosen_detail_left">
            <img src="{{ asset('storage/' . $dosen->foto) }}" alt="{{ $dosen->nama }}" class="foto_dosen">
        </div>

        <div class="dosen_detail_right">
            <h2>{{ strtoupper($dosen->nama) }}</h2>
            <table class="table_detail">
                <tr>
                    <td><strong>NIDN</strong></td>
                    <td>: {{ $dosen->nidn ?? '-' }}</td>
                </tr>
                <tr>
                    <td><strong>Jabatan Akademik</strong></td>
                    <td>: {{ $dosen->jabatan_akademik ?? '-' }}</td>
                </tr>
                <tr>
                    <td><strong>Program Studi</strong></td>
                    <td>: {{ $dosen->program_studi ?? '-' }}</td>
                </tr>
                <tr>
                    <td><strong>Bidang Keahlian</strong></td>
                    <td>: {{ $dosen->bidang_keahlian ?? '-' }}</td>
                </tr>
                <tr>
                    <td><strong>Kelompok Keahlian</strong></td>
                    <td>: {{ $dosen->kelompok_keahlian ?? '-' }}</td>
                </tr>
                <tr>
                    <td><strong>Pendidikan</strong></td>
                    <td>: <br>{!! nl2br(e($dosen->pendidikan)) !!}</td>
                </tr>
            </table>
        </div>
    </div>

    <div class="dosen_publication">
        @php
            // Hitung jumlah publikasi
            $jumlahPublikasi = is_array($dosen->publikasi) ? count($dosen->publikasi) : 0;
        @endphp

        <h3>Publikasi ({{ str_pad($jumlahPublikasi, 2, '0', STR_PAD_LEFT) }} Data)</h3>
        
        @if($jumlahPublikasi > 0)
            <ul>
                @foreach($dosen->publikasi as $item)
                    <li>
                        <strong>Judul:</strong> {{ $item['judul_publikasi'] }}<br>
                        <strong>Link:</strong> 
                        @if(!empty($item['link_publikasi']))
                            <a href="{{ $item['link_publikasi'] }}" target="_blank">{{ $item['link_publikasi'] }}</a>
                        @else
                            -
                        @endif
                    </li>
                @endforeach
            </ul>
        @else
            <p>Belum ada data publikasi.</p>
        @endif
    </div>
</div>
@endsection
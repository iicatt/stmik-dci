@extends('layouts.app')

@section('title', 'STMIK DCI Kota Tasikmalaya')

@section('content')
<div class="contact_section">
    <div class="contact_container">
        <h2>Kontak STMIK DCI</h2>
        <p>Untuk informasi lebih lanjut, silakan hubungi kami melalui kontak di bawah ini:</p>

        <div class="contact_info">
            <p><strong>Alamat:</strong> Jl. Sutisna Senjaya No.158-A, Cikalang, Kec. Tawang, Kab. Tasikmalaya, Jawa Barat 46112</p>
            <p><strong>Telepon:</strong> (0265) 332492</p>
            <p><strong>Email:</strong> info@stmikdci.ac.id</p>
            <p><strong>Jam Operasional:</strong> Senin – Sabtu, 08.00 – 16.00 WIB</p>
            <p><strong>Provinsi:</strong> Jawa Barat</p>
        </div>

        <div class="contact_map">
            <iframe 
                src="https://www.google.com/maps?q=STMIK+DCI+Tasikmalaya&output=embed" 
                width="100%" height="350" style="border:0;" 
                allowfullscreen="" loading="lazy">
            </iframe>
        </div>
    </div>
</div>

@endsection
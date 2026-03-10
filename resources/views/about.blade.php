@extends('layouts.app')

@section('title', 'Tentang Kami | STMIK DCI Kota Tasikmalaya')

@section('content')

<div class="banner_page">
    <div class="banner_page_box">
        <h1>Tentang <font>Kami</font></h1>
        <p>Profil dan sejarah kampus STMIK DCI Kota Tasikmalaya</p>
    </div>
    <div class="content_about">
        <p>Membangun Generasi Digital di Tengah Arus Globalisasi Kampus Unggul, Profesional, dan Berdaya Saing Global  Di bawah naungan Yayasan Digita Loka, STMIK DCI hadir menjawab tantangan zaman: dari era reformasi hingga derasnya arus globalisasi.  Bersama kami, wujudkan masa depan Anda di dunia teknologi informasi yang berlandaskan moralitas, profesionalisme, dan inovasi.</p>
    </div>
    <div class="video_about">
        <div class="heading_home">
            <h2>Profil Kampus</h2>
            <div class="video_about_box">
                <iframe src="https://www.youtube.com/embed/9xwazD5SyVg?si=FVJg4_yaUjcjuWxN" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<div class="about_content_section">
    <div class="heading_home heading_home_white">
        <h2>Pengenalan Logo</h2>
    </div>
    <div class="about_content_section_layout">
        <div class="about_content_img">
            <img src="{{ asset('images/logo_about.png') }}" alt="Logo STMIK DCI Kota Tasikmalaya">
            <button class="number_box" data-popup="popup1">1</button>
            <button class="number_box number_box_sc" data-popup="popup2">2</button>
            <button class="number_box number_box_tr" data-popup="popup3">3</button>
            <button class="number_box number_box_fr" data-popup="popup4">4</button>
            <button class="number_box number_box_fv" data-popup="popup5">5</button>
            <button class="number_box number_box_sx" data-popup="popup6">6</button>
            <button class="number_box number_box_svn" data-popup="popup7">7</button>
        </div>
        <div class="about_content_text">
            <p>Logo STMIK DCI merupakan simbol yang mencerminkan identitas, nilai, dan cita-cita luhur institusi. Logo ini dirancang sebagai abstraksi dari tiga hal utama yang menjadi kepribadian STMIK DCI, yaitu:</p>
            <ol>
                <li>Niat dan dasar penyelenggaraan pendidikan.</li>
                <li>Pelaksanaan Tri Dharma Perguruan Tinggi.</li>
                <li>Cita-cita luhur untuk mencerdaskan kehidupan bangsa.</li>
            </ol>
            <p>Warna putih dipilih sebagai warna dominan karena melambangkan kesucian dan ketulusan yang abadi. Sementara itu, warna kuning emas merepresentasikan semangat kemajuan yang berakar pada kearifan lokal Priangan Timur, yaitu falsafah "Sukapura Ngadaun Ngora", sebagai simbol kemajuan yang berkelanjutan.</p>
        </div>
    </div>
</div>
<div class="hymne_layout">
    <div class="hymne_box">
        <div class="hymne_box_heading">
            <h2>MARS STMIK DCI</h2>
            <span>Karsono / Sanyata P.</span>
        </div>
        <div class="hymne_box_desc">
            <p>Di ufuk Priangan Timur</p>
            <p>Bangkitlah putra-putri bangsa</p>
            <p>Membawa kesadaran jiwa</p>
            <p>Menjadi pelopor kemajuan</p>
            <p>Bernaung budaya bumi Priangan</p>
            <p>Meniti ilmu nan sejati</p>
            <p>Berkarya, berdo’a, dan berprestasi</p>
            <p>Majulah STMIK DCI</p>
        </div>
    </div>
    <div class="bohong"></div>
    <div class="hymne_box">
        <div class="hymne_box_heading">
            <h2>HYMNE STMIK DCI</h2>
            <span>Rommy Dj / Sanyata P.</span>
        </div>
        <div class="hymne_box_desc">
            <p>Dalam lindungan Tuhan Yang Esa STMIK DCI mengabdi</p>
            <p>Dengan iman dan ilmu mulia berkarya dengan ilmu dan taqwa</p>
            <p>Menjunjung darma bakti perguruan tinggi untuk nusa bangsa dan budaya</p>
            <p>Ilmu yang diajarkan warisan kebaikan penuh catatan persembahan</p>
            <p>Bagaikan sejarah kau lepas nista</p>
            <p>Sinar cahaya ‘kan singkap gelap menjadi terang</p>

        </div>
    </div>
</div>

  <!-- Popup 1 -->
  <div id="popup1" class="popup">
    <div class="popup-content">
      <span class="close">&times;</span>
      <h2>Bentuk segi lima berwarna hitam</h2>
      <p>Melambangkan STMIK DCI yang berpijak teguh pada dasar negara Republik Indonesia, yaitu Pancasila. Warna hitam mencerminkan kekuatan prinsip yang tidak tergoyahkan.</p>
    </div>
  </div>

  <!-- Popup 2 -->
  <div id="popup2" class="popup">
    <div class="popup-content">
      <span class="close">&times;</span>
      <h2>Latar belakang putih</h2>
      <p>Menunjukkan bahwa semua aktivitas di STMIK DCI dilandasi oleh niat yang tulus dan cita-cita yang suci.</p>
    </div>
  </div>

  <!-- Popup 3 -->
  <div id="popup3" class="popup">
    <div class="popup-content">
      <span class="close">&times;</span>
      <h2>Tulisan melingkar “SEKOLAH TINGGI MANAJEMEN INFORMATIKA & KOMPUTER DCI” berwarna biru tua</h2>
      <p>Menggambarkan identitas lembaga sebagai sekolah tinggi yang berfokus pada pendidikan di bidang teknik dan komputer, dengan warna biru tua sebagai simbol kedalaman ilmu dan profesionalisme.</p>
    </div>
  </div>

  <!-- Popup 3 -->
  <div id="popup4" class="popup">
    <div class="popup-content">
      <span class="close">&times;</span>
      <h2>Bokor bersayap lima berwarna kuning emas</h2>
      <p>Terinspirasi dari lambang Garuda Pancasila, mencerminkan semangat Bhinneka Tunggal Ika yang murni, serta nilai-nilai kebangsaan yang luhur.</p>
    </div>
  </div>

  <!-- Popup 3 -->
  <div id="popup5" class="popup">
    <div class="popup-content">
      <span class="close">&times;</span>
      <h2>Bokor berkaki tiga berwarna kuning emas</h2>
      <p>Melambangkan Tri Dharma Perguruan Tinggi, yaitu pendidikan, penelitian, dan pengabdian kepada masyarakat yang dilaksanakan secara tulus dan konsisten.</p>
    </div>
  </div>

  <!-- Popup 3 -->
  <div id="popup6" class="popup">
    <div class="popup-content">
      <span class="close">&times;</span>
      <h2>Bokor dinamis melengkung berwarna merah</h2>
      <p>Menyimbolkan penyelenggaraan pendidikan yang dinamis, penuh semangat, gairah, dan optimisme dalam menghadapi tantangan zaman.</p>
    </div>
  </div>

  <!-- Popup 3 -->
  <div id="popup7" class="popup">
    <div class="popup-content">
      <span class="close">&times;</span>
      <h2>Lingkaran biru bergaris putih</h2>
      <p>Menandakan fokus STMIK DCI pada dunia industri berbasis teknologi informasi dan komputer, dengan orientasi pada asas manfaat serta solusi nyata bagi kehidupan masyarakat, bangsa, dan negara. Warna biru melambangkan teknologi, sedangkan garis putih di dalamnya mencerminkan penerangan dan harapan.</p>
    </div>
  </div>

@endsection
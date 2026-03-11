@extends('layouts.app')

@section('title', 'STMIK DCI Kota Tasikmalaya')

@section('content')
   <div class="banner">
       <div class="swiper swiperBanner">
            <div class="swiper-wrapper">
                
                @foreach($banners as $banner)
                    <div class="swiper-slide">
                        
                        @if($banner->type === 'text')
                            {{-- PERBAIKAN DI BARIS BAWAH INI: Menambahkan style background-image --}}
                            <div class="banner_box" style="background-image: url('{{ asset('storage/' . $banner->image) }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                                <div class="banner_content">
                                    
                                    @php
                                        $title = e($banner->title); // Amankan string dari XSS
                                        if (!empty($banner->highlight_word)) {
                                            $highlight = e($banner->highlight_word);
                                            // Ganti kata highlight dengan tag <font>
                                            $title = str_replace($highlight, "<font>$highlight</font>", $title);
                                        }
                                    @endphp
                                    
                                    <h1>{!! $title !!}</h1>
                                    <p>{{ $banner->content }}</p>
                                    
                                    <div class="banner_box_layout">
                                        <a href="{{ $banner->button_url ?? '#' }}">
                                            <button>{{ $banner->button_text ?? 'Baca Selengkapnya' }}</button>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        @elseif($banner->type === 'image')
                            <div class="banner_box_dynamic">
                                {{-- Gunakan helper asset('storage/...') untuk memanggil gambar dari public/storage --}}
                                <img src="{{ asset('storage/' . $banner->image) }}" alt="{{ $banner->title ?? 'Banner Slide STMIK DCI' }}">
                            </div>
                        @endif
                        
                    </div>
                @endforeach

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <div class="section_2">
        <div class="grid_section_2">
            <div class="box_section_2">
                <div class="box_section_2_img">
                    <img src="{{ asset('images/stmik.webp') }}" alt="Tentang STMIK DCI Kota Tasikmalaya">
                </div>
                <div class="box_section_2_content">
                    <a href="#">
                        <h2>STMIK DCI</h2>
                    </a>
                    <p>Perguruan tinggi informatika pertama di Priangan Timur</p>
                </div>
            </div>

            <div class="box_section_2">
                <div class="box_section_2_img">
                    <img src="{{ asset('images/toga.webp') }}" alt="Lulusan STMIK DCI Kota Tasikmalaya">
                </div>
                <div class="box_section_2_content">
                    <a href="#">
                        <h2>Lulusan DCI</h2>
                    </a>
                    <p>Alumni siap bersaing dengan kompetensi teknologi terkini</p>
                </div>
            </div>

            <div class="box_section_2">
                <div class="box_section_2_img">
                    <img src="{{ asset('images/book.webp') }}" alt="Sistem Perkuliahan STMIK DCI Kota Tasikmalaya">
                </div>
                <div class="box_section_2_content">
                    <a href="#">
                        <h2>Sistem Perkuliahan</h2>
                    </a>
                    <p>Pembelajaran modern berbasis teknologi dan praktik lapangan</p>
                </div>
            </div>

            <div class="box_section_2">
                <div class="box_section_2_img">
                    <img src="{{ asset('images/fasilitas.webp') }}" alt="Fasilitas STMIK DCI Kota Tasikmalaya">
                </div>
                <div class="box_section_2_content">
                    <a href="#">
                        <h2>Fasilitas</h2>
                    </a>
                    <p>Sarana modern untuk belajar dan pengembangan minat</p>
                </div>
            </div>

            <div class="box_section_2">
                <div class="box_section_2_img">
                    <img src="{{ asset('images/organisasi.webp') }}" alt="Organisasi Mahasiswa STMIK DCI Kota Tasikmalaya">
                </div>
                <div class="box_section_2_content">
                    <a href="#">
                        <h2>ORMAWA DCI</h2>
                    </a>
                    <p>Wadah untuk mengasah potensi dan kepemimpinan</p>
                </div>
            </div>

            <div class="box_section_2">
                <div class="box_section_2_img">
                    <img src="{{ asset('images/lecturer.webp') }}" alt="Dosen STMIK DCI Kota Tasikmalaya">
                </div>
                <div class="box_section_2_content">
                    <a href="#">
                        <h2>Dosen DCI</h2>
                    </a>
                    <p>Berdedikasi untuk mentransfer ilmu dan menginspirasi</p>
                </div>
            </div>

        </div>
        <div class="heading_program">
            <h2>Program Studi</h2>
        </div>
    </div>
    <div class="section_3">
        <div class="section_3_img">
            <img src="{{ asset('images/ti_logo.png') }}" alt="Logo STMIK DCI Kota Tasikmalaya">
        </div>
        <div class="section_3_content">
            <h3>Teknik Informatika</h3>
            <p>Program Studi Teknik Informatika jenjang Sarjana (S1) dirancang untuk menghasilkan lulusan yang kompeten di bidang teknologi informasi, pemrograman, serta pengembangan sistem digital.</p>
            <a href="#"><button>Baca Selengkapnya</button></a>
        </div>
    </div>
    <div class="section_3 section_3_mi">
        <div class="section_3_content">
            <h3>Manajemen Informatika</h3>
            <p>Program Studi Manajemen Informatika (D3) menyiapkan lulusan terampil mengelola sistem informasi, menguasai pemrograman terapan, serta merancang dan mengimplementasikan solusi digital.</p>
            <a href="#"><button>Baca Selengkapnya</button></a>
        </div>
        <div class="section_3_img">
            <img src="{{ asset('images/mi_logo.png') }}" alt="Logo STMIK DCI Kota Tasikmalaya">
        </div>
    </div>
    <div class="swiper ukmSlide">
        <div class="swiper-wrapper">
            
            @foreach($ormawas as $ormawa)
                <div class="swiper-slide">
                    <div class="box_ukm">
                        <div class="heading_box_ukm">
                            <h2>Organisasi Mahasiswa</h2>
                        </div>
                        <div class="box_ukm_layout">
                            <img src="{{ asset('storage/' . $ormawa->logo) }}" alt="Logo {{ $ormawa->singkatan }} STMIK DCI">
                            
                            <div class="box_ukm_content">
                                <h3>{{ $ormawa->nama_organisasi }} <br/><span>{{ $ormawa->singkatan }}</span></h3>
                                
                                <p>{{ $ormawa->deskripsi }}</p>
                                
                                <a href="{{ $ormawa->link_selengkapnya ?? '#' }}">
                                    <button>Baca Selengkapnya</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="artikel_home">
        <div class="artikel_home_layout">
    
            {{-- BAGIAN 1: HEADER & TOMBOL TAB --}}
            <div class="heading_home heading_home_tab heading_home_between">
                <div class="tab">
                    {{-- Looping Tombol Tab --}}
                    @foreach ($beritaPerKategori as $namaKategori => $daftarBerita)
                        <button class="tablinks" 
                                onclick="openCity(event, 'Tab-{{ Str::slug($namaKategori) }}')" 
                                {{-- Tambahkan id="defaultOpen" HANYA pada tombol pertama --}}
                                @if($loop->first) id="defaultOpen" @endif>
                            {{ $namaKategori }}
                        </button>
                    @endforeach
                </div>

                {{-- Looping Tombol "Lihat Lainnya" versi Dekstop --}}
                @foreach ($beritaPerKategori as $namaKategori => $daftarBerita)
                    <div id="Lihat-Tab-{{ Str::slug($namaKategori) }}" class="see_other_dekstop tabcontent_link" style="display: none;">
                        <a href="/berita">Lihat Lainnya <iconify-icon icon="solar:arrow-right-linear"></iconify-icon></a>
                    </div>
                @endforeach
            </div>

            {{-- BAGIAN 2: ISI KONTEN BERITA --}}
            @forelse ($beritaPerKategori as $namaKategori => $daftarBerita)
                <div id="Tab-{{ Str::slug($namaKategori) }}" class="tabcontent" style="display: none;">
                    <div class="product_home_layout">
                        <div class="product_home">

                            {{-- Looping Isi Berita --}}
                            @foreach ($daftarBerita->take(4) as $berita)
                            <div class="product_box">
                                <div class="product_image">
                                    <a href="/berita/{{ $berita->slug }}">
                                        <div class="category_badge">
                                            <span>{{ $namaKategori }}</span>
                                        </div>
                                        <div class="view_badge">
                                            <iconify-icon icon="iconoir:eye-solid"></iconify-icon>
                                            <span>{{ $berita->views ?? 0 }}</span>
                                        </div>
                                        <img src="{{ asset('storage/' . $berita->thumbnail) }}" alt="{{ $berita->judul }}">
                                    </a>
                                </div>

                                <div class="product_content">
                                    <h3>{{ $berita->judul }}</h3>
                                    <p>{{ Str::limit(strip_tags($berita->isi), 80) }}</p>
                                </div>

                                <a href="/berita/{{ $berita->slug }}">
                                    <button><iconify-icon icon="iconoir:eye"></iconify-icon>Lihat Selengkapnya</button>
                                </a>
                            </div>
                            @endforeach

                        </div>
                        
                        {{-- Tombol "Lihat Lainnya" versi Mobile --}}
                        <a href="/berita" class="see_other_mobile">Lihat Lainnya
                            <iconify-icon icon="solar:arrow-right-linear"></iconify-icon>
                        </a>
                    </div>
                </div>
            @empty
                <p style="color: white; text-align:center;">Belum ada berita yang tersedia.</p>
            @endforelse

        </div>
    </div>
    <div class="prestasi_home">
        <div class="artikel_home_layout">
            <div class="heading_home heading_home_white heading_home_between">
                <h2>Prestasi STMIK DCI</h2>
                <a href="#">Lihat Lainnya <iconify-icon icon="solar:arrow-right-linear"></iconify-icon></a>
            </div>
            
            {{-- Container utama kartu prestasi --}}
            <div class="prestasiHome">
                
                {{-- Mulai Looping Data dari Database --}}
                @forelse($prestasis as $item)
                {{-- Hapus kelas 'product_box_left' dan 'product_box_left', ganti dengan 'prestasi-card' --}}
                <div class="prestasi-card">
                    <div class="product_image">
                        <a href="{{ $item->link ?? '#' }}">
                            <img src="{{ Storage::url($item->image) }}" alt="{{ $item->title }}">
                        </a>
                    </div>
                    {{-- Hapus kelas 'product_content_left', ganti dengan 'prestasi-content' --}}
                    <div class="prestasi-content">
                        <h3>{{ $item->title }}</h3>
                        <p>{{ $item->description }}</p>
                        <a href="{{ $item->link ?? '#' }}">
                            {{-- Tambahkan kelas 'btn-detail' pada tombol --}}
                            <button class="btn-detail"><iconify-icon icon="iconoir:eye"></iconify-icon>Lihat Detail</button>
                        </a>
                    </div>
                </div> 
                @empty
                    <p style="color: white;">Belum ada data prestasi.</p>
                @endforelse
                {{-- Selesai Looping --}}

            </div>
        </div>
    </div>
</div>
@endsection
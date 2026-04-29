<header>
    <div class="nav_top">
        <div class="identity_nav">
            <div class="identity_nav_box">
                <iconify-icon icon="basil:location-outline"></iconify-icon>
                <span>Jl. Sutisna Senjaya, Cikalang, Kota. Tasikmalaya</span>
            </div>
            <div class="identity_nav_box">
                <iconify-icon icon="mage:phone-call"></iconify-icon>
                <span>0265-332492</span>
            </div>
            <div class="identity_nav_box">
                <iconify-icon icon="carbon:email"></iconify-icon>
                <span>info@stmik-dci.ac.id</span>
            </div>
        </div>
        <div class="social_nav">
            <a href="https://www.instagram.com/stmikdci/" target="_blank" rel="noopener noreferrer">
                <div class="social_nav_box">
                    <iconify-icon icon="mdi:instagram"></iconify-icon>
                </div>
            </a>
            <a href="https://www.tiktok.com/@stmikdci" target="_blank" rel="noopener noreferrer">
                <div class="social_nav_box">
                    <iconify-icon icon="ic:baseline-tiktok"></iconify-icon>
                </div>
            </a>
        </div>
    </div>
    
    <div class="nav_container">
        <a href="/">
            <div class="logo_container">
                <div class="logo">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo STMIK DCI Kota Tasikmalaya">
                </div>
                <div class="text_logo">
                    <p>Sekolah Tinggi Manajemen Informatika & Komputer DCI</p>
                </div>
            </div>
        </a>
        <button class="hamburger" onclick="toggleActive()"><iconify-icon icon="gg:menu"></iconify-icon></button>
        
        <nav id="targetElement">
            <div class="mobile_header">
                <div class="logo_container">
                    <div class="logo">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo STMIK DCI Kota Tasikmalaya">
                    </div>
                    <div class="text_logo">
                        <p>Sekolah Tinggi Manajemen Informatika & Komputer DCI</p>
                    </div>
                </div>
                <button class="close_menu" onclick="toggleActive()"><iconify-icon icon="gg:close"></iconify-icon></button>
            </div>

            <div class="menu_mobile_layout">
                <a href="/">Beranda</a>
                <a href="/tentang-kami">Tentang Kami</a>
                <a href="/prodi">Prodi</a>
                <a href="/dosen">Dosen</a>
                <a href="/sub-domain">Sub Domain</a>
                <a href="/ormawa">Ormawa</a>
                <a href="/kontak">Kontak</a>
                
                <button class="expand_mega_btn" onclick="toggleMegaMenu()">
                    <iconify-icon icon="carbon:list-boxes"></iconify-icon>
                </button>
            </div>
        </nav>
    </div>

    <div class="mega_menu_wrapper" id="megaMenu">
        <div class="mega_menu_grid">
            <div class="mega_col">
                <h4>Tentang Kami</h4>
                <a href="/sejarah">Sejarah</a>
                <a href="/visi-misi">Visi Misi</a>
                <a href="/yayasan">Yayasan Digitaloka</a>
                <a href="/staff">Staff TenDik</a>
                <a href="/profile">Profile</a>
                <a href="/sertifikat">Sertifikat Akreditasi</a>
            </div>
            <div class="mega_col">
                <h4>Prodi</h4>
                <a href="/ti">Teknik Informatika</a>
                <a href="/mi">Manajemen Informatika</a>
            </div>
            <div class="mega_col">
                <h4>Dosen</h4>
                <a href="/dosen-ti">Teknik Informatika</a>
                <a href="/dosen-mi">Manajemen Informatika</a>
            </div>
            <div class="mega_col">
                <h4>Sub Domain</h4>
                <a href="#">SIAK</a>
                <a href="#">PERPUSTAKAAN</a>
                <a href="#">LPPM</a>
                <a href="#">PENDAFTARAN</a>
                <a href="#">PMB STMIK DCI</a>
                <a href="#">JURNAL</a>
                <a href="#">LMS</a>
                <a href="#">REPOSITORI</a>
            </div>
            <div class="mega_col">
                <h4>Info Stmik Dci</h4>
                <a href="/berita">Berita</a>
                <a href="/kegiatan">Kegiatan Akademik</a>
            </div>
            <div class="mega_col">
                <h4>Ormawa</h4>
                @php
                    // Mengambil data Ormawa langsung di dalam view agar aman di semua halaman
                    $menuOrmawas = \App\Models\Ormawa::where('is_active', true)->orderBy('sort_order')->get();
                @endphp

                @forelse($menuOrmawas as $ormawa)
                    <a href="{{ $ormawa->link_selengkapnya ?? '#' }}">{{ $ormawa->singkatan }}</a>
                @empty
                    <a href="#">Belum ada organisasi</a>
                @endforelse
            </div>
            <div class="mega_col">
                <h4>Kontak</h4>
            </div>
            <div class="mega_col">
                <h4>Kuisioner</h4>
                <a href="#">Kepuasan Stake Holder</a>
                <a href="#">Tracer Study</a>
                <a href="#">Pengguna Lulusan</a>
            </div>
        </div>
    </div>
</header>
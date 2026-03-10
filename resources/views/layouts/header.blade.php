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
            <a href="https://www.instagram.com/anugrahbarugrup/" target="_blank" rel="noopener noreferrer">
                <div class="social_nav_box">
                    <iconify-icon icon="mdi:instagram"></iconify-icon>
                </div>
            </a>
        
            <a href="https://www.tiktok.com/@anugrah_baruinterior" target="_blank" rel="noopener noreferrer">
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
            </div>
        </nav>
    </div>
</header>
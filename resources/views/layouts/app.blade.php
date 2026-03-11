<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>STMIK DCI</title>
    
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<body>

    @include('layouts.header')

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
     <script>
        var swiperBanner = new Swiper(".swiperBanner", {
            effect: "fade",
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
    <script>
        var ukmSlide = new Swiper(".ukmSlide", {
            effect: "fade",
            loop:true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
    <script>
        // Script 1x bisa dipakai untuk semua popup
        document.querySelectorAll("button[data-popup]").forEach(btn => {
        btn.addEventListener("click", () => {
            const popupId = btn.getAttribute("data-popup");
            document.getElementById(popupId).style.display = "flex";
        });
        });

        // Tutup popup saat klik tombol close
        document.querySelectorAll(".popup .close").forEach(closeBtn => {
        closeBtn.addEventListener("click", () => {
            closeBtn.closest(".popup").style.display = "none";
        });
        });

        // Tutup popup saat klik di luar konten
        document.querySelectorAll(".popup").forEach(popup => {
        popup.addEventListener("click", e => {
            if (e.target === popup) popup.style.display = "none";
        });
        });
    </script>
    <script>
        var artikelHome = new Swiper(".artikelHome", {
            slidesPerView: 2,
            spaceBetween: 20,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            autoplay: {
                delay: 2500,
                disableOnInteraction: true,
            },
            breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
            },
        });
    </script>
    <script>
        var prestasiHome = new Swiper(".prestasiHome", {
            slidesPerView: 4,
            spaceBetween: 20,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            autoplay: {
                delay: 2500,
                disableOnInteraction: true,
            },
            breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
            },
        });
    </script>
    <script>
        function toggleActive() {
            const target = document.getElementById('targetElement');
            target.classList.toggle('active');
        }
    </script>
    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;

            // Sembunyikan semua tab
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            // Hilangkan active di tombol
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            // Tampilkan tab yang dipilih
            document.getElementById(cityName).style.display = "block";

            // Jika ada "lihat lainnya" versi tab, tampilkan juga
            const lihat = document.getElementById("lihat" + cityName);
            if (lihat) lihat.style.display = "block";

            // Tambahkan kelas active ke tombol
            evt.currentTarget.className += " active";
        }

        // Default buka tab pertama
        document.getElementById("defaultOpen").click();

    </script>
    <script>
    function toggleMegaMenu() {
        const megaMenu = document.getElementById('megaMenu');
        megaMenu.classList.toggle('active');
    }

    // Fitur tambahan: Klik di luar menu akan otomatis menutup Mega Menu
    document.addEventListener('click', function(event) {
        const megaMenu = document.getElementById('megaMenu');
        const btn = document.querySelector('.expand_mega_btn');
        
        // Cek jika klik bukan pada menu dan bukan pada tombol
        if (!megaMenu.contains(event.target) && !btn.contains(event.target)) {
            megaMenu.classList.remove('active');
        }
    });
</script>
</body>
</html>

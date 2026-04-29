# 🎓 Panduan Penggunaan Admin Panel - Website STMIK DCI

Dokumentasi ini berisi panduan lengkap untuk Administrator dalam mengelola konten *website* resmi Sekolah Tinggi Manajemen Informatika dan Komputer (STMIK) DCI Tasikmalaya. 

Sistem manajemen konten (CMS) ini dibangun menggunakan **Filament PHP**, yang dirancang agar modern, responsif, dan sangat mudah digunakan (*user-friendly*).

---

## 🔐 1. Cara Mengakses Admin Panel

1. Buka *browser* dan kunjungi alamat website dengan tambahan `/admin` di belakangnya.
   > **Contoh:** `https://www.youngscreative.site/admin`
2. Masukkan **Email** dan **Password** administrator yang telah diberikan.
3. Klik tombol **Sign in** untuk masuk ke dalam *Dashboard*.

---

## 🗂️ 2. Penjelasan Menu Navigasi

Di sebelah kiri layar, Anda akan melihat susunan menu navigasi. Berikut adalah fungsi dari masing-masing menu:

### 🏠 Dashboard
Halaman utama saat Anda pertama kali *login*. Menampilkan ringkasan statistik dan *shortcut* aktivitas terbaru di dalam *website*.

### 🖼️ Banners
Digunakan untuk mengganti gambar *slider* atau spanduk promosi berukuran besar yang tampil di halaman paling depan (Homepage) *website* STMIK DCI.
* **Cara Penggunaan:** Klik tombol *Create Banner*, unggah gambar resolusi tinggi, isi judul/teks alternatif, dan simpan.

### 📰 Beritas (Berita & Informasi)
Pusat manajemen artikel, pengumuman akademik, pendaftaran mahasiswa baru, atau liputan kegiatan kampus.
* **Fitur:** Dilengkapi dengan *Rich Text Editor* sehingga Anda bisa menebalkan teks, membuat daftar (*bullet/numbering*), hingga menyisipkan gambar di dalam artikel layaknya menggunakan Microsoft Word.

### 👨‍🏫 Dosens (Direktori Dosen)
Modul untuk mengelola data tenaga pengajar di STMIK DCI. 
* **Fungsi:** Anda bisa menambahkan foto profil dosen, nama lengkap beserta gelar akademik, jabatan, hingga program studi yang diampu.

### 🤝 Ormawas (Organisasi Mahasiswa)
Digunakan untuk mengekspos profil dan kegiatan organisasi kemahasiswaan intra-kampus.
* **Penggunaan:** Sangat cocok untuk mengelola halaman profil Senat Mahasiswa, BEM, UKM Musik, UKM Format, dan himpunan mahasiswa lainnya. Tambahkan logo ormawa dan deskripsi kegiatan mereka di sini.

### 🏆 Prestasis (Daftar Prestasi)
Etalase kebanggaan kampus. Gunakan menu ini untuk mencatat dan mempublikasikan penghargaan yang diraih oleh mahasiswa maupun institusi STMIK DCI di berbagai kompetisi.

---

## 📝 3. Panduan Umum Input Data

* **Wajib Isi (Tanda Bintang Merah):** Pastikan semua kolom yang memiliki tanda bintang merah (`*`) sudah diisi. Jika kosong, data tidak akan bisa disimpan.
* **Ukuran Gambar:** Untuk performa *website* yang cepat, usahakan mengunggah gambar dengan ukuran di bawah **1 MB**.
* **Menyimpan Data:** Setelah selesai mengetik, selalu pastikan Anda mengklik tombol **Save** atau **Create** yang biasanya berada di bagian bawah formulir.

---

## 🛠️ Informasi Teknis (Untuk Developer)

Sistem ini dikembangkan dengan *tech stack* berikut:
* **Framework:** Laravel (PHP)
* **Panel Admin:** Filament PHP v3
* **Database:** MariaDB / MySQL
* **Styling:** Tailwind CSS

**Developed & Maintained by:** [Youngs Creative]
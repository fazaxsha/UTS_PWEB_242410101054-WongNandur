# 🪴 Wong Nandur
### Sistem Pengelolaan Kebun Hidroponik

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-11-FF2D20?style=for-the-badge&logo=laravel&logoColor=white"/>
  <img src="https://img.shields.io/badge/Bootstrap-5.3-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white"/>
  <img src="https://img.shields.io/badge/Status-Verified-E8C547?style=for-the-badge"/>
</p>

<p align="center">
  <b>UTS Pemrograman Web Genap 25/26 — Sistem Informasi-B</b><br>
  Fajar Ilham Arifiyanto &nbsp;·&nbsp; 242410101054<br>
  Universitas Jember
</p>

---

## 📖 Tentang Proyek

**Wong Nandur** (Bahasa Jawa: *orang yang bercocok tanam*) adalah aplikasi web pengelolaan kebun hidroponik berbasis **Laravel MVC murni**. Dibangun tanpa database — seluruh data dikelola melalui array di Controller dan diteruskan ke View menggunakan sistem templating **Blade**.

Aplikasi ini mensimulasikan alur kerja nyata seorang petani hidroponik: mulai dari login, memantau ringkasan kebun di dashboard, melihat daftar tanaman beserta statusnya, hingga melihat profil akun.

---

## ✨ Fitur

- 🔐 **Simulasi Login** — Username diteruskan ke seluruh halaman via Request
- 📊 **Dashboard** — Ringkasan statistik kebun (total tanaman, siap panen, dll)
- 🌱 **Pengelolaan Tanaman** — Tabel data dinamis 8 jenis tanaman dengan `@foreach`
- 👤 **Profil Petani** — Menampilkan data profil yang dikirim dari Controller
- 📱 **Responsif** — Tampilan menyesuaikan layar mobile & desktop

---

## 🗂 Struktur File

```
wong-nandur/
├── app/
│   ├── Http/Controllers/
│   │   └── PageController.php                 # Controller halaman login/dashboard/pengelolaan/profil
│   ├── Models/
│   │   └── User.php
│   └── Providers/
│       └── AppServiceProvider.php
├── public/
│   └── images/
│       ├── gambar-profil.jpg
│       └── *.jpg / *.png                      # Gambar tanaman (contoh: selada_hijau.jpg)
├── resources/views/
│   ├── layouts/
│   │   └── app.blade.php                      # Layout utama
│   ├── components/
│   │   ├── navbar.blade.php
│   │   └── footer.blade.php
│   ├── login.blade.php
│   ├── dashboard.blade.php
│   ├── pengelolaan.blade.php
│   └── profile.blade.php
├── routes/
│   └── web.php
└── README.md
```

---

## ⚙️ Cara Menjalankan

**1. Clone repo ini**
```bash
https://github.com/fazaxsha/fazaxsha.git
cd fazaxsha
```

**2. Install dependencies**
```bash
composer install
```

**3. Buat file environment**
```bash
cp .env.example .env
php artisan key:generate
```

**4. Jalankan server**
```bash
php artisan serve
```

**5. Buka di browser**
```
http://localhost:8000
```

> Masukkan nama apapun di form login untuk mulai.

---

## 📸 Screenshot

| Login | Dashboard |
|-------|-----------|
| ![Login](https://github.com/fazaxsha/fazaxsha/blob/main/public/images/halaman%20login.png) | ![Dashboard](https://github.com/fazaxsha/fazaxsha/blob/main/public/images/Dashboard.png) |

| Pengelolaan | Profil |
|-------------|--------|
| ![Pengelolaan](https://github.com/fazaxsha/fazaxsha/blob/main/public/images/pengelolaan.png) | ![Profil](https://github.com/fazaxsha/fazaxsha/blob/main/public/images/profile.png) |

---

## 🛠 Teknologi yang Digunakan

| Teknologi | Keterangan |
|-----------|-----------|
| Laravel 13 | Framework PHP MVC |
| Blade Engine | Sistem templating (`@extends`, `@yield`, `@section`, `x-component`) |
| Bootstrap 5 | Framework CSS untuk layout & responsivitas |
| DM Serif Display | Font display (judul) |
| Plus Jakarta Sans | Font body |
| Bootstrap Icons | Icon set |

---

## 📚 Konsep yang Diimplementasikan

- **MVC Pattern** — View hanya dipanggil melalui Controller, tidak ada data hardcode di View
- **Blade Directives** — `@extends`, `@section`, `@endsection`, `@yield`, `@include`, `@foreach`, `@if`
- **Blade Components** — `<x-navbar>` dan `<x-footer>` dengan props
- **Request Handling** — Data username dari form login diteruskan ke Dashboard dan Profil via query string
- **Array Rendering** — Data 8 tanaman hidroponik di-render dinamis menggunakan `@foreach`

---

<p align="center">
  Dibuat dengan ☕ dan 🌱 oleh <b>Fajar Ilham Arifiyanto</b><br>
  Sistem Informasi — Universitas Jember · 2026
</p>

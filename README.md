<p align="center">
  <img src="public/icons/logo.png" width="160" alt="IAIN Datuk Laksemana Bengkalis">
</p>

<h1 align="center">Landing Page Kampus IAIN Datuk Laksemana Bengkalis</h1>

<p align="center">
  Website resmi berbasis Laravel untuk menyajikan informasi kampus secara modern, informatif, dan terintegrasi.
</p>

<p align="center">
  <a href="https://laravel.com"><img src="https://img.shields.io/badge/Laravel-Framework-red" alt="Laravel"></a>
  <a href="#"><img src="https://img.shields.io/badge/Status-Development-blue" alt="Status"></a>
  <a href="#"><img src="https://img.shields.io/badge/License-MIT-green" alt="License"></a>
</p>

---

## 📌 Tentang Proyek

**Landing Page Kampus IAIN Datuk Laksemana Bengkalis** adalah aplikasi web berbasis **Laravel** yang dirancang untuk:

- Menyediakan informasi resmi kampus
- Menampilkan profil dan sejarah institusi
- Mengelola formulir akademik secara otomatis
- Menyajikan kalender akreditasi dan informasi KIP
- Menampilkan status akreditasi program studi

Website ini dibangun dengan pendekatan **modern UI**, **responsif**, dan **mudah dikelola melalui admin panel**.

---

## ✨ Fitur Utama

### 🏛️ Profil Kampus
- Sejarah kampus
- Profil pimpinan dan unit kerja

### 📝 Formulir Otomatis
- Formulir online (pendaftaran, pengajuan, dll)
- Download formulir mudah
- Mudah dikembangkan untuk kebutuhan akademik

### 🗓️ Kalender Akreditasi
- Tampilan kalender interaktif

### 🎓 KIP (Kartu Indonesia Pintar)
- Pengumuman terkait KIP

### 📊 Akreditasi Program Studi
- Daftar pengelola program studi
- Status dan peringkat akreditasi
- Preview sertifikat akreditasi (PDF)

---

## 🛠️ Teknologi yang Digunakan

- **Laravel** (Backend Framework)
- **Blade Template Engine**
- **Tailwind CSS** (UI Styling)
- **Alpine.js** (Interaksi ringan)
- **MySQL / MariaDB**
- **Filament Admin Panel** (Manajemen konten)

---

## ⚙️ Instalasi & Konfigurasi

```bash
git clone https://github.com/mujaddid298/LandingPageKampusIAIN.git
cd LandingPageKampusIAIN
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve

# Aplikasi Pengaduan Masyarakat menggunakan Laravel 8

Ini adalah proyek aplikasi pengaduan masyarakat sederhana yang dibangun menggunakan framework Laravel 8. Aplikasi ini memungkinkan masyarakat untuk mengajukan laporan atau pengaduan terkait masalah di sekitar mereka kepada pihak berwenang.

### Fitur Utama

- **Pengguna Masyarakat**: Pengguna dapat mendaftar, masuk, dan mengajukan pengaduan.
- **Admin**: Admin dapat mengelola pengaduan, mengaturnya, dan meresponsnya.
- **Petugas**: Petugas memberikan tanggapan dan menyeleksi aduan.
- **Penggunaan Laravel 8**: Aplikasi ini dibangun dengan menggunakan Laravel 8, salah satu framework PHP paling populer.

### Prasyarat

Sebelum memulai, pastikan Anda telah memenuhi persyaratan berikut:

- PHP 7.4 atau versi yang lebih tinggi
- Composer
- MySQL atau database lainnya
- [Laravel 8 Prerequisites](https://laravel.com/docs/8.x/installation#server-requirements)

### Instalasi

1. Clone repositori ini ke komputer lokal Anda:
```bash
git clone https://github.com/riotrip/aduan-masyarakat-beta.git
```
2. Pindah ke direktori proyek:
```
cd repo-aplikasi-pengaduan
```
3. Salin file .env.example menjadi .env:
```
cp .env.example .env
```
4. Konfigurasi file .env dengan informasi database Anda:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=nama_pengguna
DB_PASSWORD=kata_sandi
```
5. Jalankan perintah berikut untuk menginstal dependensi:
```
composer install
```
6. Jalankan perintah migrasi database untuk membuat tabel yang diperlukan:
```
php artisan migrate
```
7. Jalankan server Laravel:
```
php artisan serve
```

### Pastikan Anda mengganti informasi database dengan yang sesuai dengan proyek Anda. Juga, sesuaikan bagian instruksi instalasi dengan konfigurasi server Anda.

### Semoga ini membantu Anda membuat README yang informatif untuk proyek GitHub Anda!


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>
## Profile
- Nama : Soja Purnamasari
- NPM : 4523210104
- Mata Kuliah : Prak. Pemrograman Berbasis Web (A)

## Tentang Praktikum Kedua
Hal-hal yang dipelajari dan diperlukan pada praktikum kali ini: 
- Laravel: Framework PHP yang akan menjadi "kerangka rumah" untuk aplikasi kita. Ia menyediakan banyak alat siap pakai agar kita bisa membangun aplikasi dengan cepat dan terstruktur.
- Composer: "Manajer Paket" untuk PHP. Tugasnya adalah mengunduh Laravel dan semua "pustaka" (library) lain yang dibutuhkan oleh Laravel agar bisa berjalan.
- Artisan: "Asisten pribadi" atau pisau Swiss Army bawaan Laravel. Ini adalah alat baris perintah (command-line tool) yang akan kita gunakan untuk banyak hal, salah satunya adalah untuk menyalakan server development lokal (php artisan serve).

## Instalasi Proyek LaraPress
Instalasi dilakukan dengan memastikan hal dibawah ini sudah ada:
- Server Lokal (Laragon atau XAMPP sudah terinstal dan berjalan).
- Composer (terinstal secara global).
- Terminal / Command Line (CMD, PowerShell, atau terminal bawaan Laragon).
- Code Editor (VS Code sangat disarankan).
- Web Browser (Google Chrome, Firefox, dll.).

1. Install Laravell
   ```bash
   composer global require laravel/installer
2. Membuat Proyek Baru
   ```bash
   laravel new LaraPress
3. Konfigurasi Composer
   ```bash
   cd example-app // untuk masuk ke directory projectnya
   npm install && npm run build
   composer run dev
5. Jalankan Server Laravel
   ```bash
   php artisan serve
6. Optional Settings Code
   ```bash
   code . // untuk membuka code

### Proyek LaraPress
LaraPress merupakan blog sederhana yang dibangun dengan menggunakan Laravel 12 sebagai pembelajaran sederhana untuk tujuan pengembangan dan pembelajaran. LaraPress mendemonstrasikan konsep-konsep dasar Laravel seperti routing, views, dan struktur MVC.

Terdapat 3 Menu dalam pembelajaran kali ini:
#### Menu Utama (Welcome Page)
#### Menu Tentang Kami (About)
#### Menu Kontak (Contact)
<img width="1918" height="1198" alt="Screenshot 2025-10-03 103552" src="https://github.com/user-attachments/assets/5acdfecc-538e-480d-a533-4f630b53bbf4" />

## Fitur Yang  DiImplementasikan
### Halaman Utama
  - Mengubah tampilan default laravel menjadi tampilan blog sederhana
  - Menampilkan judul "Selamat Datang di Blog LaraPress"
  - Menggunakan Struktur HTML Sederhana
  - Menambahkan Link Menu untuk Sub Menu

<img width="1918" height="1198" alt="Screenshot 2025-10-03 103552" src="https://github.com/user-attachments/assets/5acdfecc-538e-480d-a533-4f630b53bbf4" />

### Halaman Tentang Kami (About)
- Route `/tentang-kami`
- Menampilkan Halaman Tentang Kami sebagai informasi dari LaraPress
- Menampilkan Menu kembali ke Halaman Utama
  
<img width="1918" height="1198" alt="Screenshot 2025-10-03 111907" src="https://github.com/user-attachments/assets/e67f9aa0-30b6-443c-bd54-30d50d6d7540" />

### Halaman Kontak (Contact)
- Route `/kontak`
- Menampilkan form pengisian kontak dengan isi tertera pada gambar
- Menampilkan Menu kembali ke Halaman Utama

<img width="1918" height="1198" alt="Screenshot 2025-10-03 111939" src="https://github.com/user-attachments/assets/d07185ee-4acc-4fd8-8820-48ce185d2e56" />

### File yang dimodifikasi
- `resources/views/welcome.blade.php`  
  - Mengubah tampilan default Laravel menjadi HTML sederhana  
  - Menampilkan pesan sambutan untuk pengunjung blog

- Menambahkan Menu dengan menggunakan : 
- ```html
   <h4>Berikut merupakan sub halaman:</h4>
        <p> Halaman Tentang Kami</p>
            <a href="/tentang-kami"> Lihat Halaman Tentang Kami</a>
        <br>
        <p> Halaman Kontak</p>
                <a href="/kontak"> Lihat Halaman Kontak</a>
    <br>
    <h3> Menu Kembali </h3>
  <a href="/"> Kembali ke Halaman Utama</a> // Kembali ke menu utama

- `resources/views/about.blade.php` (**BARU**)  
  - File view baru untuk halaman **"Tentang Kami"**  
  - Berisi informasi terkait tentang LaraPress
  - Menambahkan Menu Kembali pada `about.blade.php` dengan menggunakan:
  - ```html
    <h3> Menu Kembali </h3>
    <a href="/"> Kembali ke Halaman Utama</a> // Kembali ke menu utama

- `routes/web.php`  
  - Menambahkan route baru `/tentang-kami` yang mengarah ke view `about.blade.php`

- `resources/views/contact.blade.php` (**BARU**)  
  - File view baru untuk halaman **"Tentang Kami"**  
  - Berisi informasi terkait tentang LaraPress
  - - Menambahkan Menu Kembali pada `contact.blade.php` dengan menggunakan:
  - ```html
    <h3> Menu Kembali </h3>
    <a href="/"> Kembali ke Halaman Utama</a> // Kembali ke menu utama

- `routes/web.php`  
  - Menambahkan route baru `/kontak` yang mengarah ke view `contact.blade.php`  

## Langkah Implementasi

## Reference
- **[Laravel Documentation](https://laravel.com/docs/12.x/installation)**

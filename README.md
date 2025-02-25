# Proyek PHP Native - XAMPP Setup dengan Import Database

## Deskripsi

Proyek ini adalah aplikasi berbasis PHP native yang dapat dijalankan di server lokal menggunakan XAMPP. Proyek ini memerlukan database yang diimpor dari file `polidb.sql`. Ikuti langkah-langkah di bawah ini untuk menyiapkan dan menjalankan proyek di mesin lokal Anda.

## Prasyarat

- XAMPP (atau server lokal lain yang mendukung PHP dan MySQL)
- Git (untuk meng-clone proyek dari repositori)

## Langkah-langkah Instalasi

### 1. Install XAMPP
   - Download XAMPP di [https://www.apachefriends.org/download.html](https://www.apachefriends.org/download.html).
   - Install XAMPP sesuai dengan petunjuk yang ada di website.
   - Setelah instalasi, jalankan XAMPP dan pastikan **Apache** dan **MySQL** sudah berjalan.

### 2. Clone Proyek ke Mesin Lokal
   - Buka terminal atau command prompt.
   - Clone repositori proyek menggunakan perintah Git berikut:
     ```bash
     git clone <URL_REPOSITORI>
     ```
   - Gantilah `<URL_REPOSITORI>` dengan URL repositori yang sesuai.

### 3. Pindahkan Hasil Clone ke Direktori `htdocs`
   - Setelah meng-clone repositori, salin seluruh folder proyek yang telah Anda clone ke dalam direktori `htdocs` di XAMPP.
   - Lokasi direktori `htdocs` pada XAMPP biasanya berada di:
     - Windows: `C:\xampp\htdocs\`
     - macOS/Linux: `/Applications/XAMPP/htdocs/`
   - Misalnya, jika Anda meng-clone proyek ke dalam folder `myproject`, salin folder `myproject` ke dalam `htdocs`, sehingga path-nya menjadi:
     ```
     C:\xampp\htdocs\myproject\
     ```

### 4. Mengonfigurasi Database
   - Jika proyek ini memerlukan database, Anda perlu mengimpor file SQL yang disertakan dalam proyek (misalnya `polidb.sql`).
   
#### 4.1. Buka phpMyAdmin
   - Jalankan XAMPP dan pastikan **MySQL** sudah aktif.
   - Klik tombol **Admin** di sebelah MySQL pada XAMPP Control Panel untuk membuka phpMyAdmin.

#### 4.2. Membuat Database Baru
   - Di phpMyAdmin, buat database baru dengan nama yang sesuai (misalnya `polidb`).
     - Klik **New** di bagian kiri atas.
     - Masukkan nama database (`polidb` atau nama sesuai yang digunakan di proyek).
     - Pilih **utf8_general_ci** sebagai collation dan klik **Create**.

#### 4.3. Mengimpor File SQL
   - Setelah membuat database, pilih database yang baru dibuat (misalnya `polidb`).
   - Klik tab **Import**.
   - Pilih file `polidb.sql` yang ada di dalam folder proyek Anda.
   - Klik **Go** untuk memulai proses impor.

### 5. Menyesuaikan Koneksi Database
   - Pastikan pengaturan koneksi database di proyek Anda sudah sesuai dengan database yang baru saja diimpor.
   - Biasanya, pengaturan ini berada di file seperti `config.php`, `db.php`, atau file konfigurasi lain.
   - Sesuaikan host, username, password, dan nama database:
     ```php
     $servername = "localhost";
     $username = "root"; // default XAMPP MySQL username
     $password = ""; // default XAMPP MySQL password
     $dbname = "polidb"; // ganti dengan nama database yang Anda buat
     ```

### 6. Menjalankan Aplikasi
   - Setelah mengonfigurasi koneksi dan database, buka browser dan akses aplikasi Anda melalui alamat berikut:
     ```
     http://localhost/myproject/
     ```
   - Gantilah `myproject` dengan nama folder proyek Anda di dalam `htdocs`.

### 7. Selesai!
   - Proyek PHP native Anda sekarang dapat dijalankan di XAMPP dengan database yang telah diimpor.

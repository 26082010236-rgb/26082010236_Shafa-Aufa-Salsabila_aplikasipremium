# AplikasiPremium

Website sederhana untuk penjualan aplikasi premium menggunakan PHP dan MySQL.

## Teknologi

- HTML
- CSS
- PHP
- MySQL
- XAMPP
- Visual Studio Code

## Struktur Database

Database yang digunakan:

aplikasipremium

Database terdiri dari 3 tabel:

### 1. kategori

Menyimpan kategori aplikasi.

### 2. aplikasi

Menyimpan data aplikasi premium dan berelasi dengan tabel kategori.

### 3. pesanan

Menyimpan data pembeli dan aplikasi yang dibeli.

## Relasi

Kategori memiliki relasi One-to-Many dengan aplikasi.

Aplikasi memiliki relasi One-to-Many dengan pesanan.

## Cara Menjalankan

1. Jalankan Apache dan MySQL melalui XAMPP.
2. Simpan folder project di:

C:\xampp\htdocs\aplikasipremium

3. Pastikan database aplikasipremium sudah dibuat di phpMyAdmin.
4. Import file database/schema.sql.
5. Buka browser.
6. Masukkan:

http://localhost/aplikasipremium/

## Fitur

- Koneksi PHP dengan MySQL.
- Menampilkan data menggunakan SELECT.
- Menggunakan JOIN antar tabel.
- Menggunakan while dan fetch_assoc().
- Menampilkan data secara dinamis.
- Tampilan responsive.
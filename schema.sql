CREATE DATABASE IF NOT EXISTS aplikasipremium;
USE aplikasipremium;

CREATE TABLE kategori (
    id_kategori INT AUTO_INCREMENT PRIMARY KEY,
    nama_kategori VARCHAR(100) NOT NULL,
    deskripsi VARCHAR(255) NOT NULL
);

INSERT INTO kategori (nama_kategori, deskripsi) VALUES
('Produktivitas', 'Aplikasi untuk membantu pekerjaan'),
('Desain', 'Aplikasi untuk kebutuhan desain'),
('Pendidikan', 'Aplikasi untuk belajar'),
('Hiburan', 'Aplikasi untuk hiburan'),
('Keamanan', 'Aplikasi untuk keamanan digital');


CREATE TABLE aplikasi (
    id_aplikasi INT AUTO_INCREMENT PRIMARY KEY,
    nama_aplikasi VARCHAR(100) NOT NULL,
    harga DECIMAL(12,2) NOT NULL,
    durasi VARCHAR(50) NOT NULL,
    id_kategori INT NOT NULL,

    FOREIGN KEY (id_kategori)
    REFERENCES kategori(id_kategori)
);


INSERT INTO aplikasi
(nama_aplikasi, harga, durasi, id_kategori) VALUES
('Netflix', 109900, '1 Bulan', 1),
('Canva Pro', 95900, '1 Bulan', 2),
('Duolingo Super', 79900, '1 Bulan', 3),
('YouTube Premium', 69000, '1 Bulan', 4),
('Disney Premium', 89000, '1 Bulan', 5);


CREATE TABLE pesanan (
    id_pesanan INT AUTO_INCREMENT PRIMARY KEY,
    nama_pembeli VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    id_aplikasi INT NOT NULL,
    tanggal_pesanan DATE NOT NULL,

    FOREIGN KEY (id_aplikasi)
    REFERENCES aplikasi(id_aplikasi)
);


INSERT INTO pesanan
(nama_pembeli, email, id_aplikasi, tanggal_pesanan) VALUES
('Shafa', 'shafaimut@gmail.com', 1, '2026-09-01'),
('Safira', 'safirapecel@gmail.com', 2, '2026-09-02'),
('Tata', 'tatasemarang@gmail.com', 3, '2026-09-03'),
('Bhianca', 'bhiancanganjuk@gmail.com', 4, '2026-09-04'),
('stefanni', 'stepsmgdarjo@gmail.com', 5, '2026-09-05');
<?php

require_once "services/config.php";

$sql = "SELECT 
            pesanan.id_pesanan,
            pesanan.nama_pembeli,
            pesanan.email,
            pesanan.tanggal_pesanan,
            aplikasi.nama_aplikasi,
            aplikasi.harga,
            aplikasi.durasi,
            kategori.nama_kategori
        FROM pesanan
        INNER JOIN aplikasi 
            ON pesanan.id_aplikasi = aplikasi.id_aplikasi
        INNER JOIN kategori 
            ON aplikasi.id_kategori = kategori.id_kategori
        ORDER BY pesanan.id_pesanan DESC";

$result = $conn->query($sql);

if (!$result) {
    die("Query gagal: " . $conn->error);
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AplikasiPremium - Penjualan Aplikasi Premium</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<header>
    <div class="container">
        <h1>AplikasiPremium</h1>
        <p>Platform Penjualan Aplikasi Premium</p>
    </div>
</header>

<nav>
    <div class="container nav-content">
        <a href="index.php">Home</a>
        <a href="#produk">Produk</a>
        <a href="#pesanan">Pesanan</a>
    </div>
</nav>

<main class="container">

    <section class="hero">
        <div>
            <h2>Temukan Aplikasi Premium Favoritmu</h2>
            <p>
                Pilih berbagai aplikasi premium dengan harga terjangkau
                dan sesuai kebutuhanmu.
            </p>
        </div>
    </section>

    <section id="produk">
        <h2>Daftar Produk & Pesanan</h2>

        <div class="table-wrapper">

            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Pembeli</th>
                        <th>Email</th>
                        <th>Aplikasi</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Durasi</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>

                <tbody>

                <?php
                $no = 1;

                while ($row = $result->fetch_assoc()) {
                ?>

                    <tr>
                        <td><?= $no++; ?></td>

                        <td>
                            <?= htmlspecialchars($row['nama_pembeli']); ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($row['email']); ?>
                        </td>

                        <td>
                            <strong>
                                <?= htmlspecialchars($row['nama_aplikasi']); ?>
                            </strong>
                        </td>

                        <td>
                            <span class="badge">
                                <?= htmlspecialchars($row['nama_kategori']); ?>
                            </span>
                        </td>

                        <td>
                            Rp <?= number_format($row['harga'], 0, ',', '.'); ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($row['durasi']); ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($row['tanggal_pesanan']); ?>
                        </td>
                    </tr>

                <?php
                }
                ?>

                </tbody>
            </table>

        </div>
    </section>

    <section class="info-section" id="pesanan">

        <div class="info-card">
            <h3>Produk Premium</h3>
            <p>
                Menyediakan berbagai aplikasi premium untuk kebutuhan
                produktivitas, desain, pendidikan, hiburan, dan keamanan.
            </p>
        </div>

        <div class="info-card">
            <h3>Pembelian Mudah</h3>
            <p>
                Data produk dan pesanan ditampilkan secara dinamis
                langsung dari database MySQL.
            </p>
        </div>

        <div class="info-card">
            <h3>Data Terorganisir</h3>
            <p>
                Produk, kategori, dan pesanan tersimpan dalam tabel
                yang saling berelasi.
            </p>
        </div>

    </section>

</main>

<footer>
    <p>&copy; 2026 AplikasiPremium. All Rights Reserved.</p>
</footer>

</body>
</html>

<?php
$conn->close();
?>
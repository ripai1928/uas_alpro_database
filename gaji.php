<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Gaji</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Data Gaji</h2>
        <table class="data-table">
            <tr>
                <th>ID</th>
                <th>Nama Karyawan</th>
                <th>Bulan</th>
                <th>Gaji Pokok</th>
                <th>Tunjangan</th>
                <th>Total</th>
            </tr>
            <?php
            $data = mysqli_query($koneksi, "SELECT * FROM gaji");
            while($d = mysqli_fetch_array($data)) {
                echo "<tr>
                    <td>{$d['id']}</td>
                    <td>{$d['nama_karyawan']}</td>
                    <td>{$d['bulan']}</td>
                    <td>Rp " . number_format($d['gaji_pokok'], 0, ',', '.') . "</td>
                    <td>Rp " . number_format($d['tunjangan'], 0, ',', '.') . "</td>
                    <td>Rp " . number_format($d['total'], 0, ',', '.') . "</td>
                </tr>";
            }
            ?>
        </table>
        <br><a href="index.php" class="back-link">⬅ Kembali ke Beranda</a>
    </div>
</body>
</html>

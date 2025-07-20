<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Absensi</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Data Absensi</h2>
        <table class="data-table">
            <tr>
                <th>ID</th>
                <th>Nama Karyawan</th>
                <th>Tanggal</th>
                <th>Jam Masuk</th>
                <th>Jam Keluar</th>
            </tr>
            <?php
            $data = mysqli_query($koneksi, "SELECT * FROM absensi");
            while($d = mysqli_fetch_array($data)) {
                echo "<tr>
                    <td>{$d['id']}</td>
                    <td>{$d['nama_karyawan']}</td>
                    <td>{$d['tanggal']}</td>
                    <td>{$d['jam_masuk']}</td>
                    <td>{$d['jam_keluar']}</td>
                </tr>";
            }
            ?>
        </table>
        <br><a href="index.php" class="back-link">⬅ Kembali ke Beranda</a>
    </div>
</body>
</html>

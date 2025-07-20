<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Karyawan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Data Karyawan</h2>
        <table class="data-table">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Gaji</th>
                <th>No HP</th>
                <th>Alamat</th>
            </tr>
            <?php
            $data = mysqli_query($koneksi, "SELECT * FROM karyawan");
            while($d = mysqli_fetch_array($data)) {
                echo "<tr>
                    <td>{$d['id']}</td>
                    <td>{$d['nama']}</td>
                    <td>{$d['jabatan']}</td>
                    <td>Rp " . number_format($d['gaji'], 0, ',', '.') . "</td>
                    <td>{$d['no_hp']}</td>
                    <td>{$d['alamat']}</td>
                </tr>";
            }
            ?>
        </table>
        <br><a href="index.php" class="back-link">⬅ Kembali ke Beranda</a>
    </div>
</body>
</html>

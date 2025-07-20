<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_karyawan = $_POST['nama_karyawan'];
    $bulan         = $_POST['bulan'];
    $gaji_pokok    = $_POST['gaji_pokok'];
    $tunjangan     = $_POST['tunjangan'];
    $total         = $gaji_pokok + $tunjangan;

    $query = "INSERT INTO gaji (nama_karyawan, bulan, gaji_pokok, tunjangan, total)
              VALUES ('$nama_karyawan', '$bulan', '$gaji_pokok', '$tunjangan', '$total')";

    if (mysqli_query($koneksi, $query)) {
        echo "<p class='success'>✅ Data gaji berhasil ditambahkan.</p>";
    } else {
        echo "<p class='error'>❌ Gagal menambahkan data: " . mysqli_error($koneksi) . "</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Gaji</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Form Tambah Data Gaji</h2>
        <form method="post">
            <label>Nama Karyawan:</label><br>
            <input type="text" name="nama_karyawan" placeholder="Masukkan nama lengkap" required><br><br>

            <label>Bulan:</label><br>
            <input type="text" name="bulan" placeholder="Contoh: Juli 2025" required><br><br>

            <label>Gaji Pokok:</label><br>
            <input type="number" name="gaji_pokok" placeholder="Contoh: 5000000" required><br><br>

            <label>Tunjangan:</label><br>
            <input type="number" name="tunjangan" placeholder="Contoh: 1000000" required><br><br>

            <input type="submit" value="Simpan">
        </form>

        <br><a href="gaji.php" class="back-link">⬅ Kembali ke Data Gaji</a>
    </div>
</body>
</html>

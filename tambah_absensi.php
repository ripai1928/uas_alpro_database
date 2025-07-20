<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama_karyawan'];
    $tanggal = $_POST['tanggal'];
    $jam_masuk = $_POST['jam_masuk'];
    $jam_keluar = $_POST['jam_keluar'];

    $query = "INSERT INTO absensi (nama_karyawan, tanggal, jam_masuk, jam_keluar)
              VALUES ('$nama', '$tanggal', '$jam_masuk', '$jam_keluar')";
    mysqli_query($koneksi, $query);
    header("Location: absensi.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Absensi</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Form Tambah Data Absensi</h2>
        <form method="POST">
            <label>Nama Karyawan:</label><br>
            <input type="text" name="nama_karyawan" required><br><br>

            <label>Tanggal:</label><br>
            <input type="date" name="tanggal" required><br><br>

            <label>Jam Masuk:</label><br>
            <input type="time" name="jam_masuk" required><br><br>

            <label>Jam Keluar:</label><br>
            <input type="time" name="jam_keluar" required><br><br>

            <input type="submit" value="Simpan">
        </form>
        <br><a href="absensi.php" class="back-link">⬅ Kembali ke Data Absensi</a>
    </div>
</body>
</html>

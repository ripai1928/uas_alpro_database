<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Karyawan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Form Tambah Data Karyawan</h2>
        <form method="POST" action="">
            <label>Nama:</label><br>
            <input type="text" name="nama" required><br><br>

            <label>Jabatan:</label><br>
            <input type="text" name="jabatan" required><br><br>

            <label>Gaji:</label><br>
            <input type="number" name="gaji" required><br><br>

            <label>No HP:</label><br>
            <input type="text" name="no_hp" required><br><br>

            <label>Alamat:</label><br>
            <textarea name="alamat" rows="4" cols="40" required></textarea><br><br>

            <input type="submit" name="simpan" value="Simpan">
        </form>

        <br><a href="karyawan.php" class="back-link">⬅ Kembali ke Data Karyawan</a>

        <?php
        if (isset($_POST['simpan'])) {
            $nama = $_POST['nama'];
            $jabatan = $_POST['jabatan'];
            $gaji = $_POST['gaji'];
            $no_hp = $_POST['no_hp'];
            $alamat = $_POST['alamat'];

            $query = "INSERT INTO karyawan (nama, jabatan, gaji, no_hp, alamat) VALUES ('$nama', '$jabatan', '$gaji', '$no_hp', '$alamat')";
            $hasil = mysqli_query($koneksi, $query);

            if ($hasil) {
                echo "<p class='success'>✅ Data berhasil disimpan!</p>";
            } else {
                echo "<p class='error'>❌ Gagal menyimpan data: " . mysqli_error($koneksi) . "</p>";
            }
        }
        ?>
    </div>
</body>
</html>

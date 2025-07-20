<!DOCTYPE html>
<html>
<head>
    <title>Sistem Informasi Perusahaan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Uas Algoritma</h1>
    <div class="container">
    <h1>Data Karyawan</h1>
    <table>
       <ul>
        <li><a href="karyawan.php">Data Karyawan</a></li>
        <li><a href="tambah_karyawan.php">Tambah Karyawan</a>
        <li><a href="absensi.php">Data Absensi</a></li>
        <li><a href="tambah_absensi.php">Absensi</a>
        <li><a href="gaji.php">Data Gaji</a></li>
        <li><a href="tambah_gaji.php">Tambah data gaji</a>
    </ul>
    <td>
        <a href="hapus.php?no=<?php echo $data['no']; ?>">Hapus</a>
                <a href="edit.php?no=<?php echo $data['no']; ?>">Edit</a>
    </td>
    </table>
</div>

</body>
</html>
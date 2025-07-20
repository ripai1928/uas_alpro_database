<?php
$koneksi = mysqli_connect("localhost", "root", "", "uas_alpro_database");
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
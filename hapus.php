<?php
include("karyawan.php"); //untuk memanggil file koneksi.php
$no=$_GET['no'];
//query untuk delete data
$query="DELETE FROM karyawan WHERE no='".$no."'";
$hasil=mysqli_query($koneksi,$query);
//setelah data dihapus redirect ke halaman tampil.php
header("Location:index.php");
?> 
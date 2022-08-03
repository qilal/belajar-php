<?php
include 'koneksi.php';

$nama = $alamat = $divisi = $shift ='';

$nama  =$_POST['nama'];
$alamat =$_POST['alamat'];
$divisi=$_POST['divisi'];
$shift=$_POST['shift'];
$mysqli= "INSERT INTO karyawan (nama,alamat,divisi,shift) VALUES ('$nama', '$alamat', '$divisi', '$shift')";
     mysqli_query($conn, $mysqli);
	  
header("location:daftar-karyawan.php")
?> 
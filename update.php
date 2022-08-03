<?php
include 'conn-db-web.php';
$NIK = $_POST['NIK'];
$nama = $_POST['nama'];
$alamat = $_POST ['alamat'];
$divisi = $_POST ['divisi'];
$shift = $_POST ['shift'];

mysqli_query($conn, "UPDATE karyawan SET nama='$nama', alamat='$alamat', divisi='$divisi', shift='$shift' WHERE NIK='$NIK'");
hearder("location:conn-db-web.php");
?>
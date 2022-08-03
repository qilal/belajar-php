<?php
include 'conn-db-web.php';
$NIK = $_GET['NIK'];
mysqli_query($conn, "DELETE FROM karyawan WHERE NIK='$NIK'");
header("location:daftar-karyawan.php");
?>
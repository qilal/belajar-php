<?php
include 'koneksi.php';

$nama = $alamat = $divisi = $shift ='';

$nama  =$_POST['nama'];
$alamat =$_POST['alamat'];
$divisi=$_POST['divisi'];
$shift=$_POST['shift'];
$mysqli= "INSERT INTO karyawan (nama,alamat,divisi,shift) VALUES ('$nama', '$alamat', '$divisi', '$shift')";
     mysqli_query($conn, $mysqli);

     $result = mysqli_affected_rows($conn);
	  
 if ($result > 0 ){
	  echo "Input berhasil";
} else { 
	  echo "Input gagal";
}
?>
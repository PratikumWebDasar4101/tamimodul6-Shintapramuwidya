<?php
require_once("db.php");

$kode=$_POST['kode'];
$nama=$_POST['nama'];
$nim=$_POST['nim'];
$kelas=$_POST['kls'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$hobi=$_POST['hobi'];
$hobi = array($_POST['hobi']);
foreach ($_POST['hobi'] as $hobi) {
	}
$fakultas=$_POST['fakultas'];
$alamat=$_POST['alamat'];

$sql="INSERT INTO mhsiswa(kode, nama, nim, kelas, jenis_kelamin, hobi, fakultas, alamat) 
		VALUES ('$kode','$nama','$nim','$kelas','$jenis_kelamin','$hobi','$fakultas','$alamat')";

if (mysqli_query($conn,$sql)) {
	header("Location:login.php");
} 
else{
	echo "Eror:".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);
?>
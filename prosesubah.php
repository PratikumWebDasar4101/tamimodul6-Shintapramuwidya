<?php
require_once("db.php");

$kode=$_POST['kode'];
$nama=$_POST['nama'];
$nim=$_POST['nim'];
$kelas=$_POST['kls'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$hobi=$_POST['hobi'];
$fakultas=$_POST['fakultas'];
$alamat=$_POST['alamat'];

$sql="UPDATE mhsiswa SET nama='$nama', nim='$nim', kelas='$kelas', jenis_kelamin='$jenis_kelamin', hobi='$hobi', fakultas='$fakultas', alamat='$alamat' where kode='$kode' ";
if(mysqli_query($conn,$sql)){
	header("location:tampilan.php");
}else{
	echo "Error : ".$sql."<br>".mysqli_error($conn);
}
;

?>
<?php
require_once("db.php");
$kode=$_GET['kode'];
$siswa=mysqli_query($conn,"select*from mhsiswa where kode='$kode'");
$row = mysqli_fetch_array($siswa);

function active_radio_button($value,$input){
$result = $value == $input?'chacked':'';
return $result;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<input type="hidden" value="<?php echo $row['kode'];?>" name="kode">
	<table >
		<form action="prosesubah.php" method="POST">
			<tr>
				<td>Kode</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $row['kode']; ?>" name="kode"></td>
			</tr>

			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $row['nama']; ?>" name="nama"></td>
			</tr>

			<tr>
				<td>Nim</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $row['nim']; ?>" name="nim"></td>
			</tr>

			<tr>
				<td>Kelas</td>
				<td>:</td>
				<td><input type="radio" value="<?php echo $row['kls']; ?>" name="kls">01</td>
				<td><input type="radio" value="<?php echo $row['kls']; ?>" name="kls">02</td>
			</tr>

			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><input type="radio" value="<?php echo $row['jenis_kelamin']; ?>" name="jenis_kelamin"></td>
			</tr>

			<tr>
				<td>Hobi</td>
				<td>:</td>
				<td><input type="checkbox" value="<?php echo $row['hobi']; ?>" name="hobi"></td>
			</tr>

			<tr>
				<td>Fakultas</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $row['fakultas']; ?>" name="fakultas"></td>
			</tr>

			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="textarea" value="<?php echo $row['alamat']; ?>" name="alamat"></td>
			</tr>

			<tr>
				<td><input type="submit" name="simpan" value="simpan"></td>
			</tr>
		</form>
	</table>
</body>
</html>
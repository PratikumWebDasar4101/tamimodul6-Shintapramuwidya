<?php
require_once("db.php");
?>
<!DOCTYPE html>
<html>
<table border="1">
<head>
		<th>Kode</th>
		<th>Nama</th>
		<th>Nim</th>
		<th>Kelas</th>
		<th>Jenis Kelamin</th>
		<th>Hobi</th>
		<th>Fakultas</th>
		<th>Alamat</th>
		<th>Action</th>
</head>
<body>
	
	<?php
		$sql ="SELECT * FROM mhsiswa";
		$result =mysqli_query($conn,$sql);

		if (mysqli_num_rows($result) > 0) {
			//output data of each row
			while ($row=mysqli_fetch_assoc($result)) {
				$kode =$row['kode'];
				echo "<tr>";
				echo "<td>".$row['kode']."</td>";
				echo "<td>".$row['nama']."</td>";
				echo "<td>".$row['nim']."</td>";
				echo "<td>".$row['kelas']."</td>";
				echo "<td>".$row['jenis_kelamin']."</td>";
				echo "<td>".$row['hobi']."</td>";
				echo "<td>".$row['fakultas']."</td>";
				echo "<td>".$row['alamat']."</td>";
				echo "<td>"."<a href='ubah.php?kode=$kode'>Edit</a> || <a href='posting.php?kode=$kode'>Posting</a></td>";
				echo "</tr>";				
			}
		}else{
			echo "0 results";
		}
		mysqli_close($conn);
		?>
</body>
</table>
</html>

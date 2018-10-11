<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1">
	<form>
		<th>Kode</th>
		<th>Isi Posting</th>
		<th>Gambar</th>
		<th>Action</th>
	</form>

	<?php
		$sql ="SELECT * FROM postingg";
		$result =mysqli_query($conn,$sql);
		f (mysqli_num_rows($result) > 0) {
			//output data of each row
			while ($row=mysqli_fetch_assoc($result)) {
				$kode =$row['kode'];
				echo "<tr>";
				echo "<td>".$row['kode']."</td>";
				echo "<td>".$row['isi']."</td>";
				echo "<td>".$row['gbr']."</td>";
?>
</table>

</body>
</html>
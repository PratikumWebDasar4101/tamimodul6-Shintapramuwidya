<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="tampilan.php" method="Post">
		<tr>
			<td>Username</td>
			<td>:</td>
			<td><input type="text" name="user"></td>
		</tr>

		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="password" name="pass"></td>
		</tr>

		<tr>
			<td><input type="submit" name="login" value="login"></td>
		</tr>
	</form>
</body>
</html>
<?php
session_start();
if (isset($_POST['login'])) {
	
$username=$_POST['user'];
$password=$_POST['pass'];

if ($username == "admin" && $password == "admin") {
	$_SESSION['user'] = $username;
	header("location: tampilan.php");
} else {
	echo "gagal";
}
}
?>
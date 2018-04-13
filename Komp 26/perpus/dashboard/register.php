<?php

	include_once '../config/library.php';

	include_once '../config/koneksi.php';

	$db = new library();

	if (isset($_POST['submit'])) {
		$nama = mysqli_real_escape_string($conn, $_POST['nama']);
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);
		$password1 = mysqli_real_escape_string($conn, $_POST['password1']);

		if ($password != $password1) {
			echo "<script>alert('Password tidak sama');</script>";
		} else {
			$db->register($nama, $username, $password, 2);
		}
		
	}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>.::Login Administrator::.</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../assets/css/login.css">
</head>
<body>

	<div class="container">
		
		<div class="frm-login">
			<h3>Register!</h3>
			<div style="float: left;">
				<a href="login.php">Back to login</a>
			</div>

			<form method="post">
				<table>
					<tr>
						<td><input type="text" name="nama" placeholder="Nama" required></td>
					</tr>
					<tr>
						<td><input type="text" name="username" placeholder="Username" required></td>
					</tr>
					<tr>
						<td><input type="password" name="password" placeholder="Password" required></td>
					</tr>
					<tr>
						<td><input type="password" name="password1" placeholder="Ulangi Password" required></td>
					</tr>
					<tr>
						<td><input type="submit" name="submit" value="Daftar!"></td>
					</tr>
				</table>
			</form>
		</div>

	</div>

</body>
</html>
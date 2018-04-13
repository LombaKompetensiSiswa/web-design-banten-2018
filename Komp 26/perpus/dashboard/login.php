<?php

	include_once '../config/library.php';

	include_once '../config/koneksi.php';


	$db = new library();

	if (@$_SESSION['login']) {
		header('location: index.php');
	}

	if (isset($_POST['submit'])) {
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);
		
		$db->login($username, $password);
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
			<h3>Login Now</h3>

			<form method="post">
				<table>
					<tr>
						<td><input type="text" name="username" placeholder="Username" required></td>
					</tr>
					<tr>
						<td><input type="password" name="password" placeholder="Password" required></td>
					</tr>
					<tr>
						<td><input type="submit" name="submit" value="Login"></td>
					</tr>
					<tr>
						<td>
							<a href="register.php">Sign up Now !!</a>
							<a href="../index.php" style="text-align: left;">Forum Perpustakaan</a>
						</td>
					</tr>
				</table>
			</form>
		</div>

	</div>

</body>
</html>
<?php

	session_start();

	include_once '../../config/library.php';

	include_once '../../config/koneksi.php';


	$db = new library();

	if (isset($_REQUEST['aksi'])) {
		if ($_REQUEST['aksi'] == 'logout') {
			$db->logoutUser();
		}
	}

	?>
	
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>.::Halaman Administrator::.</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../../assets/css/dashboard.css">
</head>
<body>

	<header>
		<div class="logo">
			<a href="index.php">Dashboard</a>
		</div>
		<div class="profile">
			<?php if ($_SESSION == TRUE) { echo $_SESSION['login'];} else {
				echo "User";
			} ?>
		</div>
	</header>

	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="?p=lihat-buku">Buku</a></li>
			<li><a href="?p=informasi-buku">Peminjaman</a></li>
			<?php

			if ($_SESSION == TRUE) {
				echo "";
			} else {
				?>
			<li><a href="../login.php">Login</a></li>
			<?php } ?>
			<?php
			if ($_SESSION == TRUE) {
				?>
			<li><a href="?aksi=logout">Logout</a></li>
			<?php } ?>
			<li><a href="../../index.php">Forum Perpus</a></li>
		</ul>
	</nav>

	<div class="content">
		<?php include 'page/page.php'; ?>
	</div>

</body>
</html>


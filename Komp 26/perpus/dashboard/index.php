<?php

	session_start();

	include_once '../config/library.php';

	include_once '../config/koneksi.php';


	$db = new library();

	if ($_SESSION['login'] == NULL) {
		header('location:login.php');
	}

	if (isset($_GET['aksi'])) {
		if ($_GET['aksi'] == 'logout') {
			$db->logout('login.php');
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>.::Halaman Administrator::.</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../assets/css/dashboard.css">
</head>
<body>

	<header>
		<div class="logo">
			<a href="index.php">Dashboard</a>
		</div>
		<div class="profile">
			Hy, <?= $_SESSION['login']; ?>
		</div>
	</header>

	<nav>
		<ul>
			<li><a href="index.php">Dashboard</a></li>
			<li><a href="?p=data-buku">Buku</a></li>
			<li><a href="?p=data-kategori">Kategori</a></li>
			<li><a href="?p=data-anggota">Anggota</a></li>
			<li><a href="?p=data-peminjaman">Peminjaman</a></li>
			<li><a href="index.php?aksi=logout">Logout</a></li>
		</ul>
	</nav>

	<div class="content">
		<?php include 'page/page.php'; ?>
	</div>

</body>
</html>
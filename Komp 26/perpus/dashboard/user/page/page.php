<?php

	$p = @$_GET['p'];

	if (isset($p)) {

		switch($p) {
			case 'lihat-buku' : include 'buku.php'; break;
			case 'informasi-buku' : include 'peminjaman.php'; break;

			case 'informatika' : include 'informatika.php'; break;
			case 'psikologi' : include 'informatika.php'; break;
			case 'hukum' : include 'informatika.php'; break;
			case 'kedokteran' : include 'informatika.php'; break;

			case 'pinjam-buku' : include 'pinjam.php'; break;

		}

	} else {
		include 'dashboard.php';
	}

?>
<?php

	$page = @$_GET['p'];

	if (isset($_GET['p'])) {
		switch($page) {
			case 'data-anggota' : include 'manajemen-anggota/index.php'; break;
			case 'tambah-anggota' : include 'manajemen-anggota/tambah.php'; break;
			case 'edit-anggota' : include 'manajemen-anggota/edit.php'; break;

			case 'data-buku' : include 'manajemen-buku/index.php'; break;
			case 'tambah-buku' : include 'manajemen-buku/tambah.php'; break;
			case 'edit-buku' : include 'manajemen-buku/edit.php'; break;

			case 'data-kategori' : include 'manajemen-kategori/index.php'; break;
			case 'tambah-kategori' : include 'manajemen-kategori/tambah.php'; break;
			case 'edit-kategori' : include 'manajemen-kategori/edit.php'; break;

			case 'pinjam-buku' : include 'manajemen-peminjaman/pinjam.php'; break;
			case 'edit-peminjaman' : include 'manajemen-peminjaman/edit.php'; break;
			case 'data-peminjaman' : include 'manajemen-peminjaman/index.php'; break;

			case 'terimakasih' : include 'manajemen-peminjaman/terimakasih.php'; break;
		}
	} else {
		include 'dashboard.php';
	}
	

?>
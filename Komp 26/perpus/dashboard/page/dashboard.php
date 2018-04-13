<?php

$buku = $db->jumlahData('buku');
$kategori = $db->jumlahData('kategori');
$peminjam = $db->jumlahData('peminjaman');
$anggota = $db->jumlahData('admin');

?>

<h1 style="font-weight: normal;">Dashboard</h1>

<p>Selamat Datang Di Halaman Dashboard</p>

<div class="container">

	<div class="box box-1">
		<div class="title">
			Buku
		</div>
		<div class="numberText">
			Jumlah Data Buku : <?= $buku; ?>
		</div>
		<div class="text">
			<a href="?p=data-buku">Lihat Data</a>
		</div>
	</div>

	<div class="box box-2">
		<div class="title">
			Kategori
		</div>
		<div class="numberText">
			Jumlah Data Kategori : <?= $kategori; ?>
		</div>
		<div class="text">
			<a href="?p=data-kategori">Lihat Data</a>
		</div>
	</div>

	<div class="box box-3">
		<div class="title">
			Anggota
		</div>
		<div class="numberText">
			Jumlah Data Anggota : <?= $anggota; ?>
		</div>
		<div class="text">
			<a href="?p=data-anggota">Lihat Data</a>
		</div>
	</div>

	<div class="box box-4">
		<div class="title">
			Peminjam
		</div>
		<div class="numberText">
			Jumlah Data Peminjam : <?= $peminjam; ?>
		</div>
		<div class="text">
			<a href="?p=data-peminjaman">Lihat Data</a>
		</div>
	</div>


</div>
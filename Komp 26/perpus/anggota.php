<?php
	include_once 'config/library.php';

	$db = new library();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Perpus Online</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

	<header>
		<div class="container">
			<div class="logo">
				<img src="assets/img/banten.png">
			</div>
			<div class="search">
				<form method="post">
					<input type="text" name="cari" placeholder="Cari...">
					<button type="submit">Cari</button>
				</form>
			</div>
		</div>
	</header>

	<nav>
		<div class="container">
			<a href="index.php" class="active">Home</a>
			<a href="pameran.php">Pameran Buku</a>
			<a href="anggota.php">Anggota</a>
			<a href="tentang.php">Tentang Kami</a>
			<a href="dashboard/login.php" class="login">Login</a>
			<a href="dashboard/user/index.php" class="buku">Lihat Buku</a>
		</div>
	</nav>

	<div class="banner">
		
		<div class="container">
			<h1 style="color: #012369; text-transform: uppercase; font-family: cursive;">Welcome to Perpustakaan Daerah</h1>

			<div class="col-3">
				<p>
					
				</p>
			</div>
		</div>
		
	</div>

	<div class="col-12">
		<div class="container">
			<h1 style="font-weight: normal; font-size: 24px;"><b>Anggota</b> Facebook</h1>
			<h1></h1>
			<div class="col-4 anggota">
				<div class="gambar">
					<img src="assets/img/monyet.jpg">
				</div>
				<div class="profile">
					<p>Nama : Fikri Alam Arya Putra</p>
					<p>Tempat, Tanggal Lahir : Jakarta, 29-09-2001</p>
					<p>Hobbi : Ngoding / Futsal</p>
					<p>Hak Akses / Level : Admin</p>
				</div>
			</div>
			<div class="col-4 anggota">
				<div class="gambar">
					<img src="assets/img/monyet.jpg">
				</div>
				<div class="profile">
					<p>Nama : Aldian Syahputra</p>
					<p>Tempat, Tanggal Lahir : Jakarta, 29-09-2001</p>
					<p>Hobbi : Ngoding / Makan Padang</p>
					<p>Hak Akses / Level : Anggota</p>
				</div>
			</div>
			<div class="col-4 anggota">
				<div class="gambar">
					<img src="assets/img/monyet.jpg">
				</div>
				<div class="profile">
					<p>Nama : Arif Budiman</p>
					<p>Tempat, Tanggal Lahir : Jakarta, 29-09-2001</p>
					<p>Hobbi : Ngoprek Robotik</p>
					<p>Hak Akses / Level : Anggota</p>
				</div>
			</div>
			<div class="col-4 anggota">
				<div class="gambar">
					<img src="assets/img/monyet.jpg">
				</div>
				<div class="profile">
					<p>Nama : Yanuar Anggito</p>
					<p>Tempat, Tanggal Lahir : Jakarta, 29-09-2001</p>
					<p>Hobbi : Ngebully</p>
					<p>Hak Akses / Level : Anggota</p>
				</div>
			</div>
			<div class="col-4 anggota">
				<div class="gambar">
					<img src="assets/img/monyet.jpg">
				</div>
				<div class="profile">
					<p>Nama : Muhammad Zakaria</p>
					<p>Tempat, Tanggal Lahir : Jakarta, 29-09-2001</p>
					<p>Hobbi : Jahilin Orang</p>
					<p>Hak Akses / Level : Anggota</p>
				</div>
			</div>
			<div class="col-4 anggota">
				<div class="gambar">
					<img src="assets/img/monyet.jpg">
				</div>
				<div class="profile">
					<p>Nama : Ferdian Aditya</p>
					<p>Tempat, Tanggal Lahir : Jakarta, 29-09-2001</p>
					<p>Hobbi : Main Game</p>
					<p>Hak Akses / Level : Anggota</p>
				</div>
			</div>

		</div>
	</div>


	<div class="col-12" style="background-color: #999999;">
		<div class="container">
			<div class="col-5">
				<h1>Penerbit</h1>
				<a href="">Layanan ISBN Serah Simpan KCKR</a>
				<a href="">Serah Simpan KCKR</a>
			</div>
			<div class="col-5">
				<h1>Institusi & Pustakawan</h1>
				<a href="">Ikatan Pustakawan Indonesia</a>
				<a href="">Nomor Pokok Perpustakaan</a>
				<a href="">Pendidikan dan Pelatihan</a>
			</div>
			<div class="col-5">
				<h1>Umum</h1>
				<a href="">e-Resource</a>
				<a href="">Keanggotaan</a>
				<a href="">Koleksi Digital</a>
				<a href="">OPAC</a>
			</div>
			<div class="col-5">
				<h1>Kontak Kami</h1>
				<p>Jl. Medan Merdeka Selatan No.11 
				Jakarta 10110
				Jl. Salemba Raya No.28A 
				Jakarta 10430
				Email : info@perpusnas.go.id
				</p>
			</div>
			<div class="col-5">
				<h1>Jam Operasional Layanan Perpustakaan</h1>
				<p>
					Senin - Jumat 08.30 - 18.00 WIB
					Kuota antrian layanan keanggotaan 500
					Sabtu - Minggu 09.00 - 16.00 WIB
					Kuota antrian layanan keanggotaan 400
					Hari Besar Libur
				</p>
			</div>
		</div>
	</div>

	<footer>
		<p>Hak Cipta 2017 © Perpustakaan Nasional Republik Indonesia. Seluruhnya dilindungi Hak Cipta.</p>
		<a href="">Peta Situs</a>
		<a href="">Kebajikan Pribadi</a>
		<a href="">Ketentuan Layanan</a>
		<p>Anda Pengunjung ke 00010132</p>
	</footer>

</body>
</html>
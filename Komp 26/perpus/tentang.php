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

	<div class="col-12" style="padding: 10px; transition: all 0.4s ease;">
		<marquee>|| SELEKSI TERBUKA JABATAN PIMPINAN TINGGI MADYA DI LINGKUNGAN PERPUSTAKAAN DAERAH TAHUN 2018 ||</marquee>
	</div>

	<div class="col-12">
		<div class="container">
			<h1>Tentang Kami</h1>
			<p>Saya ingin sekali ada rak Hemingway, rak Tolstoy, Pramoedya, Tohari, Ayu Utami, Taufiq Usmail, Goenawan Mohamad, Arswendo, Tere Liye, Andrea Hirata, Pipiet Senja, Asma Nadia, Helvy Tiana Rossa, Afifah Afra, Musashi, Arswendo, Coelho, Barbara Cartland, Karl May, Remmy Silado, Putu Wijaya, Oka Rusmini, Tagore, para penulis Banten, Pearl S Buck dan masih banyak lagi….. Kundera, Marga T, Enyd Blyton, JK Rowling….. dengan memoribilianya.</p>
			<p>
				Saya sedang berusaha. Semoga tahun 2017 ini pintu-pintu rezeki dibukakan Allah SWT. Semoga ikhtiar saya di novel dan film tahun 2017 ini diridhoi Allah. Di halaman belakang rumah saya, sudah ada tanah 1000 meter. Embrio perpustakaan sastra sudah ada.
			</p>
			<p>
				Saling doakan ya. Semoga mimpi teman-teman juga terkabul.
			</p>
			<hr />
			<h1>Kontak Kami</h1>
			<p>Alamat Perpus Terbuka :</p>
			Gedung Graha Kemahasiswaan Lt. 1 Universitas Lampung, Jl. Soemantri Brojonegoro No.1,<br />
			Gedung Meneng, Bandar Lampung, Povinsi Lampung Kode Post 35145<br />
			Email: redaksi@teknokra.com<br /><br />
			<a href="www.facebook.com"><img src="assets/img/facebook.png" style="width: 5%;"></a>
			<a href="www.youtobue.com"><img src="assets/img/youtube.jpg" style="width: 5%;"></a>
			<a href="www.banten.com"><img src="assets/img/banten.png" style="width: 5%;"></a>
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
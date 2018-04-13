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
			<a href="tentang.php">Tentang Kami</a>
			<a href="anggota.php">Anggota</a>
			<a href="tentang.php">Tentang Kami</a>
			<a href="dashboard/login.php" class="login">Login</a>
			<a href="dashboard/login.php" class="buku">Lihat Buku</a>
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
			<h1 style="font-weight: normal; font-size: 24px;"><b>Berita</b> Terbaru</h1>
			<div class="col-4 box-berita">
				<img src="assets/img/img-berita-1.jpg">
				<div class="tgl">
					<b>Berita</b> - 07 Apr 2018
				</div>
				<div class="link">
					<a href="#">Gramedia Writers and Readers Forum 2018 : Explore Ideas, Inspire People</a>
				</div>
				<div class="text">
					<b>Medan Merdeka Selatan, Jakarta—</b>Sebuah riset disampaikan Direktur Gramedia Soewandi S Brata bahwa tren penulis baru mulai bermunculan. Indikatornya, Soewandi mencatat di tahun 2015 terbit 44 ribu judul buku baru, di tahun 2016...
				</div>
			</div>
			<div class="col-4 box-berita">
				<img src="assets/img/img-berita-2.jpg" style="width: 100%; height: 185px;">
				<div class="tgl">
					<b>Berita</b> - 06 Apr 2018
				</div>
				<div class="link">
					<a href="#">DPRD Kota Banjarmasin Berkomitmen Kembangkan Perpustakaan</a>
				</div>
				<div class="text">
					<b>Salemba, Jakarta</b> - Anggota DPRD Kota Banjarmasin dan Dinas Perpustakaan dan Arsip Kota Banjarmasin mengunjungi Perpustakaan Nasional RI untuk mengembangkan layanan perpustakaan dan minat baca. Wakil Ketua Komisi I DPRD Kota...
				</div>
			</div>
			<div class="col-4 box-berita">
				<img src="assets/img/img-berita-3.jpg">
				<div class="tgl">
					<b>Berita</b> - 05 Apr 2018
				</div>
				<div class="link">
					<a href="#">Bupati Bengkulu Selatan: Perpustakaan adalah Investasi</a>
				</div>
				<div class="text">
					<b>Medan Merdeka Selatan, Jakarta</b> - Perpustakaan merupakan investasi untuk membangun masyarakat yang cerdas dan sejahtera. Karena dengan memanfaatkan koleksi yang ada di perpustakaan, seluruh elemen masyarakat bisa melakukan kegiatan...
				</div>
			</div>
			<div style="text-align: right;">
				<a href="#" class="link">Berita Lainnya...</a>
			</div>
		</div>
		<div class="container">
			<div class="col-4 box-berita">
				<img src="assets/img/img-berita-1.jpg">
				<div class="tgl">
					<b>Berita</b> - 07 Apr 2018
				</div>
				<div class="link">
					<a href="#">Gramedia Writers and Readers Forum 2018 : Explore Ideas, Inspire People</a>
				</div>
				<div class="text">
					<b>Medan Merdeka Selatan, Jakarta—</b>Sebuah riset disampaikan Direktur Gramedia Soewandi S Brata bahwa tren penulis baru mulai bermunculan. Indikatornya, Soewandi mencatat di tahun 2015 terbit 44 ribu judul buku baru, di tahun 2016...
				</div>
			</div>
			<div class="col-4 box-berita">
				<img src="assets/img/img-berita-2.jpg" style="width: 100%; height: 185px;">
				<div class="tgl">
					<b>Berita</b> - 06 Apr 2018
				</div>
				<div class="link">
					<a href="#">DPRD Kota Banjarmasin Berkomitmen Kembangkan Perpustakaan</a>
				</div>
				<div class="text">
					<b>Salemba, Jakarta</b> - Anggota DPRD Kota Banjarmasin dan Dinas Perpustakaan dan Arsip Kota Banjarmasin mengunjungi Perpustakaan Nasional RI untuk mengembangkan layanan perpustakaan dan minat baca. Wakil Ketua Komisi I DPRD Kota...
				</div>
			</div>
			<div class="col-4 box-berita">
				<img src="assets/img/img-berita-3.jpg">
				<div class="tgl">
					<b>Berita</b> - 05 Apr 2018
				</div>
				<div class="link">
					<a href="#">Bupati Bengkulu Selatan: Perpustakaan adalah Investasi</a>
				</div>
				<div class="text">
					<b>Medan Merdeka Selatan, Jakarta</b> - Perpustakaan merupakan investasi untuk membangun masyarakat yang cerdas dan sejahtera. Karena dengan memanfaatkan koleksi yang ada di perpustakaan, seluruh elemen masyarakat bisa melakukan kegiatan...
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
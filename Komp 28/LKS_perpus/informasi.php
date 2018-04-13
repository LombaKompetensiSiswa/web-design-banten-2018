<!DOCTYPE html>
<html>
<head>
	<title>Perpus</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<marquee> Selamat Datang di PERPUSTAKAAN DAERAH</marquee>
		<div class="header">
			<img src="image/logo.png">
				
			
			
		<div class="login">	
			<input type="text" name="username" value="" placeholder="Username">
			<input type="password" name="password" value="" placeholder="password">
			<input type="button" name="Login" value="Login">
		</div>
		<div class="tambah">
		<a href="buat-akun.php">Buat Akun</a></div>
		<div class="search">
			<div class="button-search">
			<input type="button" name="cari" value="cari">
		</div>
		<div class="text-search">
			<input type="search" name="cari" placeholder="Cari....">
			</div>
	</div>
		</div>
		<div class="menu-bar">
			<div class="header-navigation">
			<ul>
				<li class="dropdown-menu"><a href="index.php">Home</a></li>
				<li class="dropdown-menu"><a href="informasi.php">Informasi</a></li>
				<li class="dropdown-menu"><a href="about.php">About</a></li>
				<li class="dropdown-menu"><a href="katalog-buku.php">Daftar Buku</a></li>
				<li class="dropdown-menu"><a href="Jenis-buku.php">Buku Terbaru</a></li>
				<li class="dropdown-menu"><a href="jadwal-Buku.php">Pengembalian Buku</a></li>

			</ul>
			</div>	

	</div>	
	
	<main>
	<center><video width="480px" height="360px" controls autoplay>
			<source src="image/pinjam-perpustakaan1.mp4" type="video/mp4">
		</video></center>
		<div class="cara-box">
			<center><h1><u>Cara Meminjam Buku</u></h1></center>
			<ol>
				<h2><li>Pilihlah buku yang anda ingin pinjam. Anda Dapat melihat petunjuk berupa keterangan nomor klasifikasi dari setiap rak buku, untuk mengetahui letak buku yang anda cari</li></h2>
				<h2><li>Setelah Mendapat buku yang anda inginkan Untuk  meminjam buku anda harus menuju bagian sirkulasi</li></h2>
				<h2><li>Berikan buku yang ingin anda pinjam, lalu serahkan kartu anggota, agar dapat diidentifikasikan istilah data data yang diperlukan</li></h2>
				<h2><li>Jika buku yang ingin anda pinjam kebetulan tidak ada diperpustakaan, maka anda dapat melakukan booking terhadap buku tersebut</li></h2>
				<h2><li>Tidak boleh meminjam buku refrensi atau buku berlaber REF</li></h2>
				<h2><li>Untuk mengetahui jangka Waktu meminjam <a href="about.php"><u>Klik disini</u></a></li></h2>
				<h2><li>Jika Buku yang dipinjam terlambat dikembalikan dikenakan Denda Rp.1000,- perharinya</li></h2>
			</ol>
		</div>
	</main>

	<footer>
		&copy; Copyright Kharisma 2018
	</footer>
	</div>
</body>
</html>
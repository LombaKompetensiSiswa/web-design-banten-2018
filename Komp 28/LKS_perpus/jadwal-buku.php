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
			<center><table width="800" border="1" class="tablebuku" height="400px">
  <tr>
    <th scope="col">Nama Buku</th>
    <th scope="col">Peminjam</th>
    <th scope="col">Tanggal Meminjam</th>
    <th scope="col">Tanggal mengembalikan</th>
  </tr>
  <tr>
    <td>Buku Sakti hacker</td>
    <td>Sudrajat</td>
    <td>21/03/2018</td>
    <td>24/03/2018</td>\
  </tr>
  <tr>
    <td>15 Cara Bikin Galeri Foto Online</td>
    <td>Rasya</td>
    <td>22/03/2018</td>
    <td>23/03/2018</td>
  </tr>
  <tr>
    <td>Tips dan Trik Hacking</td>
    <td>Rizki</td>
    <td>22/03/2018</td>
    <td>29/03/2018</td>
  </tr>
  <tr>
    <td>Tips dan Trik Menjadi Master PHP</td>
    <td>Deni</td>
    <td>22/03/2018</td>
    <td>26/03/2018</td>
  </tr>
</table>
</center>	
<center><video width="480px" height="360px" controls autoplay>
			<source src="image/Peminjaman-Buku.mp4" type="video/mp4">
		</video></center>
	</main>

	<footer>
		&copy; Copyright Kharisma 2018
	</footer>
	</div>
</body>
</html>
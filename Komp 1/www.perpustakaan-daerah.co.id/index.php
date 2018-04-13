<?php include("assets/php/inc/koneksi.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>.:: Perpustakaan Daerah - Provinsi Banten</title>
	<link rel="stylesheet" type="text/css" href="assets/css/layout.css"/>

	<!-- GLOBAL SCRIPT -->
	<script type="text/javascript" src="assets/js/global.js"></script>
</head>
<body>
<div class="slide"></div>

<!-- NAVIGATION -->
<div class="navigation fixed-top">
	<div class="container-sm">
		<div class="pull-left navbar-brand">
			<img src="assets/images/logo-banten.png" class="logo-navbar"/>
			<span class="brand"> Perpustakaan Daerah</span>
		</div>

		<div class="pull-right" id="menu-wrapper" style="padding-top: 6px;">
			<a href="#home" class="menu">Home</a>
			<a href="#tentang" class="menu">Profil</a>
			<a href="#visi-misi" class="menu">Visi & Misi</a>
			<a href="#sejarah" class="menu">Sejarah</a>
			<a href="#berita" class="menu">Berita Terbaru</a>
			<!--<a href="#jadwal" class="menu">Jadwal</a>-->
			<!--<a href="#pembayaran" class="menu">Pembayaran</a>-->
			<!--<a href="#daftar-ulang" class="menu">Daftar Ulang</a>-->
			<a href="#galeri" class="menu">Galeri</a>
			<!--<a href="#tanya-jawab" class="menu">Tanya Jawab</a>-->
			<a href="#bedah-buku" class="menu">Katalog</a>
			<a href="#kontak" class="menu">Kontak</a>
			<a href="assets/page/modal-login.php" class="menu">Masuk</a>
		</div>
	</div>
</div>


<section class="full-page" id="home">
	<div class="title" style="animation: grow 2s linear infinite; height: 80px">Selamat Datang</div>
	<div class="comp">
		Website Perpustakaan Daerah Provinsi Banten di buat dengan tujuan menumbuhkembangkan mintat membaca bagi setiap orang khususnya yan gberada di Daerah Banten. Anda dapat leluasa menggunakan website ini untuk membaca, mengetahui informasi terbaru mengenai Perpustakaan Online ini, meminjam buku dan lain sebagainya, dengan mudah, cepat dan pasti. Yuk, tunggu apa lagi mari membaca sekarang juga.
	</div>
	<div class="icon-wrapper" align="center">
		<div class="icon">
			<a href="https://www.facebook.com/perpus-banten" target="_blank"><img src="assets/images/fb.png" class="growOnHover"></a>
		</div>
		<div class="icon">
			<a href="https://www.twitter.com/perpus-banten" target="_blank"><img src="assets/images/twitter.png" class="growOnHover"></a>
		</div>
		<div class="icon">
			<a href="https://www.instagram.com/perpus-banten" target="_blank"><img src="assets/images/ig.png" class="growOnHover"></a>
		</div>
	</div>

	<div align="center">
		<h4>Total Pengunjung (1 Minggu Terakhir) : 102 Orang</h4>
		<h3><?php echo date("d-m-Y | h:m"); ?></h3>
	</div>
</section>


<section id="tentang">
	<h2 align="center" class="title">Profil</h2>
	<div class="comp">
		Seperti yang dikatakan sebelumnya, mengenai deklarasi atau sosialisasi tentang ajakan membaca yang dikalakan belakangan ini, kami Pemerintah Provinsi Banten mendukung dengan penuh hal baik tersebut, dengan membangun Website Perpustakaan online ini. Dengan harapan dan Tujuan agar setiap pengunjungnya dapat dengan mudah membaca buku. Seperti kita ketahui, pada Zaman sekarang, sangat jarang orang yang minat membacanya tinggi, hal tersebut berbeda dengan negara-negara maju yang lebih unggul dalam hal membaca buku. Sesuai dengan isi Pembukaan Undang-undang Dasar 1945, yakni "Mencerdaskan Kehidupan bangsa da ikut melaksanakan ketertiban Dunia..." kami berinisiatif mewujudkan cita-cita bangsa tersebut.
		<!--<embed src="assets/images/Wildlife.wmv" ></embed>-->
	</div>

	<div class="grid">
		<div class="col col4">
			<img src="assets/images/profil1.jpg" class="block mr-sm">
		</div>
		<div class="col col4">
			<img src="assets/images/profil2.jpeg" class="block mr-sm">
		</div>
		<div class="col col4">
			<img src="assets/images/profil3.jpg" class="block mr-sm">
		</div>
	</div>
	<div class="clear-fix"></div>
</section>

<section id="visi-misi" style="background: #63360a; padding: 5px 0; color: white">
	<h2 align="center" class="title">Visi & Misi</h2>
	<div class="comp">
		<div class="container" style="margin: 0 100px;">
		<div align="center"><small>Mengenai Visi & Misi dibuatnya Website ini, yakni sebagai berikut:</small></div>
		<br/>
			<div class="col col6">
				<h4 align="left">Visi</h4>
				<ul style="list-style-type: disc;">
					<small>
						<li>Mewujudkan kecerdasan Bangsa, dengan meningkatkan kualitas minat baca masyarakat.</li>
					</small>
				</ul>
			</div>
			<div class="col col6">
				<h4 align="left">Misi</h4>
				<small>
				<ul style="list-style-type: disc;">
					<li>Meningkatkan Sosialisasi</li>
					<li>Membuat suatu Komunitas peminat membaca di beberapa daerah</li>
					<li>Menggalakan promosi membaca, terutama pada anak usia dini.</li>
					<li>Menentukan hasil dan fluktuatifitas dari hobi membaca</li>
					<li>Menggabungkan teknologi informasi digital dengan konvensional.</li>
				</ul>
				</small>
			</div>

			<div class="clear-fix"></div>
		</div>
	</div>
</section>

<section id="sejarah" style="background: #63360a; padding: 5px 0 30px; color: white">
	<h2 align="center" class="title">Sejarah</h2>
	<div class="comp">
		<div class="container" style="margin: 0 100px; padding-bottom: 30px;">
			<div align="center">
				<small>
					Perpustakaan merupakan perantara masyarakat. oleh karena itu, perkembangan perpustakaan tidak dapat dilepaskan dari perkembangan masyarakat. Perkembangan masyarakat tercermin dalam sejarah masyarakat, kadang-kadang dalam sejarah negara. Dengan demikian,sejarah perpustakaan di Indonesia tidak terlepas dari sejarah Indonesia.
					<br/>
					Pada pembagian di atas, tahun 1950 merupakan awal ancangan karena pada waktu itu pemerintah RI mulai menyebarkan perpustakaan, khususnya perpustakaan umum dengan nama taman perpustakaan rakjat ke seluruh indonesia. Perkembangan perpustakaan umum yang mula.mula menggembirakan itu akhirnya berakhir tragis dengan runtuhnya berbagai taman pustaka rakjat yang didirikan pada tahun 1950-an. Tonggak kebangkitan dimulai pada tahun 1969, dengan pembangunan lima tahun (pelita) pertama. Saat itu, kegiatan perpustakaan tercakup di dalam rencana pembangunan hingga sekarang.
				</small>
			</div>
		</div>
	</div>
</section>

<section id="berita" style="background: #fff; padding: 5px 0; color: black">
	<h2 align="center" class="title">Berita Terbaru</h2>
	<div class="comp">
		<div class="container" style="margin: 0 100px;">
			<div>
				<div class="col col6">
					<div style="margin: 14px" class="thb">
					<h4>Sistem Baru Perpustakaan Unila</h4>
					<small>Dipublikasikan pada tanggal: 12 April 2018 | Oleh: Admin</small>
					<div>
						<img src="assets/images/galeri3.jpg" class="" style="width: 100%">
					</div>
					<div style="font-size: 90%; text-align: justify;">
						Kepala UPT Perpustakaan Unila, Dr. Eng. Mardiana mengatakan, Perpustakaan Unila akan memigrasi sistem barcode dengan sistem Radio Frequency Identification (RFID).


						“Hal ini dilakukan untuk memenuhi tuntutan layanan perpustakaan yang lebih baik. Mahasiswa mendapat kemudahan dalam peminjaman buku, dan petugas mendapatkan data valid mengenai stock buku yang tersedia dan yang dipinjam” tutur Mardiana.

						Sistem RFID merupakan teknologi identifikasi yang menggunakan gelombang radio. Sistem ini pertama kali diperkenalkan, sekaligus dipatenkan oleh Mario Cardullo pada 1973 dengan menggunakan transponder radio pasif ber-memory. Dalam pengelolaan perpustakaan, sistem RFID saat ini merupakan sistem paling mutakhir dalam proses peminjaman buku.

						Secara garis besar, terdapat 3 macam alat yang digunakan dalam sistem ini, yakni tag label, RFID reader, dan antena. Ketiga alat ini dihubungkan dengan gelombang frekuensi yang sama.

						Seperti halnya barcode, tag label merupakan label khusus yang ditempelkan pada setiap buku yang akan diidentifikasi. Ada beberapa jenis tag label dalam sistem ini.
					</div>
					</div>
				</div>

				<div class="col col6">
					<div style="margin: 14px;" class="thb">
					<h4>Perpustakaan Sastra di Banten</h4>
					<small>Dipublikasikan pada tanggal: 12 April 2018 | Oleh: Admin</small>
					<div>
						<img src="assets/images/profil2.jpeg" class="" style="width: 100%">
					</div>
					<div style="font-size: 90%; text-align: justify;">
						Terkurung di perpustakaan rumah. Saya bahagia sekali. Ingat saat nge-kos tahun 1982 – 95. Hanya ada buku di kamar dengan mesin ketik dan komputer PC. Harta yang selalu saya bawa-bawa, hingga kini. Tiba-tiba mimpi lama ingin mendirikan perpustakaan sastra dunia muncul lagi.

						Saya ingin sekali ada rak Hemingway, rak Tolstoy, Pramoedya, Tohari, Ayu Utami, Taufiq Usmail, Goenawan Mohamad, Arswendo, Tere Liye, Andrea Hirata, Pipiet Senja, Asma Nadia, Helvy Tiana Rossa, Afifah Afra, Musashi, Arswendo, Coelho, Barbara Cartland, Karl May, Remmy Silado, Putu Wijaya, Oka Rusmini, Tagore, para penulis Banten, Pearl S Buck dan masih banyak lagi….. Kundera, Marga T, Enyd Blyton, JK Rowling….. dengan memoribilianya.

						Saya ingin nantinya itu diwariskan untuk masyarakat Banten. Saya ingin anak muda Banten di mas depan tidak tenggelam di dunia internet saja. Mereka hrs membaca buku, berada di perpustakaan. Tradisi datang ke perpustakaan membaca buku cetak jangan dihilangkan, karena sensasinya berbeda dengan e-book.
					</div>
					</div>
				</div>


				<div class="clear-fix"></div>
			</div>
		</div>
	</div>
</section>

<section id="galeri">
	<h2 align="center" class="title">Galeri dan Fotopolio</h2>

	<div class="grid">
		<div class="col col3 rel">
			<img src="assets/images/galeri1.jpg" class="block mr-sm">
			<div class="caption">Mobil Perpustakaan</div>
		</div>
		<div class="col col3 rel">
			<img src="assets/images/galeri2.jpg" class="block mr-sm">
			<div class="caption">membaca Bersama</div>
		</div>
		<div class="col col3 rel">
			<img src="assets/images/galeri3.jpg" class="block mr-sm">
			<div class="caption">kunjungan kemendikbud</div>
		</div>
		<div class="col col3 rel">
			<img src="assets/images/galeri4.jpg" class="block mr-sm">
			<div class="caption">tak ada batasan</div>
		</div>
	</div>
	<div class="grid">
		<div class="col col3 rel">
			<img src="assets/images/galeri5.jpg" class="block mr-sm">
			<div class="caption">metamorfosis perpustakaan</div>
		</div>
		<div class="col col3 rel">
			<img src="assets/images/galeri6.jpg" class="block mr-sm">
			<div class="caption">membaca diawali sejak dini</div>
		</div>
		<div class="col col3 rel">
			<img src="assets/images/galeri7.jpg" class="block mr-sm">
			<div class="caption">membaca adalah jendela dunia</div>
		</div>
		<div class="col col3 rel">
			<img src="assets/images/galeri8.jpg" class="block mr-sm">
			<div class="caption">melihat masa depan dengan membaca</div>
		</div>
	</div>
	<div class="clear-fix"></div>
</section>

<section id="bedah-buku" style="background: white">
	<h2 align="center" class="title">Bedah Buku</h2>

	<div class="grid" align="center">
		<div class="col col12" align="center">
			<form method="get" action="#bedah-buku" style="margin-bottom: 20px;">
				<input required="required" class="input-text" type="text" name="query_buku" placeholder="Cari Buku disini..." style="width: 200px; display: inline-block;">
				Berdasarkan: 
				<select name="kategori" id="kategori" class="input-text" style="width: 200px; display: inline-block;">
					<option value="judul_buku">JUDUL BUKU</option>
					<option value="pengarang">PENULIS</option>
					<option value="kategori">KATEGORI</option>
				</select>
				<button class="btn btn-default">CARI</button>
				<button onclick="document.location.href='?query_buku=&kategori=judul_buku#bedah-buku';" class="btn btn-default">KATALOG</button>
				<div><small><em>klik tombol KATALOG untuk menampilkan Katalog Buku</em></small></div>
			</form>
			<?php

				if (isset($_GET['query_buku'])) {
					?>
					<h4 align="center">KATALOG BUKU</h4>
					<table width="90%" align="center" cellpadding="8" cellspacing="0" border="0" style="margin-bottom: 20px;">
						<tr class="theader">
							<td>No.</td>
							<td>Kode Buku</td>
							<td>Judul Buku</td>
							<td>Pengarang</td>
							<td>Kategori</td>
							<td>Penerbit</td>
							<td>Tahun Terbit</td>
							<td>Sinopsis</td>
						</tr>

					<?php
					$tampilBuku = mysqli_query($konek,"SELECT * FROM buku WHERE $_GET[kategori] LIKE '%$_GET[query_buku]%';") or die(mysqli_error());
					$no=1;
					while ($baris=mysqli_fetch_array($tampilBuku)) {
						?>
						<tr class="bordered">
							<td><?php echo $no++; ?></td>
							<td><?php echo "BK-".$baris['kode_buku']; ?></td>
							<td><?php echo $baris['judul_buku']; ?></td>
							<td><?php echo $baris['pengarang']; ?></td>
							<td><?php echo $baris['kategori']; ?></td>
							<td><?php echo $baris['penerbit']; ?></td>
							<td><?php echo $baris['tahun_terbit']; ?></td>
							<td><?php echo $baris['sinopsis']; ?></td>
						</tr>
						<?php
					}
					?>
					</table>

					<?php
				}
			?>
		</div>
	</div>
	<div class="clear-fix"></div>
</section>

<section id="kontak">
	<h2 align="center" class="title">Terhubunglah dengan Kami</h2>

	<div class="grid" id="grid-footer">
		<div class="col col6" align="center">
			<img src="assets/images/maps.jpg" class="block">
		</div>

		<div class="col col6" align="left">
			<form>

				<label>Nama</label>
				<input class="input-text" type="text" placeholder="Nama Anda" required="required">
				
				<label>Email</label>
				<input class="input-text" type="email" placeholder="Alamat Email Anda" required="required">
				
				<label>Pesan</label>
				<textarea class="input-text" placeholder="Pesan Anda" required="required"></textarea>

				<button class="btn btn-default">KIRIM</button>
				
			</form>

			<small style="color: red; animation: flash 1.5s linear infinite;">
				untuk informasi lebih lanjut, bergabunglah dengan Forum Anggota Perpustakaan Daerah Provinsi Banten di Facebook.
			</small>
			<br/>
			<a href="http://www.facebook.com/forum-perpus-banten" target="_blank">
				<img src="assets/images/fb-tr.png" style="height: 50px;">
			</a>
		</div>
	</div>

	<div class="clear-fix"></div>
</section>

</div>

<div class="footer">
	copyright&copy;2018<br/>
	Perpustakaan Daerah Provinsi Banten<br/>
	Allrights Reserved
</div>

</body>
</html>
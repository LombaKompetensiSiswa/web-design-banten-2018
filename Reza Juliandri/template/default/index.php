<!DOCTYPE html>
<html>
<head>
	<title>Website Perpustakaan Daerah</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?=BASEURL?>public/css/style.css">
</head>
<body>
	<!-- Menu -->
	<header>
		<div class="container">
			<?php if(isset($_SESSION['role'])): ?>
				<?php if($_SESSION['role']): ?>
					<a href="#" class="item toggle" style="font-weight: bold;">&#9776;</a>
				<?php endif; ?>
			<?php endif; ?>
			<a href="<?=BASEURL?>" class="logo item">
			</a>
			<a href="" class="item mobile">&nbsp;</a>
			<a href="<?=BASEURL?>" class="item desktop">Home</a>
			<a href="<?=BASEURL?>?c=sitemap" class="item desktop">Sitemap</a>
			<a href="<?=BASEURL?>?c=about" class="item desktop">Tentang Kami</a>
			<a href="<?=BASEURL?>?c=contact" class="item desktop">Kontak Kami</a>
			<div class="right">
				<div>
					<?php if(!isset($_SESSION['login'])):?>
					<a href="<?=BASEURL?>?c=login" class="item is-red right no-border log">Login</a>
					<a href="<?=BASEURL?>?c=daftar" class="item is-red right no-border log">Daftar</a>
					<?php else:?>
					<a href="<?=BASEURL?>?c=logout" class="item is-red right no-border log">Logout</a>
				<?php endif;?>
				</div>
			</div>
		</div>
	</header>
	<!-- Mobile Navigation -->
	<nav class="mobile">
		<div class="container">
			<a href="<?=BASEURL?>" class="item" style="text-align: center;">Home</a>
			<a href="<?=BASEURL?>?c=sitemap" class="item" style="text-align: center;">Sitemap</a>
			<a href="<?=BASEURL?>?c=berita" class="item" style="text-align: center;">Berita</a>
			<a href="<?=BASEURL?>?c=about" class="item" style="text-align: center;">Tentang</a>
			<a href="<?=BASEURL?>?c=contact" class="item" style="text-align: center;">Kontak</a>
		</div>
	</nav>
	<!-- Admin Navigation -->
	<?php if(isset($_SESSION['role'])): ?>
			<nav class="navigation left">
				<div class="item">
					<?php if($_SESSION['role'] == 3): ?>
					<div class="header-navigation">Menu Admin</div>
					<a class="item" href="<?=BASEURL?>?c=a_anggota">Anggota</a>
					<div class="item">
						<a class="item" href="<?=BASEURL?>?c=a_anggota&m=add">Tambah Anggota</a>
					</div>
					<a class="item" href="<?=BASEURL?>?c=a_berita">Berita</a>
					<div class="item">
						<a class="item" href="<?=BASEURL?>?c=a_berita&m=add">Tambah Berita</a>
					</div>
					<a class="item" href="<?=BASEURL?>?c=a_buku">Buku</a>
					<div class="item">
						<a class="item" href="<?=BASEURL?>?c=a_buku&m=add">Tambah Buku</a>
					</div>
					<a class="item" href="<?=BASEURL?>?c=a_pinjaman">Pinjaman</a>
					<?php endif; ?>
					<div class="header-navigation">Menu User</div>
					<?php if(isset($_SESSION['cart']) && $_SESSION['cart'] != [] && $_SESSION['cart'] != null): ?>
					<a class="item" href="<?=BASEURL?>?c=cart">Keranjang</a>
					<?php endif ?>
					<a class="item" href="<?=BASEURL?>?c=pinjaman">List Pinjaman</a>
				</div>
			</nav>
	<?php endif; ?>
	<?php if(!isset($_GET['c']) || ($_GET['c'] == 'home' OR $_GET['c'] == "index")):?>
	<!-- Banner -->
	<div class="banner">
		<img src="<?=BASEURL?>public/img/1.jpg" class="banner-img active">
		<img src="<?=BASEURL?>public/img/2.jpg" class="banner-img">
		<img src="<?=BASEURL?>public/img/3.jpg" class="banner-img">
		<img src="<?=BASEURL?>public/img/4.jpg" class="banner-img">
		<img src="" class="banner-img">
		<div class="content-banner">
			<h1>Cari Buku?</h1>
			<p>Yuk Ke Perpustakaan Daerah Sekarang.</p>
			<button onclick="window.location.href='<?=BASEURL?>?c=daftar'" class="btn btn-banner is-red">Daftar Sekarang</button>
		</div>
	</div>
	<?php endif?>
	<?php if(!isset($home) && !isset($w)): ?>
	<!-- Content White -->
	<div class="content">
		<div class="content-data">
			<div class="container">
				<?php view($page,$parram) ?>
			</div>
		</div>
	</div>
	<?php endif; ?>
	<?php if(isset($home)): ?>
	<!-- Content White -->
	<div class="content">
		<div class="content-data">
			<div class="container">
				<h1 class="is-center">Cari buku yang kamu mau disini.</h1>
				<div class="row search">
						<div style="width: 39%;">
							<div class="form-group">
								<label>Buku apa yang kamu cari?</label>
								<input type="text" name="" id="name">
							</div>
						</div>
						<div style="width:40%">
							<div class="form-group">
								<label>Cari berdasarkan?</label>
								<select id="type">
									<option value="judul">Judul</option>
									<option value="penulis">Penulis</option>
									<option value="kategori">Kategori</option>
								</select>
							</div>
						</div>
						<div class="ssrc-btn">
							<button class="btn is-red" onclick="search()">Cari</button>
						</div>
				</div>
			</div>
		</div>
	</div>
	<div class="content" style="background-color: rgba(0,0,0,0.3)">
		<div class="content-data">
			<div class="vid-data">
				<h1 class="is-center is-margin">Cek panduannya disini.</h1>
				<video controls src="<?=BASEURL?>public/video/animasi perpusta.mp4" style="width:100%;"></video>
			</div>
		</div>
	</div>
	<?php endif ?>
	<div class="social">
		<div class="facebook items" onclick="window.location.href='https://www.facebook.com'"></div>
		<div class="twitter items" onclick="window.location.href='https://www.twitter.com'"></div>
		<div class="instagram items" onclick="window.location.href='https://www.instagram.com'"></div>
	</div>
	<?php if(isset($buku)):?>
	<!-- Content Card -->
	<div class="card-content">
		<?php if(isset($w)) echo "<div class='is-space'></div>" ?>
		<div class="container">
			<h1 class="is-center is-grey is-margin"><?=(isset($judul))?$judul:'Buku yang mungkin kamu cari'?></h1>
			<div class="r">
				<?php foreach ($buku as $b):?>
				<div class="card">
					<img src="<?=BASEURL?>/public/img/upload/<?=$b->gambar_buku?>">
					<h1><?=$b->judul_buku?></h1>
					<p><?=$b->sinopsis?></p>
					<button class="btn is-red" onclick="window.location.href='<?=BASEURL?>?c=buku&m=detail&id=<?=$b->id_buku?>'">Lihat Selengkapnya</button>
				</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
	<?php endif?>
	<!-- Berita -->
	<?php if(isset($berita)): ?>
	<div class="card-content berita">
		<?php if(isset($w)): ?>
			<div class="is-space"></div>
		<?php endif ?>
		<div class="container">
			<h1 class="is-center is-grey is-margin">Update Terbaru dari kami.</h1>
			<div class="r">
				<?php foreach ($berita as $b):?>
				<div class="berita">
					<img src="<?=BASEURL?>public/img/upload/<?=$b->gambar_berita?>">
					<h1 style="margin : 20px 0;"><?=$b->judul_berita?></h1>
					<p><?=$b->isi_berita?></p>
					<button class="btn is-red" style="margin : 20px 0;" onclick="window.location.href='<?=BASEURL?>?c=berita&m=detail&id=<?=$b->id_berita?>'">Lihat Selengkapnya</button>
				</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
	<?php endif; ?>
	<footer>
		<?php if(isset($home)): ?>
		<div class="card-content" style="padding : 0;background-color: #fff">
			<div class="container">
				<div class="r">
					<div class="card" style="margin-bottom: 0;box-shadow: none;width: 400px">
						<h1 style="margin-bottom: 20px;">Tentang Kami</h1>
						<p style="font-weight: normal;text-align: left;letter-spacing: 1px;font-size: 0.8rem;">
							Kami adalah website perpustakaan provinsi Banten dengan tujuan untuk memberikan pengetahuan mengenai berbagai aspek bagi masyarakat setempat. Dengan ini kami berharap dapat mencerahkan generasi bangsa terutama di wilayah Provinsi Banten.
						</p>
					</div>
					<div class="card" style="margin-bottom: 0;box-shadow: none;">
						<h1>Statistik Pengunjung</h1>
						<p>
							<table class="table">
								<tbody>
									<tr>
										<td style="font-size: 0.7rem;">Pengunjung Hari ini</td>
										<td style="font-weight: normal;font-size: 0.7rem;">
											<?=$pengunjung['today']?> Pengunjung
										</td>
									</tr>
									<tr>
										<td style="font-size: 0.7rem;">Total Pengunjung</td>
										<td style="font-weight: normal;font-size: 0.7rem;">
											<?=$pengunjung['all']?>  Pengunjung
										</td>
									</tr>
								</tbody>
							</table>
						</p>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
		<p>Copyright Perpustakaan Banten. All Rights Reserved.</p>
	</footer>
	<script type="text/javascript">
		<?php 
			if(isset($_SESSION['role'])):
		?>
		document.querySelector(".toggle").addEventListener('click',function(){
			document.querySelector(".navigation").classList.toggle("visible");
		});
		<?php endif; ?>
		<?php if(isset($home)): ?>
		var s =1;
		setInterval(function(){
			var p = document.querySelectorAll(".banner-img");
			if(s >= p.length){
				s = 1;
			}
			if(s > 1){
				document.querySelectorAll(".banner-img")[s-1].classList.remove("active");
			}
			else {
				document.querySelectorAll(".banner-img")[p.length-1].classList.add("active");
			}
			document.querySelectorAll(".banner-img")[s].classList.add("active");
			s++;
		},2000);
		<?php endif; ?>
		function search(){
			// #name
			// #type
			var val_data  = document.querySelector("#name").value;
			var type = document.querySelector("#type").value;
			window.location.href="<?=BASEURL?>?c=search&t="+type+"&v="+val_data;

		}
	</script>
</body>
</html>
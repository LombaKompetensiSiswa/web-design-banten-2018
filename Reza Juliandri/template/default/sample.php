<!DOCTYPE html>
<html>
<head>
	<title>Website Perpustakaan Daerah</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?=BASEURL?>public/css/style.css?t=<?=rand(0,100)?>">
</head>
<body>
	<!-- Menu -->
	<header>
		<div class="container">
			<a href="<?=BASEURL?>" class="logo item is-red">
				<div>
					<!-- <img src="public/img/logo.png" class="img-logo"/> -->
					Perpustakaan Daerah
				</div>
			</a>
			<a class="item">Buku</a>
			<a class="item">Berita</a>
			<a class="item">Contact Us</a>
			<div class="right">
				<div>
					<a href="" class="item is-red right no-border log">Login</a>
					<a href="" class="item is-red right no-border log">Daftar</a>
				</div>
			</div>
		</div>
	</header>
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
			<button class="btn btn-banner is-red">Daftar Sekarang</button>
		</div>
	</div>
	<!-- Content White -->
	<div class="content">
		<div class="content-data">
			<div class="container">
				<h1 class="is-center">Cari buku yang kamu mau disini.</h1>
				<div class="row">
					<div class="form-group">
						<label>Buku apa yang kamu cari?</label>
						<input type="" name="">
					</div>
					<div class="form-group">
						<label>Cari berdasarkan?</label>
						<select>
							<option>Judul</option>
							<option>Penulis</option>
							<option>Kategori</option>
						</select>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Content Card -->
	<div class="card-content">
		<div class="container">
			<h1 class="is-center is-grey">Buku yang mungkin kamu cari.</h1>
			<div class="r">
				<div class="card">
					
				</div>
				<div class="card">
					
				</div>
				<div class="card">
					
				</div>
				<div class="card">
					
				</div>
			</div>

		</div>
	</div>
	<footer>
		<p>Copyright Perpustakaan Banten. All Rights Reserved.</p>
	</footer>
</body>
</html>
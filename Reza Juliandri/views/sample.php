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
			<a href="#" class="item toggle" style="font-weight: bold;">&#9776;</a>
			<a href="<?=BASEURL?>" class="logo item is-red">

			</a>
			<a class="item desktop">Buku</a>
			<a class="item desktop">Berita</a>
			<a class="item desktop">Contact Us</a>
			<div class="right">
				<div>
					<a href="" class="item is-red right no-border log">Login</a>
					<a href="" class="item is-red right no-border log">Daftar</a>
				</div>
			</div>
		</div>
	</header>
	<!-- Navigation -->
	<nav class="navigation left">
		<div class="item">
			<div class="header-navigation">Menu Admin</div>
			<a class="item">Anggota</a>
			<a class="item">Berita</a>
			<a class="item">Buku</a>
			<a class="item">Pinjaman</a>
		</div>
	</nav>
	<!-- Mobile Navigation -->
	<nav class="mobile">
		<div class="container">
			<a class="item">Buku</a>
			<a class="item">Sitemap</a>
			<a class="item">Berita</a>
			<a class="item">Katalog</a>
		</div>
	</nav>
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
					<div style="width: 49%">
						
					</div>
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
					<div style="padding-left : 10px">
						<button class="btn is-red">Cari</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Content Card -->
	<div class="card-content">
		<div class="container">
			<h1 class="is-center is-grey is-margin">Buku yang mungkin kamu cari.</h1>
			<div class="r">
				<div class="card">
					<img src="<?=BASEURL?>/public/img/library.jpg">
					<h1>Judul Buku</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
					<button class="btn is-red">Lihat Selengkapnya</button>
				</div>
				<div class="card">
					<img src="<?=BASEURL?>/public/img/library-488672_640.jpg">
					<h1>Judul Buku</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
					<button class="btn is-red">Lihat Selengkapnya</button>
				</div>
				<div class="card">
					<img src="<?=BASEURL?>/public/img/library-488672_640.jpg">
					<h1>Judul Buku</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
					<button class="btn is-red">Lihat Selengkapnya</button>
				</div>
				<div class="card">
					<img src="<?=BASEURL?>/public/img/library-488672_640.jpg">
					<h1>Judul Buku</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
					<button class="btn is-red">Lihat Selengkapnya</button>
				</div>
			</div>

		</div>
	</div>
	<!-- Berita -->
	<div class="card-content berita">
		<div class="container">
			<h1 class="is-center is-grey is-margin">Update Terbaru dari kami.</h1>
			<div class="r">
				<div class="berita">
					<img src="<?=BASEURL?>/public/img/library.jpg">
					<h1 class="is-center" style="margin : 20px 0;">Judul Buku</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
					<button class="btn is-red" style="margin : 20px 0;">Lihat Selengkapnya</button>
				</div>
				<div class="berita">
					<img src="<?=BASEURL?>/public/img/library-488672_640.jpg">
					<h1 class="is-center" style="margin : 20px 0;">Judul Buku</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
					<button class="btn is-red" style="margin : 20px 0;">Lihat Selengkapnya</button>
				</div>
				<div class="berita">
					<img src="<?=BASEURL?>/public/img/library-488672_640.jpg">
					<h1 class="is-center" style="margin : 20px 0;">Judul Buku</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
					<button class="btn is-red" style="margin : 20px 0;">Lihat Selengkapnya</button>
				</div>
				<div class="berita">
					<img src="<?=BASEURL?>/public/img/library-488672_640.jpg">
					<h1 class="is-center" style="margin : 20px 0;">Judul Buku</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
					<button class="btn is-red" style="margin : 20px 0;">Lihat Selengkapnya</button>
				</div>
			</div>

		</div>
	</div>
	<footer>
		<p>Copyright Perpustakaan Banten. All Rights Reserved.</p>
	</footer>
	<script type="text/javascript">
		document.querySelector(".toggle").addEventListener('click',function(){
			document.querySelector(".navigation").classList.toggle("visible");
		});
		var s =1;
		setInterval(function(){
			var p = document.querySelectorAll(".banner-img");
			if(s > p.length){
				s = 1;
			}
			if(s > 1){
				document.querySelectorAll(".banner-img")[s-1].classList.remove("active");
			}
			else {
				document.querySelectorAll(".banner-img")[p.length-1].classList.add("active");
			}
			setTimeout(function(){
				for(var i = 0; i<1;i=i+0.10){
					document.querySelectorAll(".banner-img")[s].classList.add("active");
					document.querySelectorAll(".banner-img")[s].style.opacity = i;
				}
			},1000);
			console.log(s);
			s++;
		},1000);
	</script>
</body>
</html>
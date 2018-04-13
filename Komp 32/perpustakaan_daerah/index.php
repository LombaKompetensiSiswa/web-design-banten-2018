<?php require_once('layouts/_header.php'); ?>
<section class="hero">
	<img src="<?php echo base_url; ?>/assets/img/hero-1.jpg">
	<div class="hero-title">
		<h1><i>Perpustakaan Daerah</i></h1>
		<p>Buku adalah jendela dunia.</p>
		<h4><?php echo date('h:i:s') ?></h4>
		<p><?php echo date('d/m/Y'); ?></p>
	</div>
	<div class="pengunjung">
		<h3>ANDA ADALAH PENGUNJUNG KE : </h3>
		<p>1235412</p>
	</div>
</section>
<section class="berita">
	<div class="title-berita">
		<h1>BERITA TERKINI</h1>
		<hr>
	</div>
	<div class="content-berita">
		<?php
		$berita = DB::query('SELECT * FROM news', array());
		foreach ($berita as $row) {
		?>
		<a href="berita.php?slug=<?php echo $row['slug']; ?>">
		<div class="card" style="background-image: url('assets/img/<?php echo $row['image']; ?>'); background-size: cover;
		background-repeat: no-repeat; background-position: center;">
			<div class="card-header">
				<h3><?php echo strtoupper($row['title']); ?></h3>
				<hr>
			</div>
			<div class="card-body">
				<?php echo $row['description']; ?>
			</div>
		</div>
		</a>
		<?php } ?>

	</div>
</section>
<section class="gallery"> 
	<a href="galeri.php"><h1>Galeri Foto</h1></a>
	<div class="gallery-container">
		<?php  
		$images = DB::query('SELECT * FROM images LIMIT 4', array());
		foreach ($images as $row) {
		?>
		<div class="img-container">
			<img src="<?php echo base_url; ?>/assets/img/<?php echo $row['name']; ?>">
		</div>
		<?php } ?>
	</div>
</section>
<a href="buku.php" style="text-decoration: none;">
<section id="baca" class="baca">
	<h1>AYO MULAI MEMBACA</h1>
</section>
</a>
<a href="javascript:void(0)" id="pinjam-buku-btn" onclick="vidOpen()">INGIN MEMINJAM BUKU ?</a>
<?php require_once('layouts/_sidebar.php'); ?>
<?php require_once('layouts/_footer.php'); ?>
<script type="text/javascript">
	(function(){
		document.addEventListener('scroll', function(){
			const navbar = document.querySelector('.navbar-fixed');
			if (document.documentElement.scrollTop > 100 || document.body.scrollTop > 100) {
				navbar.classList.add('active');
			}else{
				navbar.classList.remove('active');
			}

			const btnPinjam = document.getElementById('pinjam-buku-btn');
			if (document.documentElement.scrollTop > 500 || document.body.scrollTop > 500) {
				btnPinjam.classList.add('hide');
			}else{
				btnPinjam.classList.remove('hide');
			}
		});
		const baca = document.getElementById('baca');
		const bacaTitle = document.querySelector('section.baca h1');
		document.addEventListener('scroll', function(e){
			let blue = Math.floor(Math.random() * 177);
			let red = Math.floor(Math.random() * 200);
			baca.style.backgroundColor = 'rgb('+red+', 153, '+ blue +')';
		});
	})();
</script>

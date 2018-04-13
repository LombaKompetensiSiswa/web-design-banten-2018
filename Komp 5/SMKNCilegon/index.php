<?php include_once('template/header.php'); ?>
<?php $kategori = Buku::get_all_kategori(); ?>

<div class="cover cover-index">
	<div class="title">
		<h2><?= get_config('app_name'); ?></h2>
	</div>
</div>
<div style="margin-top: 50px;">
	<div class="container">
	<?php if (@$_GET['login'] == 'success') : ?>
		<div class="alert bg-success" style="margin-bottom: 10px;">Login berhasil..</div>
	<?php endif; ?>
		<div class="alert bg-primary"><marquee>Halo pengunjung, selamat datang di perpustakaan</marquee></div>
		<div class="row">
			<div class="col-4">
				<h2>Katalog Buku</h2>
				<div class="thumbnail">
					<ul class="katalog">
					<?php foreach ($kategori as $key => $kat) : ?>
						<li><a href="<?= base_url("daftar_buku?kat=$kat[kategori_ID]"); ?>" class="btn btn-info btn-sm"><?= $kat['kategori_nama']; ?></a></li>
					<?php endforeach; ?>
					</ul>
				</div>
			</div>
			<div class="col-8">
				<h2>Statistik</h2>
				<div class="col-4 text-center">
					<div class="thumbnail pad-1 bg-primary text-light">
						<h3><?= Admin::jumlah_row('tb_buku'); ?></h3>
						<label><small>Total Kunjugan</small></label>
					</div>
				</div>
				<div class="col-4 text-center">
					<div class="thumbnail pad-1 bg-danger text-light">
						<h3><?= Admin::jumlah_row('tb_buku'); ?></h3>
						<label><small>Total Buku</small></label>
					</div>
				</div>
				<div class="col-4 text-center">
					<div class="thumbnail pad-1 bg-success text-light">
						<h3><?= Admin::jumlah_row('tb_user'); ?></h3>
						<label><small>Total Member</small></label>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-5">
				<h3>Berita Terbaru</h3>
				<div class="thumbnail">
					Tes
				</div>
			</div>
		</div>
	</div>
</div>


<?php include_once('template/footer.php'); ?>
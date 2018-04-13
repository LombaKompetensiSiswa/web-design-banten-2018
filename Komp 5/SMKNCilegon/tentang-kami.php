<?php include_once('template/header.php'); ?>
<?php $kategori = Buku::get_all_kategori(); ?>

<div class="cover cover-notindex">
	<div class="title">
		<h3>Tentang <?= get_config('app_name'); ?></h3>
	</div>
</div>
<div style="margin-top: 50px;">
	<div class="container text-center">
		<video controls="true">
			<source src="<?= base_url('assets/video/perpustakaan.mp4'); ?>" type="video/mp4">
		</video>
	</div>
</div>


<?php include_once('template/footer.php'); ?>
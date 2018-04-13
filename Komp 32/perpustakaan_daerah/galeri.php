<?php require_once('layouts/_header.php'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url; ?>/assets/css/galeri-section.css">
<style type="text/css">
	#search-navbar{
		visibility: hidden;
	}
	.navbar{
		background-color: #000;
		position: relative;
	}
</style>
<section class="galeri-section">
	<h1>GALERI</h1>
	<hr>
	<div class="galeri-container">
		<?php 
		$images = DB::query('SELECT * FROM images', array());
		foreach ($images as $row) {
		?>
		<div class="img">
			<img src="<?php echo base_url; ?>/assets/img/<?php echo $row['name']; ?>">
		</div>
		<?php } ?>
	</div>
</section>
<?php require_once('layouts/_sidebar.php'); ?>
<?php require_once('layouts/_footer.php'); ?>

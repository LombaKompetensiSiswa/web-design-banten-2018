<?php require_once('layouts/_header.php'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url; ?>/assets/css/buku.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url; ?>/assets/css/buku-page.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url; ?>/assets/css/berita-page.css">
<?php  
if (isset($_GET['slug'])) {
	$berita = DB::query('SELECT * FROM news WHERE slug=:slug', array(':slug' => $_GET['slug']))[0];
}
?>
<style type="text/css">
	#search-navbar{
		visibility: hidden;
	}
</style>
<section class="hero">
	<img src="<?php echo base_url; ?>/assets/img/<?php echo $berita['image']; ?>">
</section>
<section class="konten-berita">
	<h1><?php echo strtoupper($berita['title']); ?></h1>
	<p><?php echo $berita['description']; ?></p>
	<a href="<?php echo base_url; ?>">Kembali</a>
</section>
<?php require_once('layouts/_sidebar.php'); ?>
<?php require_once('layouts/_footer.php'); ?>

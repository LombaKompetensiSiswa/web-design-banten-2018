<?php require(__DIR__.'/../../classes/DB.php'); ?>
<?php 
session_start();
if (empty($_SESSION['username'])) {
	header('location:'.base_url.'/admin/login.php');
}else{
	if (DB::query('SELECT * FROM users WHERE name=:name', array(':name' => $_SESSION['username']))[0]['role'] != 'admin') {
		header('location:'.base_url);
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Administrator | Perpustakaan Daerah</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url; ?>/assets/css/admin-style.css">
</head>
<body>	
	<div class="sidebar">
		<div class="sidebar-header">
			<h2>ADMINISTRATOR</h2>
		</div>
		<ul>
			<li><a href="<?php echo base_url; ?>/admin/">Dashboard</a></li>
			<li><a href="galeri.php">Galeri</a></li>
			<li><a href="berita.php">Berita</a></li>
			<li><a href="penulis.php">Penulis</a></li>
			<li><a href="katalog.php">Katalog</a></li>
			<li><a href="buku.php">Buku</a></li>
			<li><a href="transaksi.php">Transaksi</a></li>
			<li><a href="pengembalian.php">Pengembalian</a></li>
			<br>
			<li style="text-align: center;"><a href="<?php echo base_url; ?>">LIHAT WEBSITE</a></li>
			<li style="text-align: center;"><a href="<?php echo base_url; ?>/process/auth.php?act=logout">LOGOUT</a></li>
		</ul>
	</div>
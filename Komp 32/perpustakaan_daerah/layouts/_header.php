<?php require(__DIR__.'/../classes/DB.php'); ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Perpustakaan Daerah</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url; ?>/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url; ?>/assets/css/navbar.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url; ?>/assets/css/sidebar.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url; ?>/assets/css/hero.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url; ?>/assets/css/berita.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url; ?>/assets/css/footer.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url; ?>/assets/css/gallery.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url; ?>/assets/css/baca.css">

</head>
<body>
<nav class="navbar">
	<a href="<?php echo base_url; ?>" class="brand">
		<img src="<?php echo base_url; ?>/assets/img/logo.png">
		<h3>Perpustakaan Daerah</h3>
	</a>
	<form action="daftar-buku.php" id="search-navbar">
		<div class="search-container">
			<select name="katalog">
				<option>All</option>
				<?php  
				$categories = DB::query('SELECT * FROM category', array());
				foreach ($categories as $row) {
				?>
				<option value="<?php echo $row['id']; ?>" <?php if(isset($_GET['katalog'])){ echo $_GET['katalog'] == $row['id'] ? 'selected' : null; } ?>><?php echo ucwords($row['name']); ?></option>
				<?php } ?>
			</select>
			<input type="text" name="q">
			<button type="submit">Cari</button>
		</div>
	</form>
	<div>
		<ul>
			<?php if(isset($_SESSION['username'])){ ?>
				<li><a href="profile.php">Halo <b><?php echo ucfirst($_SESSION['username']); ?></b></a></li>
			<?php }else{ ?>
				<li><a href="javascript:void(0)" onclick="loginOpen()">LOGIN</a></li>
			<?php } ?>
			<li><a href="javascript:void(0)" onclick="sideNavOpen()">MENU</a></li>
			<?php if (isset($_SESSION['username'])) { ?>
			<li><a href="<?php echo base_url; ?>/process/auth.php?act=logout">LOGOUT</a></li>
			<?php } ?>
		</ul>
	</div>
</nav>
<nav class="navbar-fixed">
	<div>
		<ul>  
			<?php if(isset($_SESSION['username'])){ ?>
				<li><a href="profile.php">Halo <b><?php echo ucfirst($_SESSION['username']); ?></b></a></li>
			<?php }else{ ?>
				<li><a href="javascript:void(0)" onclick="loginOpen()">LOGIN</a></li>
			<?php } ?>
		</ul>
	</div>
	<div style="text-align: right;margin-right: 50px;"> 
			<form action="daftar-buku.php">
			<div class="search-container">
				<select name="katalog">
					<option>All</option>
					<?php  
					$categories = DB::query('SELECT * FROM category', array());
					foreach ($categories as $row) {
					?>
					<option value="<?php echo $row['id']; ?>" <?php if(isset($_GET['katalog'])){ echo $_GET['katalog'] == $row['id'] ? 'selected' : null; } ?>><?php echo ucwords($row['name']); ?></option>
					<?php } ?>
				</select>
				<input type="text" name="q">
				<button type="submit">Cari</button>
			</div>
		</form>
	</div>
</nav>
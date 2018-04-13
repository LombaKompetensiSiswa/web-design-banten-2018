<?php include_once('library/autoload.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/main.css'); ?>">
	<link rel="icon" href="<?= base_url('assets/img/logo.png'); ?>">
</head>
<body>
<ul class="navbar">
	<li class="logo"><a class="logo"><img src="<?= base_url('assets/img/logo.png'); ?>" width="30px"></a></li>
	<li id="navHome"><a href="<?= base_url(); ?>">Home</a></li>
	<li id="navListBook"><a href="<?= base_url('daftar_buku'); ?>">Katalog Buku</a></li>
	<li id="navListBook"><a href="<?= base_url('tentang-kami.php'); ?>">Tentang Kami</a></li>
<?php if(is_login()): ?>
	<li id="navLogin" class="right"><a href="<?= base_url('action/logout.php'); ?>">Keluar</a></li>
<?php endif; ?>
<?php if(is_login() && !is_admin()) : ?>
	<li id="navUser" class="right"><a href="<?= base_url('user'); ?>">User Panel</a></li>
<?php elseif(is_admin() && is_admin()): ?>
	<li id="navUser" class="right"><a href="<?= base_url('admin'); ?>">Admin Panel</a></li>
<?php else: ?>
	<li id="navRegs" class="right"><a href="<?= base_url('register'); ?>">Daftar</a></li>
	<li id="navLogin" class="right"><a href="<?= base_url('login'); ?>">Masuk</a></li>
<?php endif; ?>
	<li class="icon"><a href="#" onclick="collapseNav(this)" data-collapse="0">&#9776;</a></li>
</ul>
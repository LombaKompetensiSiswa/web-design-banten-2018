<?php require_once(realpath($_SERVER['DOCUMENT_ROOT']).'/SMKNCilegon/library/autoload.php'); ?>
<?php check_access(); // CSRF ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="icon" href="<?= base_url('assets/img/logo.png'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/main.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/panel.css'); ?>">
</head>
<body>

<ul class="sidenav">
	<li id="navDash"><a href="<?= base_url('admin'); ?>">&#9776; Dashboard</a></li>
	<li id="navPinjm"><a href="<?= base_url('admin/data-pinjaman'); ?>">Pinjaman</a></li>
	<li id="navListBook"><a href="<?= base_url('admin/buku'); ?>">Buku</a></li>
	<li id="navMem"><a href="<?= base_url('admin/anggota'); ?>">Anggota</a></li>
	<li id="navKat"><a href="<?= base_url('admin/kategori'); ?>">Kategori</a></li>
	<li><a href="<?= base_url('action/logout.php'); ?>">Log-out</a></li>
</ul>
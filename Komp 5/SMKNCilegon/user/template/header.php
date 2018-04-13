<?php require_once(realpath($_SERVER['DOCUMENT_ROOT']).'/SMKNCilegon/library/autoload.php'); ?>
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
	<li id="navDash"><a href="<?= base_url('user'); ?>">Dashboard</a></li>
	<li id="navPinjm"><a href="<?= base_url('user/data_pinjaman'); ?>">Daftar Pinjaman</a></li>
	<li><a href="<?= base_url('action/logout.php'); ?>">Log-out</a></li>
</ul>
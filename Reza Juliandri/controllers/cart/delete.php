<?php
if(!isset($_GET['id'])){
	redirect("/");
	die();
}
if(!$_SESSION['cart']){
	redirect("/");
	die();
}
$d = json_decode($_SESSION['cart'],true);
if(isset($d[$_GET['id']])){
	unset($d[$_GET['id']]);
	$_SESSION['cart'] = json_encode($d);
	flash("Berhasil menghapus buku dari keranjang");
	redirect("?c=cart");
	die();
}
redirect("/");
<?php
if(!isset($_GET['id'])){
	redirect('/');
}
$sql = "SELECT * FROM buku WHERE id_buku=:buku";
$data = DB::first($sql,[':buku'=>$_GET['id']]);
if($data == null){
	flash("Tidak ada data tersedia");
	return redirect("?c=buku&m=detail&id=".$_GET['id']);
}
if(!isset($_SESSION['cart'])){
	$_SESSION['cart'] = '';
}
$cart = json_decode($_SESSION['cart'],true);
if(isset($cart[$_GET['id']])){
	flash("Buku sudah ditambahkan ke keranjang sebelumnya");
	return redirect("?c=buku&m=detail&id=".$_GET['id']);
}
$cart[$_GET['id']] =true;
$data_sent = json_encode($cart);
$_SESSION['cart'] = $data_sent;
flash("Buku sudah ditambahkan ke keranjang",'success');
return redirect("?c=buku&m=detail&id=".$_GET['id']);
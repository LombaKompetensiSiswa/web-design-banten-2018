<?php
if(!isset($_SESSION['cart']) || $_SESSION['cart'] == [] || $_SESSION['cart'] == null){
	redirect('');
}
$data = array_keys(json_decode($_SESSION['cart'],true));
for ($i=0; $i < count($data); $i++) { 
	$out[$i] = DB::first("SELECT * FROM buku WHERE id_buku=:id",[":id"=>$data[$i]]);
}
$id_buku = json_encode($out);
$s = [
	":id_buku"=>$id_buku,
	":id_user"=>$_SESSION['user_id'],
	":status"=>0,
	":created"=>date("Y-m-d")
];
$sql = "INSERT INTO pinjaman(id_buku, id_user, status, created_at) VALUES (:id_buku, :id_user, :status, :created)";
$query = DB::query($sql,$s);
if($query != true){
	flash($query);
	redirect("?c=cart");
	die();
}
unset($_SESSION['cart']);
flash("Buku sudah berhasil di checkout. Mohon menunggu hingga admin menyetujuinya");
redirect("?c=pinjaman");
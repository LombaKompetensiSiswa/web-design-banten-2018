<?php
$check = DB::first("SELECT * FROM users WHERE id_user=:id",[":id"=>$_GET['id']]);
if($check == null){
	flash('Data yang kamu cari tidak ditemukan');
	redirect("?c=a_anggota");
	die();
}
if($check->status == 0){
	$status =1;
}
else {
	$status = 0;
}
$sql = "UPDATE users SET status = :status WHERE id_user=:id";
$update = DB::query($sql,[':status'=>$status,":id"=>$_GET['id']]);
if($update != true){
	flash($update);
	redirect("?c=a_anggota");
	die();
}
flash("Berhasil mengupdate data anggota");
redirect("?c=a_anggota");
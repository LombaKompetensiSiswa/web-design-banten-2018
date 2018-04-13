<?php
$check = DB::first("SELECT * FROM pinjaman WHERE id_pinjaman=:id",[":id"=>$_GET['id']]);
if($check == null){
	flash('Data yang kamu cari tidak ditemukan');
	redirect("?c=a_pinjaman");
	die();
}
if($check->status == 0){
	$status =1;
}
else {
	$status = 0;
}
$sql = "UPDATE pinjaman SET status = :status WHERE id_pinjaman=:id";
$update = DB::query($sql,[':status'=>$status,":id"=>$_GET['id']]);
if($update != true){
	flash($update);
	redirect("?c=a_pinjaman");
	die();
}
flash("Berhasil mengupdate data pinjaman");
redirect("?c=a_pinjaman");
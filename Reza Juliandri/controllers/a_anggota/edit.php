<?php
if(!isset($_GET['id'])){
	flash("Tidak ada data tersedia");
	redirect("?c=a_anggota");
}
$sql = "SELECT * FROM users WHERE id_user=:id";
$data = DB::first($sql,[':id'=>$_GET['id']]);
if($data == null){
	flash("Tidak ada data tersedia");
	redirect("?c=a_anggota");
}
template('anggota.edit',['anggota'=>$data]);
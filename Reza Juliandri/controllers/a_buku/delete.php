<?php
if(!isset($_GET['id'])){
	flash("Tidak ada data yang ditemukan");
	redirect("?c=a_buku");
	die();
}
$sql = "SELECT * FROM buku WHERE id_buku = :id";
$data = DB::first($sql,[':id'=>$_GET['id']]);
if($data == null){
	flash("Tidak ada data yang ditemukan");
	redirect("?c=a_buku");
	die();
}
$sql = "DELETE FROM buku WHERE id_buku = :id";
$query = DB::query($sql,[':id'=>$_GET['id']]);
if($query != true){
	flash($query);
	redirect("?c=a_buku");
	die();
}
flash("Berhasil menghapus buku","success");
redirect("?c=a_buku");
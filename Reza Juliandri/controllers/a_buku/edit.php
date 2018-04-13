<?php 
if(!isset($_GET['id'])){
	flash("Tidak ada data yang ditemukan");
	redirect("?c=a_buku");
	die();
}
$sql = "SELECT * FROM buku WHERE id_buku = :id";
$data = DB::first($sql,[':id'=>$_GET['id']]);
$kategori = DB::getT('kategori');
if($data == null){
	flash("Tidak ada data yang ditemukan");
	redirect("?c=a_buku");
	die();
}
template('buku.edit',['buku_data'=>$data,'kategori'=>$kategori]);
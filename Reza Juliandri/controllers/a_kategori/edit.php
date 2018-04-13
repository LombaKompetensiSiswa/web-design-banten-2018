<?php
if(!isset($_GET['id'])){
	flash("Tidak ada data tersedia");
	redirect("?c=a_kategori");
}
$sql = "SELECT * FROM kategori WHERE id_kategori=:id";
$data = DB::first($sql,[':id'=>$_GET['id']]);
if($data == null){
	flash("Tidak ada data tersedia");
	redirect("?c=a_kategori");
}
template('kategori.edit',['kategori'=>$data]);
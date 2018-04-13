<?php
if(isset($_GET['id'])){
	$sql = "SELECT * FROM kategori WHERE id_kategori=:id";
	$data = DB::first($sql,[':id'=>$_GET['id']]);
	if($data == null){
		flash("Tidak ada data tersedia");
		redirect("?c=a_kategori");
		die();
	}
	$sql = "DELETE FROM buku WHERE kategori = :id";
	DB::query($sql,[':id'=>$_GET['id']]);
	$sql = "DELETE FROM kategori WHERE id_kategori=:id";
	$delete = DB::query($sql,[':id'=>$_GET['id']]);
	if($delete != true){
		flash($delete);
		redirect('?c=a_kategori');
	}
	flash("Berhasil menghapus data",'success');
	redirect('?c=a_kategori');
}
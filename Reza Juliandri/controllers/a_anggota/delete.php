<?php
if(isset($_GET['id'])){
	$sql = "SELECT * FROM users WHERE id_user=:id";
	$data = DB::first($sql,[':id'=>$_GET['id']]);
	if($data == null){
		flash("Tidak ada data tersedia");
		redirect("?c=a_anggota");
		die();
	}
	$sql = "DELETE FROM users WHERE id_user=:id";
	$delete = DB::query($sql,[':id'=>$_GET['id']]);
	if($delete != true){
		flash($delete);
		redirect('?c=a_anggota');
	}
	flash("Berhasil menghapus data",'success');
	redirect('?c=a_anggota');
}
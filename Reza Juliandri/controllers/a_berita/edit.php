<?php
if(!isset($_GET['id'])){
	flash("Tidak ada data tersedia");
	redirect("?c=a_berita");
}
$sql = "SELECT * FROM berita WHERE id_berita=:id";
$data = DB::first($sql,[':id'=>$_GET['id']]);
if($data == null){
	flash("Tidak ada data tersedia");
	redirect("?c=a_berita");
}
template('berita.edit',['berita_data'=>$data]);
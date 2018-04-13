<?php
if(!isset($_GET['id'])){
	redirect("?c=berita");
}
$sql = "SELECT * FROM berita WHERE id_berita=:berita";
$prep = DB::first($sql,[':berita'=>$_GET['id']]);
if($prep == null){
	redirect("?c=berita");
}
template('berita_detail',['berita_data'=>$prep]);
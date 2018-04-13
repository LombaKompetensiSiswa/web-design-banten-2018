<?php 
if(!isset($_GET['id'])){
	redirect("/");
}
$sql = "SELECT * FROM buku WHERE id_buku = :id";
$prep = DB::first($sql,[':id'=>$_GET['id']]);
if($prep == null){
	redirect('/');
}
template('buku_detail',['buku_data'=>$prep]);
<?php 
if(!isset($_POST['submit'])){
	flash("Tidak ada page yang ditemukan");
	redirect("?c=a_kategori");
}
unset($_POST['submit']);
$sql = "SELECT * FROM kategori WHERE nama_kategori=:nama_kategori";
$check = DB::first($sql,[':nama_kategori'=>$_POST['nama_kategori']]);
if($check != null){
	flash("Kategori ".$_POST['nama_kategori']." sudah tersedia");
}
$_POST['nama_kategori'] = trim($_POST['nama_kategori']);
	$validator= [
		"nama_kategori"=>25,
	];
	foreach($validator as $key=>$value){
		if(trim($_POST[$key]) == '' || trim($_POST[$key]) == null || trim($_POST[$key]) == ' '){
			flash(ucfirst($key)." tidak boleh kosong");
			return redirect("?c=a_kategori&m=add");
			die();
		}
		if(strlen($_POST[$key]) > $value){
			flash(ucfirst($key)." tidak boleh melebihi ".$value." karakter");
			return redirect("?c=a_kategori&m=add");
			die();
		}
	}
$sql = "INSERT INTO kategori (nama_kategori) VALUES (:nama_kategori);";
$prep = DB::query($sql,[":nama_kategori"=>$_POST['nama_kategori']]);
if($prep != true){
	flash($prep);
	redirect("?c=a_kategori&m=add");
}
flash("Berhasil menambahkan data");
redirect("?c=a_kategori");
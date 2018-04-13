<?php
if(!isset($_POST['submit'])){
	flash("Tidak ada data yang ditemukan");
	redirect("?c=a_buku");
	die();
} 
unset($_POST['submit']);
$data = "SELECT * FROM buku WHERE judul_buku = :nama";
$check = DB::get($data,[':nama'=>$_POST['judul_buku']]);
if($check != null){
	flash("Nama buku sudah tersedia");
	redirect('?c=a_buku&m=add');
	die();
}
$gambar_name = $_FILES['gambar_buku']['name'];
$gambar_name = rand(0,1000).$_FILES['gambar_buku']['name'];
$validator= [
	"judul_buku"=>53,
	"penulis"=>42,
	"sinopsis"=>500,
	"kategori"=>10
];
foreach($validator as $key=>$value){
	if(strlen($_POST[$key]) > $value){
		if(trim($_POST[$key]) == '' || trim($_POST[$key]) == null || trim($_POST[$key]) == ' '){
			flash(ucfirst($key)." tidak boleh kosong");
			return redirect("?c=a_buku&m=add");
			die();
		}
		flash(ucfirst($key)." tidak boleh melebihi ".$value." karakter");
		return redirect("?c=a_buku&m=add");
		die();
	}
}
if($_FILES['gambar_buku']['size'] > 10000000){
	flash("Ukuran gambar maksimum adalah 10MB");
	redirect("?c=a_buku&m=add");
}
if(!mime($_FILES['gambar_buku']['type'])){
	flash("Format file tidak didukung");
	redirect("?c=a_buku&m=add");
	die();
}
move_uploaded_file($_FILES['gambar_buku']['tmp_name'],"public/img/upload/".$gambar_name);
$_POST['gambar_buku'] = $gambar_name;
$_POST['id_user'] = $_SESSION['user_id'];
$_POST['created_at'] = date("Y-m-d");
$sql = "INSERT INTO buku(judul_buku, kategori, gambar_buku, sinopsis, created_at, id_user, penulis) VALUES (:judul_buku, :kategori, :gambar_buku, :sinopsis, :created_at, :id_user, :penulis)";
foreach($_POST as $key=>$value){
	$_POST[':'.$key] = $value;
	unset($_POST[$key]);
}
$query = DB::query($sql,$_POST);
if($query != true){
	flash($query);
	echo $query;
	redirect("?c=a_buku");
}
flash("Berhasil menambahkan buku",'success');
redirect("?c=a_buku");
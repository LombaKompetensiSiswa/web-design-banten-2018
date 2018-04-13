<?php
if(!isset($_POST['submit'])){
	flash("Tidak ada data yang ditemukan");
	redirect("?c=a_buku");
	die();
}
unset($_POST['submit']);
$data = "SELECT * FROM berita WHERE judul_berita = :nama";
$check = DB::get($data,[':nama'=>$_POST['judul_berita']]);
if($check != null){
	flash("Berita dengan judul ".$_POST['judul_berita']." sudah tersedia");
	redirect('?c=a_berita&m=add');
	die();
}
$gambar_name = $_FILES['gambar_berita']['name'];
$gambar_name = "b_".rand(0,1000).$_FILES['gambar_berita']['name'];
$validator= [
	"judul_berita"=>30,
	"isi_berita"=>500,
];
foreach($validator as $key=>$value){
	if(trim($_POST[$key]) == '' || trim($_POST[$key]) == null || trim($_POST[$key]) == ' '){
		flash(ucfirst($key)." tidak boleh kosong");
		return redirect("?c=a_berita&m=add");
		die();
	}
	if(strlen($_POST[$key]) > $value){
		flash(ucfirst($key)." tidak boleh melebihi ".$value." karakter");
		return redirect("?c=a_berita&m=add");
		die();
	}
}
if($_FILES['gambar_berita']['size'] > 10000000){
	flash("Ukuran gambar maksimum adalah 10MB");
	redirect("?c=a_berita&m=add");
}
if(!mime($_FILES['gambar_berita']['type'])){
	flash("Format file tidak didukung");
	redirect("?c=a_berita&m=add");
	die();
}
move_uploaded_file($_FILES['gambar_berita']['tmp_name'],"public/img/upload/".$gambar_name);
$_POST['gambar_berita'] = $gambar_name;
$_POST['id_user'] = $_SESSION['user_id'];
$_POST['created_at'] = date("Y-m-d");
$sql = "INSERT INTO berita(judul_berita, isi_berita, gambar_berita, id_user, created_at) VALUES (:judul_berita, :isi_berita, :gambar_berita, :id_user, :created_at)";
foreach($_POST as $key=>$value){
	$_POST[':'.$key] = $value;
	unset($_POST[$key]);
}
$query = DB::query($sql,$_POST);
if($query != true){
	flash($query);
	redirect("?c=a_berita");
}
flash("Berhasil menambahkan berita",'success');
redirect("?c=a_berita");
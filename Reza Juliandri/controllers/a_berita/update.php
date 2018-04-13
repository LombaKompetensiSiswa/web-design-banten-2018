<?php
if(!isset($_POST)){
	redirect('?c=a_buku');
}
unset($_POST['submit']);
$data = "SELECT * FROM berita WHERE id_berita=:user";
$check = DB::first($data,[':user'=>$_GET['id']]);
if($check == null){
	flash("Tidak ada data tersedia");
	redirect("?c=a_berita&m=edit&id=".$_GET['id']);
	die();
}
if(isset($_FILES['gambar_berita']) && $_FILES['gambar_berita']['type'] != null){
	$gambar_name = rand(0,1000).$_FILES['gambar_buku']['name'];
	if($_FILES['gambar_berita']['size'] > 10000000){
		flash("Ukuran gambar maksimum adalah 10MB");
		redirect("?c=a_berita&m=edit&id=".$_GET['id']);
	}
	if(!mime($_FILES['gambar_berita']['type'])){
		flash("Format file tidak didukung");
		redirect("?c=a_berita&m=edit&id=".$_GET['id']);
		die();
	}
	move_uploaded_file($_FILES['gambar_berita']['tmp_name'],"public/img/upload/".$gambar_name);
	$_POST['gambar_berita'] = $gambar_name;
}
$validator= [
	"judul_berita"=>53,
	"isi_berita"=>500,
];
	foreach($validator as $key=>$value){
		if(trim($_POST[$key]) == '' || trim($_POST[$key]) == null || trim($_POST[$key]) == ' '){
			flash(ucfirst($key)." tidak boleh kosong ");
			return redirect("?c=a_berita&m=edit&id=".$_GET['id']);
			die();
		}
		if(strlen($_POST[$key]) > $value){
			flash(ucfirst($key)." tidak boleh melebihi ".$value." karakter");
			return redirect("?c=a_berita&m=edit&id=".$_GET['id']);
			die();
		}
	}
$str = "";
$num = count($_POST);
$i =0;
$d[':id'] = $_GET['id'];
foreach ($_POST as $key => $value) {
	$d[":".$key] = $value;
	$str .= $key."=:".$key;
	if($i < $num-1){
		$str .= ",";
	}
	$i++;
}
$sql = "UPDATE berita SET ".$str." WHERE id_berita=:id";
$query = DB::query($sql,$d);
if($query != true){
	flash($query);
	var_dump($query);
	redirect("?c=a_berita&m=edit&id=".$_GET['id']);
	die();
}
flash("Berhasil mengupdate data");
redirect("?c=a_berita");
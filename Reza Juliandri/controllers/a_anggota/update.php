<?php
if(!isset($_POST)){
	redirect('?c=a_anggota');
}
else {
	$data = "SELECT * FROM users WHERE id_user=:user";
	$check = DB::first($data,[':user'=>$_GET['id']]);
	if($check == null){
		flash("Tidak ada data tersedia");
		redirect("?c=a_anggota&m=edit&id=".$_GET['id']);
		die();
	}
	if($_POST['password'] == ''){
		unset($_POST['password']);
	}
	$validator= [
		"nama"=>42,
		"alamat"=>82
	];
	foreach($validator as $key=>$value){
		if(trim($_POST[$key]) == '' || trim($_POST[$key]) == null || trim($_POST[$key]) == ' '){
			flash(ucfirst($key)." tidak boleh kosong ".$value." karakter");
			return redirect("?c=a_anggota&m=edit&id=".$_GET['id']);
			die();
		}
		if(strlen($_POST[$key]) > $value){
			flash(ucfirst($key)." tidak boleh melebihi ".$value." karakter");
			return redirect("?c=a_anggota&m=edit&id=".$_GET['id']);
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
	$sql = "UPDATE users SET ".$str." WHERE id_user=:id";
	$query = DB::query($sql,$d);
	if($query != true){
		flash($query);
		redirect("?c=a_anggota&m=edit&id=".$_GET['id']);
		die();
	}
	flash("Berhasil mengupdate data");
	redirect("?c=a_anggota");
}
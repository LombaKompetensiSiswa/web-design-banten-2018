<?php
if(!isset($_POST)){
	redirect('?c=daftar');
}
else {
	$data = "SELECT * FROM users WHERE username = :username OR email = :email";
	$check = DB::get($data,[':username'=>$_POST['username'],":email"=>$_POST['email']]);
	if($check != null){
		flash("Username atau email sudah pernah di daftarkan. Silahkan login dengan user yang sudah ada");
		redirect('?c=daftar');
		die();
	}
	$validator= [
		"username"=>25,
		"nama"=>42,
		"email"=>35,
		"alamat"=>82
	];
	foreach($validator as $key=>$value){
		if(trim($_POST[$key]) == '' || trim($_POST[$key]) == null || trim($_POST[$key]) == ' '){
			flash(ucfirst($key)." tidak boleh kosong");
			return redirect("?c=daftar");
			die();
		}
		if(strlen($_POST[$key]) > $value){
			flash(ucfirst($key)." tidak boleh melebihi ".$value." karakter");
			return redirect("?c=daftar");
			die();
		}
	}
	$_POST['role'] = 1;
	unset($_POST['login']);
	$data = "INSERT INTO users (username, password, nama, email, alamat, tanggal_lahir, role) VALUES (:username, :password, :nama, :email, :alamat, :tanggal_lahir, :role)";
	$_POST['password'] = md5($_POST['password']);
	foreach($_POST as $key=>$value){
		$_POST[':'.$key] = $value;
		unset($_POST[$key]);
	}
	$query = DB::query($data,$_POST);
	if($query != true){
		flash($query);
		redirect("?c=daftar");
	}
	flash("Berhasil mendaftar. Silahkan login dengan akun kamu".'success');
	redirect("?c=login");
}
<?php
if(isset($_POST['login'])){
	$sql = "SELECT * FROM users WHERE username=:username";
	$login = DB::first($sql,[':username'=>$_POST['username']]);
	if($login == null){
		flash("Username / password salah");
		redirect('?c=login');
		die();
	}
	if($login->password != md5($_POST['password'])){
		flash("Username / password salah");
		redirect('?c=login');
		die();
	}
	if($login->status == 0){
		flash("Mohon untuk menunggu hingga admin menyetujui");;
		redirect('?c=login');
		die();
	}
	$_SESSION['username'] = $_POST['username'];
	$_SESSION['user_id'] = $login->id_user;
	$_SESSION['login'] = true;
	$_SESSION['role'] = $login->role;
	redirect("?c=login");
}
else {
	redirect('?c=login&e=username');
}
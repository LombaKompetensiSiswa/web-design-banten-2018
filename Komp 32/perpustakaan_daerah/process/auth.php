<?php 
session_start();
require '../classes/DB.php';
$name = strtolower($_POST['name']);
$password = md5($_POST['password']);
$role = 'user';
$redirect = null;
if (isset($_GET['act'])) {
	if ($_GET['act'] == 'logout') {
		session_destroy();
	}
}
if (isset($_POST['register'])) {
	if (!DB::query('SELECT * FROM users WHERE name=:name', array(':name' => $name))) {
		DB::query('INSERT INTO users VALUES(null, :name, :password, :role)', array(':name' => $name, ':password' => $password, ':role' => $role));
		$_SESSION['username'] = $name;
		$msg = array(
			'type' => 'success',
			'msg' => 'Registrasi berhasil, Terima kasih :)'
		);
	}else{
		$msg = array(
			'type' => 'danger',
			'msg' => 'Maaf username telah digunakan, coba lagi.'
		);
	}
}
if (isset($_POST['login'])) {
	if (DB::query('SELECT * FROM users WHERE name=:name', array(':name' => $name))) {
		if (DB::query('SELECT * FROM users WHERE password=:password', array(':password' => $password))) {
			$_SESSION['username'] = $name;
			$msg = array(
				'type' => 'success',
				'msg' => 'Selamat datang kembali <b>'.strtoupper($name).'</b> :)'
			);
			if (DB::query('SELECT * FROM users WHERE name=:name AND password=:password AND role="admin"', array(':name'=>$name, ':password' => $password))) {
				$redirect = '/admin';
			}
		}else{
			$msg = array(
				'type' => 'danger',
				'msg' => 'Password anda salah mohon periksa kembali.'
			);
		}
	}else{
		$msg = array(
			'type' => 'danger',
			'msg' => 'Username anda salah mohon periksa kembali.'
		);
	}
}
$_SESSION['msg'] = $msg;
header('location:'.base_url.$redirect);
?>
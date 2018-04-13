<?php 
session_start();
require '../classes/DB.php';
$name = strtolower($_POST['name']);
$redirect = '/admin/katalog.php';
if (isset($_POST['submit'])) {
	try{
		DB::query('INSERT INTO category VALUES(null, :name)', array(':name' => $name));
		$msg = array(
				'type' => 'success',
				'msg' => 'Katalog berhasil ditambahkan.'
			);
	}catch(Exception $e){
		$msg = array(
				'type' => 'danger',
				'msg' => 'Gagal menambahkan katalog.'
			);
	}
}
if (isset($_POST['_method'])) {
	if ($_POST['_method'] == 'DELETE') {
		DB::query('DELETE FROM category WHERE id=:id', array(':id'=>$_POST['id']));
		$msg = array(
				'type' => 'success',
				'msg' => 'Katalog berhasil dihapus.'
			);
	}
}
$_SESSION['msg'] = $msg;
header('location:'.base_url.$redirect);
?>
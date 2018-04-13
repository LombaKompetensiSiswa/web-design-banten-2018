<?php 
session_start();
require '../classes/DB.php';
$name = strtolower($_POST['name']);
$redirect = '/admin/penulis.php';
if (isset($_POST['submit'])) {
	try{
		DB::query('INSERT INTO author VALUES(null, :name)', array(':name' => $name));
		$msg = array(
				'type' => 'success',
				'msg' => 'Penulis berhasil ditambahkan.'
			);
	}catch(Exception $e){
		$msg = array(
				'type' => 'danger',
				'msg' => 'Gagal menambahkan penulis.'
			);
	}
}
if (isset($_POST['_method'])) {
	if ($_POST['_method'] == 'DELETE') {
		DB::query('DELETE FROM author WHERE id=:id', array(':id'=>$_POST['id']));
		$msg = array(
				'type' => 'success',
				'msg' => 'Penulis berhasil dihapus.'
			);
	}
}
$_SESSION['msg'] = $msg;
header('location:'.base_url.$redirect);
?>
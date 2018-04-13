<?php 
session_start();
require '../classes/DB.php';
$kode = strtolower($_POST['kode']);
$redirect = '/admin/transaksi.php';
if (isset($_POST['submit'])) {
	try{
		DB::query('UPDATE transaction SET status = 0 WHERE book_id=:bookid', array(':bookid' => $kode));
		$msg = array(
				'type' => 'success',
				'msg' => 'Buku berhasil dikembalikan.'
			);
	}catch(Exception $e){
		$msg = array(
				'type' => 'danger',
				'msg' => 'Gagal mengembalikan buku.'
			);
	}
}
$_SESSION['msg'] = $msg;
header('location:'.base_url.$redirect);
?>
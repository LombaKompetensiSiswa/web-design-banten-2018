<?php  
session_start();
require '../classes/DB.php';

$redirect = '/admin/galeri.php';
if (isset($_POST['submit'])) {
	$imgType = explode('.', strtolower($_FILES['image']['name']));
	$imgTypeAfter = end($imgType);
	$imgTmp = $_FILES['image']['tmp_name'];
	$extType = array('jpg', 'png', 'jpeg');
	if (in_array($imgTypeAfter, $extType)) {
		try {
			$imgName = uniqid('', true).'.'.$imgTypeAfter;
			$dir = __DIR__.'/../assets/img/'.$imgName;
			DB::query('INSERT INTO images VALUES(null, :name)', array(':name' => $imgName));
			move_uploaded_file($imgTmp, $dir);
			$msg = array(
				'type' => 'success',
				'msg' => 'Gambar berhasil ditambahkan.'
			);

		} catch (Exception $e) {
			$msg = array(
				'type' => 'danger',
				'msg' => 'Gagal menambahkan gambar.'
			);
		}
	}else{
		$msg = array(
				'type' => 'success',
				'msg' => 'File tidak diizinkan.'
			);
	}
}
$_SESSION['msg'] = $msg;
header('location:'.base_url.$redirect);
?>
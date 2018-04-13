<?php 
session_start();
require '../classes/DB.php';
$title = strtolower($_POST['title']);
$slug = str_replace(' ', '-', $title);
$description = $_POST['description'];
$redirect = '/admin/berita.php';
if (isset($_POST['submit'])) {
	try{
		$imgType = explode('.', strtolower($_FILES['image']['name']));
		$imgTypeAfter = end($imgType);
		$imgTmp = $_FILES['image']['tmp_name'];
		$extType = array('jpg', 'png', 'jpeg');
		$image = uniqid('', true).'.'.$imgTypeAfter;
		$dir = __DIR__.'/../assets/img/'.$image;
		move_uploaded_file($imgTmp, $dir);
		
		DB::query('INSERT INTO news VALUES(null, :title, :slug, :description, :img, null)', array(':title' => $title, ':slug' => $slug, ':description' => $description, ':img' => $image));
		$msg = array(
				'type' => 'success',
				'msg' => 'Berita berhasil ditambahkan.'
			);
	}catch(Exception $e){
		$msg = array(
				'type' => 'danger',
				'msg' => 'Gagal menghapus berita'
			);
	}
}
if (isset($_POST['_method'])) {
	if ($_POST['_method'] == 'DELETE') {
		DB::query('DELETE FROM news WHERE id=:id', array(':id'=>$_POST['id']));
		$msg = array(
				'type' => 'success',
				'msg' => 'Berita berhasil dihapus.'
			);
	}
}
$_SESSION['msg'] = $msg;
header('location:'.base_url.$redirect);
?>
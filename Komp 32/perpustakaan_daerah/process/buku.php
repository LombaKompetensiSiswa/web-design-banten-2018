<?php 
session_start();
require '../classes/DB.php';

$redirect = '/admin/buku.php';
if (isset($_POST['submit'])) {
	$title = strtolower($_POST['title']);
	$author_id = $_POST['author'];
	$description = $_POST['description'];
	$synopsis = $_POST['synopsis'];
	$category_id = $_POST['category_id'];
	$qty = $_POST['qty'];
	if (isset($_POST['id'])) {
		try {
			DB::query('UPDATE books SET title=:title, category_id=:category_id, author_id=:author_id, description=:description, synopsis=:synopsis, qty=:qty WHERE id=:id', array(':title' => $title, ':category_id' => $category_id, ':author_id' => $author_id, ':description' => $description, ':synopsis' => $synopsis, ':qty' => $qty, ':id' => $_POST['id']));
			$msg = array(
					'type' => 'success',
					'msg' => 'Buku berhasil diperbaharui.'
				);
		} catch (Exception $e) {
			$msg = array(
					'type' => 'danger',
					'msg' => 'Gagal mengedit buku.'
				);
		}
	}else{
		try{
			$imgType = explode('.', strtolower($_FILES['image']['name']));
			$imgTypeAfter = end($imgType);
			$imgTmp = $_FILES['image']['tmp_name'];
			$extType = array('jpg', 'png', 'jpeg');
			$img = uniqid('', true).'.'.$imgTypeAfter;
			$dir = __DIR__.'/../assets/img/'.$img;
			move_uploaded_file($imgTmp, $dir);

			DB::query('INSERT INTO books VALUES(
				null, :title, :author_id, :description, :img, :synopsis, :category_id, :qty)', array(':title' => $title, ':author_id' => $author_id, ':description' => $description, ':img' => $img, ':synopsis' => $synopsis, ':category_id' => $category_id, ':qty' => $qty));
			$book = DB::query('SELECT * FROM books WHERE title=:title AND description=:description', array(':title'=> $title, ':description' => $description))[0];
			$book_id = $book['id'];
			for ($i=0; $i < $qty; $i++) { 
				DB::query('INSERT INTO book_unique_id VALUES(null, :book_id)', array(':book_id' =>$book_id));
			}
			$msg = array(
					'type' => 'success',
					'msg' => 'Buku berhasil ditambahkan.'
				);
		}catch(Exception $e){
			$msg = array(
					'type' => 'danger',
					'msg' => 'Gagal menambahkan buku.'
				);
		}
	}
}
if (isset($_POST['_method'])) {
	if ($_POST['_method'] == 'DELETE') {
		DB::query('DELETE FROM books WHERE id=:id', array(':id'=>$_POST['id']));
		$msg = array(
				'type' => 'success',
				'msg' => 'Buku berhasil dihapus.'
			);
	}
}
if (isset($_POST['pinjam'])) {
	$userid = DB::query('SELECT * FROM users WHERE name=:name', array(':name' => $_SESSION['username']))[0]['id'];
	$parent = $_POST['id_buku'];
	$bookid = $_POST['id'];
	$start_date = date('Y-m-d');
	$end = new DateTime($start_date);
	$end->modify('+7 day');
	$end_date = $end->format('Y-m-d');
	$onHand = 0;

	$tujuhKebelakang = new DateTime($start_date);
	$tujuhKebelakang->modify('+7 day');
	$tujuhKebelakangAkhir = $tujuhKebelakang->format('Y-m-d');
	$status = 1;
	$cekLimit = DB::query('SELECT COUNT(*) FROM transaction WHERE start_date BETWEEN NOW() AND :tujuh', array(':tujuh' => $tujuhKebelakangAkhir))[0]['COUNT(*)'];
	
	DB::query('INSERT INTO transaction VALUES(null, :userid, :parent, :bookid, :start, :enddate, :onhand, :status)', array(':userid' => $userid, ':parent' => $parent,':bookid' => $bookid, ':start' => $start_date, ':enddate' => $end_date, ':onhand' => $onHand, ':status' => $status));
	$msg = array(
				'type' => 'success',
				'msg' => 'Buku berhasil dipinjam.<br>Kode buku anda : <b>'.$bookid.'</b> atau cek profile anda.'
			);
	$redirect = '/buku.php?b_id='.$parent;
}
$_SESSION['msg'] = $msg;
header('location:'.base_url.$redirect);
?>
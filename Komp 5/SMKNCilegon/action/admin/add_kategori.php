<?php require_once(realpath($_SERVER['DOCUMENT_ROOT']).'/SMKNCilegon/library/autoload.php');

check_access(); // CSRF

if(isset($_POST)) {
	$kategori = $_POST['nm_kategori'];
	$data = array(
		'kategori_ID' => NULL,
		'kategori_nama' => $kategori
	);
	if($insert = Buku::add_kategori($data)) {
		redirect(base_url('admin/kategori'));
	} else {
		redirect(base_url('admin/kategori?add=error'));
	}
} else {
	print "not allowed to access";
}

?>
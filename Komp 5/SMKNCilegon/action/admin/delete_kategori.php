<?php require_once(realpath($_SERVER['DOCUMENT_ROOT']).'/SMKNCilegon/library/autoload.php');

check_access();

if(isset($_GET['id'])) {
	$id_buku = $_GET['id'];
	$del = Buku::delete_kategori($id_buku);
	if($del) {
		redirect(base_url('admin/kategori?delete=success'));
	} else {
		redirect(base_url('admin/kategori?delete=error'));
	}
} else {
	redirect();
}

?>
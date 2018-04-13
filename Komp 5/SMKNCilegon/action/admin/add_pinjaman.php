<?php require_once(realpath($_SERVER['DOCUMENT_ROOT']).'/SMKNCilegon/library/autoload.php');

check_access(); // CSRF

if(isset($_POST)) {
	$id_buku = $_POST['id_buku'];
	$id_user = $_POST['id_user'];
	$tgl_pinjaman = date('Y-m-d');
	$tgl_batas = $_POST['bts_pinjam'];

	$data = array(
		'pinjaman_ID' => NULL,
		'buku_ID' => $id_buku,
		'user_ID' => $id_user,
		'tgl_pinjaman' => $tgl_pinjaman,
		'bts_pinjaman' => $tgl_batas,
		'status_pinjam' => 'pinjam',
	);
	if($insert = Buku::add_pinjaman($data)) {
		redirect(base_url('admin/data-pinjaman'));
	} else {
		redirect(base_url('admin/data-pinjaman?add=error'));
	}
} else {
	print "not allowed to access";
}

?>
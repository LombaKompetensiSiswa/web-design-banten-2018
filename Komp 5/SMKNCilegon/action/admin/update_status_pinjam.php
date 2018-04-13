<?php require_once(realpath($_SERVER['DOCUMENT_ROOT']).'/SMKNCilegon/library/autoload.php');

check_access();

if(isset($_GET)) {
	$id_pinjam = $_GET['id_pinjam'];
	$user_id = $_GET['uID'];
	if($update = Admin::update_status_pinjam($id_pinjam, $user_id)) {
		redirect(base_url('admin/data-pinjaman?'));
	} else {
		redirect(base_url('admin/data-pinjaman?update=error'));
	}
} else {
	print "not allowed to access";
}

?>
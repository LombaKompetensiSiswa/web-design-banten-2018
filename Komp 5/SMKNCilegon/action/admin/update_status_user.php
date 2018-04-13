<?php require_once(realpath($_SERVER['DOCUMENT_ROOT']).'/SMKNCilegon/library/autoload.php');

check_access();

if(isset($_GET)) {
	$id = $_GET['id'];
	if($update = Admin::update_status_user($id)) {
		redirect(base_url('admin/anggota'));
	} else {
		redirect(base_url('admin/anggota?update=error'));
	}
} else {
	print "not allowed to access";
}

?>
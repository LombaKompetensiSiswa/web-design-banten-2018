<?php require_once(realpath($_SERVER['DOCUMENT_ROOT']).'/SMKNCilegon/library/autoload.php');

if(!empty($_POST)) {
	$username = $_POST['uName'];
	$password = $_POST['uPass'];
	$q = User::authLogin($username, $password);
	if($q) {
		$_SESSION['user'] = $q;
		if($q->user_level == '0') {
			redirect(base_url('user'));
		} else {
			redirect(base_url('admin'));
		}
	} else {
		redirect(base_url('login?login=error'));
	}
		
}

?>
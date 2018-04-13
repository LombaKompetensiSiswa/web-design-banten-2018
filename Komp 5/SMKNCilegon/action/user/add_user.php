<?php require_once(realpath($_SERVER['DOCUMENT_ROOT']).'/SMKNCilegon/library/autoload.php');

check_access();

if(isset($_POST)) {
	$username = $_POST['uName'];
	$fullname = $_POST['fullname'];
	$email = $_POST['uEmail'];
	$password = $_POST['password'];
	$data = array(
		'user_ID' => NULL,
		'user_name' => $username,
		'user_email' => $email,
		'user_fullname' => $fullname,
		'user_password' => password_hash($password, PASSWORD_BCRYPT),
		'user_level' => '0',
		'user_datejoin' => date('Y-m-d'),
		'status' => 'pending'
	);
	$insert = User::add_user($data);
	if($insert) {
		redirect(base_url('login/?daftar=success'));
	} else {
		redirect(base_url('login/?daftar=error'));
	}
}

?>
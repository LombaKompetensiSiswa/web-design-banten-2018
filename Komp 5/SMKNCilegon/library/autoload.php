<?php
if(!isset($_SESSION)) session_start();
require_once('config/config.php');
require_once('function/function.php');
require_once('class/database.php');
require_once('class/admin.class.php');
require_once('class/user.class.php');
require_once('class/buku.class.php');

if(isset($_SESSION['user'])) {
	$_user = $_SESSION['user'];
}

?>
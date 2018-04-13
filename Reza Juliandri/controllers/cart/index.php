<?php
if(isset($_SESSION['cart']) || $_SESSION['cart'] != [] || $_SESSION['cart'] != null){
	$data['cart'] = json_decode($_SESSION['cart'],true);
}
else {
	redirect("");
	die();
}
template('cart',$data);
<?php

function base_url($page='') {
	global $config;
	$url = rtrim($config['base_url'], '/');
	return "$url/$page";
}

function get_config($val) {
	global $config;
	return $config[$val];
}

function redirect($url='') {
	global $config;
	if($url) {
		header("Location: $url");
	} else {
		header("Location: $config[base_url]");
	}
}

function is_login() {
	return isset($_SESSION['user']);
}
function is_admin($red='') {
	return (@$_SESSION['user']->user_level == '1');
}

function check_access() {
	if(!is_admin()) redirect();
}
?>
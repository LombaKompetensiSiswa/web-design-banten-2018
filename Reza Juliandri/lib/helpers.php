<?php 
function dd($data){
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}
function view($page,$parram=[]){
	$p = str_replace(".", "/", $page);
	extract($parram);
	if(file_exists(BASEPATH."views/".$p.".php")){
		require BASEPATH."views/".$p.".php";
	}
	else {
		echo "view tidak ditemukan ".$page;
	}
}
function template($page,$parram=[],$template="default"){
	extract($parram);
	if(file_exists(BASEPATH."template/".$template."/index.php")){
		require BASEPATH."template/".$template."/index.php";
	}
	else {
		echo "Template tidak tersedia";
	}
}
function redirect($url){
	return header('Location: '.BASEURL.$url);
}
function flash($data='',$type='error'){
	if(!isset($_SESSION['flash'])){
		$_SESSION['flash_type'] = $type;
		$_SESSION['flash'] = $data;
	}
	else {
		echo $_SESSION['flash'];
		unset($_SESSION['flash_type']);
		unset($_SESSION['flash']);
	}
}
function mime($name){
	$arr= [
		"image/jpeg",
		"image/png"
	];
	if(!in_array($name, $arr)){
		return false;
	}
	return true;
}
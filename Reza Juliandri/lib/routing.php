<?php
$c = (isset($_GET['c']))?$_GET['c']:'home';
$m = (isset($_GET['m']))?$_GET['m']:'index';
if($c == "sample"){
	view('sample');
	die();
}
if($c == "pinjaman" || $c =="cart"){
	(isset($_SESSION['login']))?'':redirect("");
}
if(explode("_",$c)[0] == "a"){
	if(!isset($_SESSION)){
		redirect('/');
	}
	if($_SESSION['role'] != 3){
		redirect("/");
	}
}

if(file_exists(BASEPATH."controllers/".$c."/".$m.".php")){
	require BASEPATH."controllers/".$c."/".$m.".php";
}
else {
	echo "Tidak ada controller tersedia. ".$c.":".$m;
}
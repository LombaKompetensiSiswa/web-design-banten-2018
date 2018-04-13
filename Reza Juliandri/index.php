<?php
session_start();
define("ENV",'production');
if(ENV == "production"){
	error_reporting(0);
}
define("BASEPATH",__DIR__."/");
require BASEPATH."lib/lib.php";
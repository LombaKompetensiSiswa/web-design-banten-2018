<?php
$data['buku'] = DB::getT('buku');
$data['home'] = true;
$data['berita'] = DB::getT('berita');
$sql = "SELECT sum(num) FROM hit";
$check = DB::first($sql,[]);
foreach($check as $k){
	$data['pengunjung']['all'] = ((int)$k)+1;
}
$sql = "SELECT * FROM hit WHERE created_at=:create";
$check = DB::first($sql,[':create'=>date("Y-m-d")]);
if($check == null){
	$sql = "INSERT INTO hit  (created_at, num) VALUES (:create,:num)";
	$query = DB::query($sql,[':create'=>date("Y-m-d"),':num'=>1]);
	$data['pengunjung']['today'] = 0;
}
else {
	$num = ((int)$check->num) + 1;
	$sql = "UPDATE hit SET num=:num WHERE created_at=:create";
	$query = DB::query($sql,[':create'=>date("Y-m-d"),':num'=>$num]);
	$data['pengunjung']['today'] = $num;
}
template('home',$data);
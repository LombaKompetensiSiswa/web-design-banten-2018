<?php
if(!isset($_GET['t']) || $_GET['t'] == '' || $_GET['t'] == null || !isset($_GET['v']) || $_GET['v'] == '' || $_GET['v'] == null){
	return redirect('?');
}
switch ($_GET['t']) {
	case 'judul':
		$sql = "SELECT * FROM buku WHERE judul_buku LIKE '%".$_GET['v']."%'";
		$prep = DB::get($sql,[]);
		$data['buku'] = $prep;
		$data['judul'] = "Berikut adalah buku yang tersedia dengan judul \"".$_GET['v']."\"";
		break;
	case 'penulis':
		$sql = "SELECT * FROM buku WHERE penulis LIKE '%".$_GET['v']."%'";
		$prep = DB::get($sql,[]);
		$data['buku'] = $prep;
		$data['judul'] = "Berikut adalah buku yang tersedia dengan penulis \"".$_GET['v']."\"";
		break;
	case 'kategori':
		$sql = "SELECT * FROM kategori WHERE nama_kategori LIKE '%".$_GET['v']."%'";
		$prep = DB::get($sql,[]);
		$data['buku'] = [];
		$i = 0;
		foreach($prep as $p){
			$sql = "SELECT * FROM buku WHERE kategori=:kat";
			$prep = DB::get($sql,[":kat"=>$p->id_kategori]);
			foreach ($prep as $p) {
				array_push($data['buku'],$p);
				$i++;
			}
		}
		$data['judul'] = "Berikut adalah buku yang tersedia dengan kategori \"".$_GET['v']."\"";
		break;
	default:
		return redirect('?');
		break;
}
$data['w'] = true;
template('search',$data);
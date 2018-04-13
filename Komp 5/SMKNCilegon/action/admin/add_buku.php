<?php require_once(realpath($_SERVER['DOCUMENT_ROOT']).'/SMKNCilegon/library/autoload.php');

check_access();

if(isset($_POST)) {
	$judul_buku = $_POST['judul_buku'];
	$penerbit = $_POST['penerbit'];
	$thn = date('Y', strtotime($_POST['thn_buku']));
	$kategori = $_POST['kategori'];
	$foto = $_FILES['foto_buku'];

	$dest = realpath($_SERVER['DOCUMENT_ROOT']).'/SMKNCilegon/assets/img/buku/';
	$upload = move_uploaded_file($foto['tmp_name'], $dest.$foto['name']);
	if($upload) {
		$data = array(
			'buku_ID' => NULL,
			'judul_buku' => $judul_buku,
			'penerbit_buku' => $penerbit,
			'thn_buku' => $thn,
			'kategori_buku' => $kategori,
			'foto_buku' => $foto['name']
		);
		if($insert = Buku::add_buku($data)) {
			redirect(base_url('admin/buku'));
		} else {
			redirect(base_url('admin/buku?add=error'));
		}
	} else {
		redirect(base_url('admin/buku?upload=error'));
	}
}

?>
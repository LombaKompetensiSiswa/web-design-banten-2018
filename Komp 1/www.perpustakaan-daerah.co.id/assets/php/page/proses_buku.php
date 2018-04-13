<?php

include("../assets/php/inc/koneksi.php");

if (isset($_POST['simpan'])) {
	$simpanBuku = mysqli_query($konek,"INSERT INTO buku VALUES('','$_POST[judul_buku]','$_POST[pengarang]','$_POST[kategori]','$_POST[penerbit]','$_POST[tahun_terbit]','','$_POST[sinopsis]')") or die(mysqli_error());
	if ($simpanBuku) {
		?><script type="text/javascript">document.location.href='?isi=buku';</script><?php
	}
}
else if (isset($_POST['edit'])) {
	$editBuku = mysqli_query($konek,"UPDATE buku SET judul_buku = '$_POST[judul_buku]',pengarang = '$_POST[pengarang]',kategori = '$_POST[kategori]',penerbit = '$_POST[penerbit]', tahun_terbit = '$_POST[tahun_terbit]', sinopsis = '$_POST[sinopsis]' WHERE kode_buku = '$_POST[kode_buku]'") or die(mysqli_error());
	if ($editBuku) {
		?><script type="text/javascript">document.location.href='?isi=buku';</script><?php
	}
}
else if (isset($_GET['hapus'])) {
	$hapusBuku = mysqli_query($konek,"DELETE FROM buku WHERE kode_buku = '$_GET[kode_buku]';") or die(mysqli_error());
	if ($hapusBuku) {
		?><script type="text/javascript">document.location.href='?isi=buku';</script><?php
	}
}

?>
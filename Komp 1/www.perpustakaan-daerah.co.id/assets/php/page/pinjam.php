<?php

include("../assets/php/inc/koneksi.php");

$anggota = $_SESSION['id_anggota'];
$kode_buku = $_GET['id_buku'];
$tgl_pinjam = date("d/m/Y");


$periksa = mysqli_query($konek,"SELECT * FROM pinjaman WHERE id_anggota = $anggota;");
if (mysqli_num_rows($periksa) < 3) {
	$simpanPinjaman = mysqli_query($konek,"INSERT INTO pinjaman VALUES('','$anggota','$kode_buku','$tgl_pinjam','0')") or die(mysqli_error());
	?>

	<script type="text/javascript">
		alert("Sukses meminjam buku!");
		document.location.href="?isi=cari_buku";
	</script>

	<?php
}
else if (mysqli_num_rows($periksa) >= 3) {
	?>

	<script type="text/javascript">
		alert("Gagal meminjam buku! Sudah 3 Buku Anda pinjam untuk Minggu ini.");
		document.location.href="?isi=cari_buku";
	</script>

	<?php
}
?>


<?php
	include('../php/inc/koneksi.php');

	$tambahUser = mysqli_query($konek,"INSERT INTO user VALUES('','','$_POST[username]','$_POST[password]','user')");
	$tambahAnggota = mysqli_query($konek,"INSERT INTO anggota VALUES('','','$_POST[username]','','','','')");
?>

<script type="text/javascript">
	alert("Sukses terdaftar!");
	document.location.href="modal-login.php";
</script>
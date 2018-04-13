<link rel="stylesheet" type="text/css" href="../../css/layout.css">

<?php
include("../inc/koneksi.php");

if (isset($_POST['login-btn'])) {
	$tampilUser = mysqli_query($konek,"SELECT * FROM user  WHERE username = '$_POST[username]' AND password = '$_POST[password]';") or die(mysqli_error());
	$barisUser = mysqli_fetch_array($tampilUser);
	if ($jumlahUser = mysqli_num_rows($tampilUser)>=1) {
		ob_start();
		session_start();
		$_SESSION['username']=$_POST['username'];
		$_SESSION['id_user']=$barisUser['id_user'];
		$_SESSION['id_anggota']=$barisUser['id_anggota'];

		if ($barisUser['level']=='admin') {
			?><script type="text/javascript">document.location.href='../../../user/admin.php';</script><?php
		}
		else if ($barisUser['level']=='user') {
			?><script type="text/javascript">document.location.href='../../../user/user.php';</script><?php
		}
	}
	else{
		?><script type="text/javascript">showCA('caLogin');</script><?php
	}
}
?>

<div class="ca" id="caLogin" style="display: inline-block;">
	<div class="ca-content">
		<div class="ca-dialog">
			<div class="ca-body">
				<div class="warning-icon">!</div>
				<div class="title">Galat!</div>
				<div class="subtitle">Pengguna Tidak ditemukan atau Kata Sandi salah.</div>
			</div>
			<div class="ca-footer">
				<a href="../../page/modal-login.php" class="ca-btn" data-mode="cold">Ulangi</a>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	function showCA(trg){
		document.getElementById(trg).style.display = 'block';
	}
	function hideCA(trg){
		document.getElementById(trg).style.display = 'none';
	}
</script>

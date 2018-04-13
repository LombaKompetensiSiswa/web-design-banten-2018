<?php
include("../assets/php/inc/koneksi.php");

ob_start();
session_start();

if (empty($_SESSION['username'])) {
	?>
	<script type="text/javascript">
		alert("Anda tidak mempunyai kewenangan untuk mengakses halaman ini!");
		document.location.href='../assets/page/modal-login.php';
	</script>
	<?php
}

?>


<!DOCTYPE html>
<html style="overflow: hidden;">
<head>
	<title>.:: Halaman Pengguna</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/layout.css"/>

	<!-- GLOBAL SCRIPT -->
	<script type="text/javascript" src="../assets/js/global.js"></script>
</head>
<body style="background: #fff !important; padding-top: 38px; overflow: hidden !important;">

<div class="grid" style="position: fixed; width: 100%; top: 0;">
	<div class="col col2">
		<div class="title-bar-blue title-bar box-sh">
			.:: Halaman Pengguna
		</div>
	</div>
	<div class="col col10">
		<div class="title-bar-df title-bar box-sh">
			Selamat Datang, <span style="text-transform: capitalize;"><?php echo $_SESSION['username']; ?></span>
		</div>
	</div>
</div>

<div class="grid">
	<div class="col col2">
		<div class="panel-bar-blue panel-bar">
			<!--<a href="?isi=profil_user" class="bar-menu <?php if($_GET['isi']=='profil_user'){echo 'active';} ?>">Profil User</a>-->
			<a href="?isi=buku_user" class="bar-menu <?php if($_GET['isi']=='buku_user'){echo 'active';} ?>">Peminjaman</a>
			<a href="?isi=cari_buku" class="bar-menu <?php if($_GET['isi']=='cari_buku'){echo 'active';} ?>">Cari & Pinjam</a>
			<a href="#!" onclick="showCA('caLogout');" class="bar-menu <?php if($_GET['isi']=='logout'){echo 'active';} ?>">Keluar</a>
		</div>
	</div>
	<div class="col col10">
		<?php include("../assets/php/inc/isi_user.php"); ?>
	</div>
</div>

<div class="ca" id="caLogout">
	<div class="ca-content">
		<div class="ca-dialog">
			<div class="ca-body">
				<div class="warning-icon">!</div>
				<div class="title">Keluar ?</div>
				<div class="subtitle">Anda harus masuk kembali untuk mendapatkan Hak Akses.</div>
			</div>
			<div class="ca-footer">
				<button class="ca-btn" data-mode="warm" onclick="hideCA('caLogout');">Batal</button>
				<a href="?isi=logout" class="ca-btn" data-mode="cold">Lanjutkan!</a>
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

</body>
</html>
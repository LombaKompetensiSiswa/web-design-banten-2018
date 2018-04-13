<!DOCTYPE html>
<html>
<head>
	<title>.:: Perpustakaan Daerah - Provinsi Banten</title>
	<link rel="stylesheet" type="text/css" href="../css/layout.css"/>

	<!-- GLOBAL SCRIPT -->
	<script type="text/javascript" src="../js/global.js"></script>
</head>
<body>
<div class="modal" id="modal-login">
	<form action="../php/program/plogin.php" method="post">
	<div class="modal-content">
		<div class="modal-header">
			Masuk
		</div>
		<div class="modal-body">
				<label>Nama Pengguna</label>
				<input style="width: 94%;" autofocus="true" autocomplete="off" type="text" id="username" name="username" class="input-text" placeholder="Nama Pengguna">

				<label>Kata Sandi</label>
				<input style="width: 94%;" type="password" id="password" name="password" class="input-text" placeholder="Kata Sandi">

				<small>Belum punya Akun ? <a href="modal-daftar.php">Daftar</a> Sekarang!</small>
		</div>
		<div class="modal-footer">
			<button class="btn" onclick="history.back();" type="reset">BATAL</button>
			<button class="btn btn-default" type="submit" name="login-btn">MASUK</button>
		</div>
	</div>
	</form>
</div>

</body>
</html>
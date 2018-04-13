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
	<form method="post" action="pdaftar.php" name="daftar">
	<div class="modal-content">
		<div class="modal-header">
			Daftar Menjadi Anggota
		</div>
		<div class="modal-body">
				<label>Nama Pengguna</label>
				<input style="width: 94%;" autofocus="true" autocomplete="off" type="text" name="username" class="input-text" placeholder="Nama Pengguna">

				<label>Kata Sandi</label>
				<input style="width: 94%;" type="password" name="password" class="input-text" placeholder="Kata Sandi">

				<label>Konfirmasi Kata Sandi</label>
				<input style="width: 94%;" type="password" name="password2" class="input-text" placeholder="konfirmasi Kata Sandi">

				<small>Sudah punya Akun ? <a href="modal-login.php">Masuk</a> Saja!</small>
		</div>
		<div class="modal-footer">
			<button class="btn" type="reset" onclick="history.back();">BATAL</button>
			<button class="btn btn-default" type="submit" onclick="if (daftar.password.value != daftar.password2.value) {alert('Password Tidak Sama'); return false;}">DAFTAR</button>
		</div>
	</div>
	</form>
</div>

</body>
</html>
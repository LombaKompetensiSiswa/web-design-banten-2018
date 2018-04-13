<?php

	if (isset($_POST['submit'])) {
			$nama = mysqli_real_escape_string($conn, $_POST['nama']);
			$username = mysqli_real_escape_string($conn, $_POST['username']);
			$password = mysqli_real_escape_string($conn, $_POST['password']);
			$level = mysqli_real_escape_string($conn, $_POST['hak_akses']);

		$db->inputAnggota($nama, $username, $password, $level);
	}

?>

<h1>Tambah Anggota</h1>

<a href="?p=data-anggota" class="btn-tambah">Kembali</a>

<form method="post">
	<table class="tambah">
	
		<tr>
			<td><input type="text" name="nama" placeholder="Nama Anda.." required></td>
		</tr>
		<tr>
			<td><input type="text" name="username" placeholder="Username Anda.." required></td>
		</tr>
		<tr>
			<td><input type="password" name="password" placeholder="Password Anda.." required></td>
		</tr>
		<tr>
			<td>
				<select name="hak_akses" required>
					<option value="">==Level / Hak Akses==</option>
					<option value="1">Admin</option>
					<option value="2">User / Anggota</option>
				</select>
			</td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Simpan"></td>
		</tr>


</table>
</form>

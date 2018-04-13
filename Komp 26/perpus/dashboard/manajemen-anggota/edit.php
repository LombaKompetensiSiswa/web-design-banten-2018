<?php

	$id = mysqli_real_escape_string($conn, $_REQUEST['id']);

	$row = $db->tampilById('admin', 'id', $id);

	if (isset($_POST['submit'])) {
			$nama = mysqli_real_escape_string($conn, $_POST['nama']);
			$username = mysqli_real_escape_string($conn, $_POST['username']);
			$password = mysqli_real_escape_string($conn, $_POST['password']);
			$level = mysqli_real_escape_string($conn, $_POST['level']);

		$db->updateAnggota($id, $nama, $username, $password, $level);
	}

	foreach ($row as $f);

?>

<h1>Edit Buku</h1>

<a href="?p=data-anggota" class="btn-tambah">Kembali</a>

<form method="post">
	<table class="tambah" enctype="multipart/form-data">
	
		<tr>
			<td>Nama Lengkap</td>
			<td>
				<input type="text" name="nama" placeholder="Judul Buku.." required value="<?= $f['nama_lengkap']; ?>">
			</td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username" placeholder="Penulis.." required value="<?= $f['username']; ?>"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>
				<input type="password" name="password" placeholder="******" required>
			</td>
		</tr>
		<tr>
			<td>Hak Akses / Level</td>
			<td>
				<select name="level" required>
					<option value="1"<?php if($f['hak_akses'] == 1) echo "selected"; ?>>Admin</option>
					<option value="2"<?php if($f['hak_akses'] == 2) echo "selected"; ?>>Anggota</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="submit" value="Simpan"></td>
		</tr>


</table>
</form>

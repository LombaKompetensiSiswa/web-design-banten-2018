<?php

	if (isset($_POST['submit'])) {
			$nama = mysqli_real_escape_string($conn, $_POST['nama_kategori']);
			$slug = mysqli_real_escape_string($conn, strtolower($_POST['nama_kategori']));

			$db->inputKategori($nama, $slug);

	}

?>

<h1>Tambah Kategori</h1>

<a href="?p=data-kategori" class="btn-tambah">Kembali</a>

<form method="post">
	<table class="tambah">
		<tr>
			<td>
				<input type="text" name="nama_kategori" placeholder="Kategori Buku.." required>
			</td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Simpan"></td>
		</tr>


</table>
</form>

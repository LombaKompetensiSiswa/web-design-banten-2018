<?php

	$id = mysqli_real_escape_string($conn, $_REQUEST['id']);

	$row = $db->tampilById('kategori', 'id_kategori', $id);

	if (isset($_POST['submit'])) {
			$judul = mysqli_real_escape_string($conn, $_POST['kategori']);
			$slug = mysqli_real_escape_string($conn, strtolower($_POST['kategori']));


		$db->updateKategori($id, $judul, $slug);
	}

	foreach ($row as $f);

?>

<h1>Edit Kategori</h1>

<a href="?p=data-kategori" class="btn-tambah">Kembali</a>

<form method="post">
	<table class="tambah">
	
		<tr>
			<td>Kategori Buku</td>
			<td>
				<input type="text" name="kategori" placeholder="Judul Buku.." required value="<?= $f['nama_kategori']; ?>">
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="submit" value="Simpan"></td>
		</tr>


</table>
</form>

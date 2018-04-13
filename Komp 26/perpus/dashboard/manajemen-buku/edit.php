<?php

	$id = mysqli_real_escape_string($conn, $_REQUEST['id']);

	$row = $db->tampilById('buku', 'id_buku', $id);

	if (isset($_POST['submit'])) {
			$judul = mysqli_real_escape_string($conn, $_POST['judul']);
			$penulis = mysqli_real_escape_string($conn, $_POST['penulis']);
			$jumlah = mysqli_real_escape_string($conn, $_POST['jumlah']);
			$id_kategori = mysqli_real_escape_string($conn, $_POST['id_kategori']);

		$db->updateBuku($id, $judul, $penulis, $jumlah, $id_kategori);
	}

	foreach ($row as $f);

?>

<h1>Edit Buku</h1>

<a href="?p=data-buku" class="btn-tambah">Kembali</a>

<form method="post">
	<table class="tambah" enctype="multipart/form-data">
	
		<tr>
			<td>Judul Buku</td>
			<td>
				<input type="text" name="judul" placeholder="Judul Buku.." required value="<?= $f['judul_buku']; ?>">
			</td>
		</tr>
		<tr>
			<td>Penulis</td>
			<td><input type="text" name="penulis" placeholder="Penulis.." required value="<?= $f['penulis']; ?>"></td>
		</tr>
		<tr>
			<td>Kategori</td>
			<td>
				<select name="id_kategori" required>
					<option value="">==Kategori Buku==</option>
					<?php
						foreach ($db->tampil('kategori') as $row):
					?>
						<option value="<?= $row['id_kategori']; ?>"><?= $row['nama_kategori']; ?></option>
					<?php endforeach; ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Jumlah</td>
			<td><input type="number" name="jumlah" placeholder="Jumlah Buku.." required value="<?= $f['jumlah']; ?>" min="1"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="submit" value="Simpan"></td>
		</tr>


</table>
</form>

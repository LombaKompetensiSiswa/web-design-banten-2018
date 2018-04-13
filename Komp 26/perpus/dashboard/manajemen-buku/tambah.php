<?php

	if (isset($_POST['submit'])) {
			$judul = mysqli_real_escape_string($conn, $_POST['judul']);
			$penulis = mysqli_real_escape_string($conn, $_POST['penulis']);
			$jumlah = mysqli_real_escape_string($conn, $_POST['jumlah']);
			$id_kategori = mysqli_real_escape_string($conn, $_POST['id_kategori']);

			$db->inputBuku($judul, $penulis, $jumlah, $id_kategori);

	}

?>

<h1>Tambah Buku</h1>

<a href="?p=data-buku" class="btn-tambah">Kembali</a>

<form method="post">
	<table class="tambah" enctype="multipart/form-data">
	
		<tr>
			<td><input type="text" name="judul" placeholder="Judul Buku.." required></td>
		</tr>
		<tr>
			<td><input type="text" name="penulis" placeholder="Penulis.." required></td>
		</tr>
		<tr>
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
			<td><input type="number" name="jumlah" placeholder="Jumlah Buku.." required min="1"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Simpan"></td>
		</tr>


</table>
</form>

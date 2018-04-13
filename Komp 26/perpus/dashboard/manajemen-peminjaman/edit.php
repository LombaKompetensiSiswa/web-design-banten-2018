<?php

	$id = mysqli_real_escape_string($conn, $_REQUEST['id']);

	echo $id;

	$row = $db->tampilById('peminjaman', 'id_peminjaman', $id);

	if (isset($_POST['submit'])) {
			$nama = mysqli_real_escape_string($conn, $_POST['nama']);
			$buku = mysqli_real_escape_string($conn, $_POST['buku']);
			$jumlah = mysqli_real_escape_string($conn, $_POST['jumlah']);
			$tgl_pinjam = mysqli_real_escape_string($conn, $_POST['tgl_pinjam']);
			$tgl_kembali = mysqli_real_escape_string($conn, $_POST['tgl_kembali']);

		$db->updatePeminjaman($id, $nama, $buku, $jumlah, $tgl_pinjam, $tgl_kembali);
	}

	foreach ($row as $f);

?>

<h1>Edit Peminjaman</h1>

<a href="?p=data-peminjaman" class="btn-tambah">Kembali</a>

<form method="post">
	<table class="tambah">
		<tr>
			<td>Nama Peminjam</td>
			<td>
				<select name="nama" required>
					<?php 
					foreach ($db->tampil('admin') as $row):
					?>
					<option value="<?= $row['id']; ?>"><?= $row['nama_lengkap']; ?></option>
					<?php endforeach; ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Nama Buku</td>
			<td>
				<select name="buku" required>
					<?php 
					foreach ($db->tampil('buku') as $row2):
					?>
					<option value="<?= $row2['id_buku']; ?>"><?= $row2['judul_buku']; ?></option>
					<?php endforeach; ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Jumlah Buku</td>
			<td><input type="number" name="jumlah" required value="<?= $f['jumlah']; ?>"></td>
		</tr>
		<tr>
			<td>Tanggal Pinjam</td>
			<td><input type="date" name="tgl_pinjam" required value="<?= $f['tgl_pinjam']; ?>" min="<?php echo date('Y-m-d'); ?>"></td>
		</tr>
		<tr>
			<td>Tanggal Kembali</td>
			<td><input type="date" name="tgl_kembali" required value="<?= $f['tgl_kembali']; ?>" min="<?php echo date('Y-m-d'); ?>"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="submit" value="Simpan"></td>
		</tr>


</table>
</form>

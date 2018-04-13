<?php

	if (isset($_POST['submit'])) {
			$nama = mysqli_real_escape_string($conn, $_POST['id_anggota']);
			$buku = mysqli_real_escape_string($conn, $_POST['nm_buku']);
			$jumlah = mysqli_real_escape_string($conn, $_POST['jumlah']);
			$tgl_pinjam = mysqli_real_escape_string($conn, $_POST['tgl_pinjam']);
			$tgl_kembali = mysqli_real_escape_string($conn, $_POST['tgl_kembali']);

			$db->inputPeminjam1($nama, $buku, $jumlah, $tgl_pinjam, $tgl_kembali);

	}

?>

<h1>Pinjam Buku</h1>

<a href="?p=data-peminjaman" class="btn-tambah">Kembali</a>

<form method="post">
	<table class="tambah" >
	
		<tr>
			<td>
				<select name="id_anggota" required>
					<option value="">==Nama Anggota==</option>
					<?php
						foreach ($db->tampil('admin') as $row) {
					?>
					<option value="<?= $row['id']; ?>"><?= $row['nama_lengkap']; ?></option>
					<?php
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<select name="nm_buku" required>
					<option value="">==Nama Buku==</option>
					<?php
						foreach ($db->tampil('buku') as $row) {
					?>
					<option value="<?= $row['id_buku']; ?>"><?= $row['judul_buku']; ?></option>
					<?php
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td><input type="number" name="jumlah" placeholder="Jumlah Buku.." required></td>
		</tr>
		<tr>
			<td>Tanggal Pinjam<input type="date" name="tgl_pinjam" value="<?= date('Y-m-d'); ?>" min="<?= date('Y-m-d'); ?>"></td>
		</tr>
		<tr>
			<td>Tanggal Kembali<input type="date" name="tgl_kembali" value="<?= date('Y-m-d'); ?>"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Simpan"></td>
		</tr>


</table>
</form>

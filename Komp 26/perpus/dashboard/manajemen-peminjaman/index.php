<?php

@$id = $_REQUEST['hapus'];

@$kembali = $_GET['kembali'];
@$jumlah =  $_GET['jumlah'] * 2;
@$buku =   $_GET['buku'];

if (isset($kembali)) {
	$db->kembalikan($buku, $kembali, $jumlah);
}

if (isset($id)) {
		$db->hapus('peminjaman', 'id_peminjaman', $id, '?p=data-peminjaman');
}

?>

<h1>Peminjaman Buku</h1>

<a href="?p=pinjam-buku" class="btn-tambah">Pinjam Buku</a>

<table border="1" class="tampil" style="overflow-x: auto;">
	<tr>	
		<th>No</th>
		<th>Nama Peminjam</th>
		<th>Buku</th>
		<th>Jumlah</th>
		<th>Tanggal Pinjam</th>
		<th>Tanggal Kembali</th>
		<th>Opsi</th>
	</tr>
	<tr>
		<?php
			$no = 1;
			foreach ($db->tampilPeminjam() as $row):
		?>
		<tr>
			<td><?= $no++; ?></td>
			<td><?= $row['nama_lengkap'] ?></td>
			<td><?= $row['judul_buku'] ?></td>
			<td><?= $row['jumlah']; ?></td>
			<td><?= $row['tgl_pinjam'] ?></td>
			<td><?= $row['tgl_kembali'] ?></td>
			<td>
				<a href="?p=edit-peminjaman&id=<?= $row['id_peminjaman']; ?>" class="btn-edit">Edit</a>
				<a href="?p=data-peminjaman&hapus=<?= $row['id_peminjaman']; ?>" class="btn-hapus" onclick="return confirm('Yakin ingin menghapus data <?= $row['nama_lengkap']; ?>')">Hapus</a>
				<a href="?p=data-peminjaman&kembali=<?= $row['id_peminjaman']; ?>&jumlah=<?= $row['jumlah'];?>&buku=<?= $row['id_buku']; ?>" class="btn-edit" onclick="return confirm('Yakin ingin mengambalikan data <?= $row['nama_lengkap']; ?>!!');">Kembalikan</a>
			</td>
		</tr>
		<?php endforeach; ?>
	</tr>
</table>

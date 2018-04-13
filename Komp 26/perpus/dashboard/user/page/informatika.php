<?php

@$id = $_REQUEST['hapus'];

if (isset($id)) {
		$db->hapus('buku', 'id_buku', $id, '?p=data-buku');
}

?>

<h1>Data Buku</h1>

<a href="?p=tambah-buku" class="btn-tambah">Tambah Buku</a>

<table border="1" class="tampil" style="overflow-x: auto;">
	<tr>	
		<th>No</th>
		<th>Judul</th>
		<th>Penulis</th>
		<th>Gambar</th>
		<th>Jumlah</th>
		<th>Kategori</th>
		<th>Opsi</th>
	</tr>
	<tr>
		<?php
			$no = 1;
			foreach ($db->tampilBuku() as $row):
		?>
		<tr>
			<td><?= $no++; ?></td>
			<td><?= $row['judul_buku'] ?></td>
			<td><?= $row['penulis'] ?></td>
			<td><img src="<?= $row['gambar']; ?>" alt="Logo"></td>
			<td><?= $row['jumlah'] ?></td>
			<td><?= $row['nama_kategori'] ?></td>
			<td>
				<a href="?p=edit-buku&id=<?= $row['id_buku']; ?>" class="btn-edit">Edit</a>
				<a href="?p=data-buku&hapus=<?= $row['id_buku']; ?>" class="btn-hapus" onclick="return confirm('Yakin ingin menghapus data <?= $row['judul_buku']; ?>')">Hapus</a>
			</td>
		</tr>
		<?php endforeach; ?>
	</tr>
</table>

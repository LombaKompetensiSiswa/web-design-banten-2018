<?php

@$id = $_REQUEST['hapus'];

if (isset($id)) {
		$db->hapus('kategori', 'id_kategori', $id, '?p=data-kategori');
}

?>

<h1>Data Kategori</h1>

<a href="?p=tambah-kategori" class="btn-tambah">Tambah Kategori</a>

<table border="1" class="tampil" style="overflow-x: auto;">
	<tr>	
		<th>No</th>
		<th>Nama Kategori</th>
		<th>Opsi</th>
	</tr>
	<tr>
		<?php
			$no = 1;
			foreach ($db->tampil('kategori') as $row):
		?>
		<tr>
			<td><?= $no++; ?></td>
			<td><?= $row['nama_kategori'] ?></td>
			<td>
				<a href="?p=edit-kategori&id=<?= $row['id_kategori']; ?>" class="btn-edit">Edit</a>
				<a href="?p=data-kategori&hapus=<?= $row['id_kategori']; ?>" class="btn-hapus" onclick="return confirm('Yakin ingin menghapus data <?= $row['nama_kategori']; ?>')">Hapus</a>
			</td>
		</tr>
		<?php endforeach; ?>
	</tr>
</table>

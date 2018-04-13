<h1 style="">Informasi Buku</h1>

<p>
	Kategori Yang Ada : <?= $db->jumlahData('kategori'); ?>
	<?php
		foreach ($db->tampil('kategori') as $row):
	?>
	<ul>
		<li><a href="?p=<?= $row['slug']; ?>" class="link"><?= $row['nama_kategori']; ?></a></li>
	</ul>
	<?php endforeach; ?>
</p>

<?php

@$id = $_REQUEST['hapus'];

if (isset($id)) {
		$db->hapus('buku', 'id_buku', $id, '?p=data-buku');
}

?>

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
				<a href="?p=pinjam-buku&id=<?= $row['id_buku']; ?>" class="btn-edit">Pinjam Buku</a>
			</td>
		</tr>
		<?php endforeach; ?>
	</tr>
</table>

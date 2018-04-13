<?php

@$id = $_REQUEST['hapus'];

if (isset($id)) {
		$db->hapus('admin', 'id', $id, '?p=data-anggota');
}

?>

<h1>Data Anggota</h1>

<a href="?p=tambah-anggota" class="btn-tambah">Tambah Anggota</a>

<div style="overflow-x: auto;">
	<table border="1" class="tampil">
	<tr>	
		<th>No</th>
		<th>Nama Lengkap</th>
		<th>Username</th>
		<th>Password</th>
		<th>Level / Hak Akses</th>
		<th>Opsi</th>
	</tr>
	<tr>
		<?php
			$no = 1;
			foreach ($db->tampil('admin') as $row):
		?>
		<tr>
			<td><?= $no++; ?></td>
			<td><?= $row['nama_lengkap'] ?></td>
			<td><?= $row['username'] ?></td>
			<td><?= $row['password'] ?></td>
			<td>
				<?php 
				if($row['hak_akses'] == 1) echo "Admin";
				else echo "Anggota";
				?>
			</td>
			<td>
				<a href="?p=edit-anggota&id=<?= $row['id']; ?>" class="btn-edit">Edit</a>
				<a href="?p=data-anggota&hapus=<?= $row['id']; ?>" class="btn-hapus" onclick="return confirm('Yakin ingin menghapus data <?= $row['nama_lengkap']; ?>')">Hapus</a>
			</td>
		</tr>
		<?php endforeach; ?>
	</tr>
</table>
</div>


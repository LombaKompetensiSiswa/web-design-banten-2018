<h1>Informasi Peminjaman</h1>

<table border="1" class="tampil" style="overflow-x: auto;">
	<tr>	
		<th>No</th>
		<th>Nama Peminjam</th>
		<th>Buku</th>
		<th>Jumlah</th>
		<th>Tanggal Pinjam</th>
		<th>Tanggal Kembali</th>
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
		</tr>
		<?php endforeach; ?>
	</tr>
</table>

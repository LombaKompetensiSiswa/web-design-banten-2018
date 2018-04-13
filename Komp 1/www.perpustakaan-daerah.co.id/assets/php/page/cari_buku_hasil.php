
<table id="tableBuku" border="0" cellpadding="8" cellspacing="0" width="90%" align="center">
	<tr class="theader">
		<td>No.</td>
		<td>Judul Buku</td>
		<td>Pengarang</td>
		<td>Kategori</td>
		<td>Penerbit</td>
		<td>Tahun Terbit</td>
		<td>Sinopsis</td>
		<td>Tindakan</td>
	</tr>

	<?php
	$tampilCariBuku = mysqli_query($konek,"SELECT * FROM buku WHERE judul_buku LIKE '%$_GET[q_buku]%'");
	if (mysqli_num_rows($tampilCariBuku) == 0) {
		?><script type="text/javascript">document.getElementById('tableBuku').style.display = 'none';</script><?php
		echo '<div align="center" style="color:red;">Tidak Ada Hasil yang memenuhi</div>';
	}
	$no=1;
	while($barisCariBuku = mysqli_fetch_array($tampilCariBuku)){
	?>
	<tr class="bordered">
		<td><?php echo $no++; ?></td>
		<td><?php echo $barisCariBuku['judul_buku']; ?></td>
		<td><?php echo $barisCariBuku['pengarang']; ?></td>
		<td><?php echo $barisCariBuku['kategori']; ?></td>
		<td><?php echo $barisCariBuku['penerbit']; ?></td>
		<td><?php echo $barisCariBuku['tahun_terbit']; ?></td>
		<td><?php echo $barisCariBuku['sinopsis']; ?></td>
		<td align="center"><button onclick="document.location.href='?isi=pinjam&id_buku=<?php echo $barisCariBuku['kode_buku']; ?>';" class="btn">PINJAM</button></td>
	</tr>
	<?php
	}
	?>

</table>

<?php include("../inc/koneksi.php"); ?>

<table border="0" cellpadding="8" cellspacing="0" width="90%" align="center">
	<tr class="theader">
		<td>No.</td>
		<td>Judul Buku</td>
	</tr>

	<?php
	$tampilPinjam = mysqli_query($konek,"SELECT * FROM pinjaman INNER JOIN anggota ON anggota.id_anggota = pinjaman.id_anggota");
	while($barisPinjam = mysqli_fetch_array($tampilAnggota)){
	?>
	<tr class="bordered">
		<td><?php echo $barisPinjam[0]; ?></td>
		<td><?php echo $barisPinjam[1]; ?></td>
	</tr>
	<?php
	}
	?>

</table>

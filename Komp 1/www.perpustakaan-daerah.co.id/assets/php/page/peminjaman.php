<h4 align="center">DAFTAR PERMINTAAN PEMINJAMAN</h4>
<table width="80%" align="center" border="0" cellspacing="0" cellpadding="10">
	<tr class="theader">
		<td>No.</td>
		<td>Nama Peminjam</td>
		<td>Judul Buku</td>
		<td>Tanggal Pinjam</td>
		<td>Status</td>
		<td>Tindakan</td>
	</tr>
	<?php

		include("../assets/php/inc/koneksi.php");

		$tampilPinjaman = mysqli_query($konek,"SELECT * FROM pinjaman INNER JOIN anggota ON pinjaman.id_anggota = anggota.id_anggota INNER JOIN buku ON pinjaman.kode_buku = buku.kode_buku;");
		$no=1;
		while ($barisPinjaman = mysqli_fetch_array($tampilPinjaman)) {
			?>
			<tr class="bordered">
				<td><?php echo $no++; ?></td>
				<td><?php echo $barisPinjaman['nama_pengguna']; ?></td>
				<td><?php echo $barisPinjaman['judul_buku']; ?></td>
				<td><?php echo $barisPinjaman['tgl_pinjam']; ?></td>
				<td><?php
					if($barisPinjaman['status']=='0'){
						echo 'Terkirim';
					}
					else if($barisPinjaman['status']=='1'){
						echo 'Diterima';
					}

					?></td>
				<td><a href="?isi=peminjaman&acc=<?php if($barisPinjaman['status']=='0'){echo '1';}else{echo '0';} ?>" class="btn <?php if($barisPinjaman['status']=='0'){echo 'btn-default';}else{echo '';} ?>"><?php if($barisPinjaman['status']=='0'){echo 'Terima';}else{echo 'Batalkan';} ?></a></td>
			</tr>

			<?php
			if (isset($_GET['acc'])) {
				if ($_GET['acc']=='1') {
					$accPinjam = mysqli_query($konek,"UPDATE pinjaman SET status = '1' WHERE id_pinjaman = '$barisPinjaman[id_pinjaman]'");
					?><script>document.location.href='?isi=peminjaman';</script><?php
				}
				else if ($_GET['acc']=='0') {
					$accPinjam = mysqli_query($konek,"UPDATE pinjaman SET status = '0' WHERE id_pinjaman = '$barisPinjaman[id_pinjaman]'");
					?><script>document.location.href='?isi=peminjaman';</script><?php
				}
			}
		}
	?>
</table>
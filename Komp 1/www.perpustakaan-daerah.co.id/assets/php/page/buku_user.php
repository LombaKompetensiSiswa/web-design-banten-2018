		<?php
		?>

		<h4 align="center">DAFTAR BUKU YANG TELAH ANDA PINJAM</h4>
			<table width="90%" align="center" cellpadding="8" cellspacing="0" border="0" style="margin-bottom: 20px;">
				<tr class="theader">
					<td>No.</td>
					<td>Kode Buku</td>
					<td>Judul Buku</td>
					<td>Pengarang</td>
					<td>Kategori</td>
					<td>Penerbit</td>
					<td>Tahun Terbit</td>
					<td>Sinopsis</td>
					<td>Tanggal Pinjam</td>
					<td>Tanggal Kembali</td>
					<td>Status</td>
				</tr>

			<?php

			$tampilBuku = mysqli_query($konek,"SELECT * FROM `pinjaman` INNER JOIN anggota ON pinjaman.id_anggota = anggota.id_anggota INNER JOIN buku ON buku.kode_buku = pinjaman.kode_buku;") or die(mysqli_error());
			$no=1;
			while ($baris=mysqli_fetch_array($tampilBuku)) {
				$pinjam = $baris['tgl_pinjam'];
				$tujuh_hari = mktime(0,0,0,date("n"),date("j")+7,date("Y"));
				$kembali = date("d/m/Y",$tujuh_hari);
				?>
				<tr class="bordered">
					<td><?php echo $no++; ?></td>
					<td><?php echo 'BK-'.$baris['kode_buku']; ?></td>
					<td><?php echo $baris['judul_buku']; ?></td>
					<td><?php echo $baris['pengarang']; ?></td>
					<td><?php echo $baris['kategori']; ?></td>
					<td><?php echo $baris['penerbit']; ?></td>
					<td><?php echo $baris['tahun_terbit']; ?></td>
					<td><?php echo $baris['sinopsis']; ?></td>
					<td><?php echo $baris['tgl_pinjam']; ?></td>
					<td><?php echo $kembali; ?></td>
					<td><?php if($baris['status']=='0'){echo 'Menunggu persetujuan';}else{echo 'Diterima';} ?></td>
				</tr>
				<?php
			}
			?>
			</table>

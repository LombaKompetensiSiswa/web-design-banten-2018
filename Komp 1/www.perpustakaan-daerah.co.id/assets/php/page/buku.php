<?php

include("../assets/php/inc/koneksi.php");

?>
<a href="?isi=tambah_buku" class="btn btn-default" style="float: left; margin: 15px 0 0 45px;">TAMBAH</a>
<h3 align="center">DAFTAR BUKU</h3>
<table width="90%" align="center" cellpadding="8" cellspacing="0" border="0">
	<tr class="theader">
		<td>No.</td>
		<td>Kode Buku</td>
		<td>Judul Buku</td>
		<td>Pengarang</td>
		<td>Kategori</td>
		<td>Penerbit</td>
		<td>Tahun Terbit</td>
		<td>Operasi</td>
	</tr>

<?php
$tampilBuku = mysqli_query($konek,"SELECT * FROM buku;") or die(mysqli_error());
$no=1;
while ($baris=mysqli_fetch_array($tampilBuku)) {
	?>
	<tr class="bordered">
		<td><?php echo $no++; ?></td>
		<td><?php echo 'BK'.$baris['kode_buku']; ?></td>
		<td><?php echo $baris['judul_buku']; ?></td>
		<td><?php echo $baris['pengarang']; ?></td>
		<td><?php echo $baris['kategori']; ?></td>
		<td><?php echo $baris['penerbit']; ?></td>
		<td><?php echo $baris['tahun_terbit']; ?></td>
		<td>
			<a class="btn btn-default" href="?isi=edit_buku&kode_buku=<?php echo $baris['kode_buku']; ?>">EDIT</a>
			<a onclick="return confirm('Hapus Buku <?php echo $baris['judul_buku']; ?> ?');" class="btn btn-default" href="?isi=proses_buku&kode_buku=<?php echo $baris['kode_buku']; ?>&hapus">HAPUS</a>
		</td>
	</tr>
	<?php
}
?>
</table>

<?php

include("../assets/php/inc/koneksi.php");

?>
<h3 align="center">DAFTAR ANGGOTA</h3>
<table width="60%" align="center" cellpadding="8" cellspacing="0" border="0">
	<tr class="theader">
		<td>No.</td>
		<td>Nama Anggota</td>
	</tr>

<?php
$tampilBuku = mysqli_query($konek,"SELECT * FROM anggota INNER JOIN user;") or die(mysqli_error());
$no=1;
while ($baris=mysqli_fetch_array($tampilBuku)) {
	?>
	<tr class="bordered">
		<td><?php echo $no++; ?></td>
		<td><?php echo $baris['username']; ?></td>
	</tr>
	<?php
}
?>
</table>

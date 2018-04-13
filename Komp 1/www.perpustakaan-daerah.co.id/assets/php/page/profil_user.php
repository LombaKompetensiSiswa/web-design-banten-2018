<?php
?>

<h4 align="center">PROFIL PENGGUNA</h4>

<table border="0" cellpadding="8" cellspacing="0" width="90%" align="center">
	<tr class="theader">
		<td>NAMA ANGGOTA</td>
		<td>EMail</td>
		<td>No. Telepon</td>
		<td>Jenis Kelamin</td>
		<td>Alamat</td>
		<td>Username</td>
		<td>Password</td>
	</tr>

	<?php
	$tampilAnggota = mysqli_query($konek,"SELECT * FROM anggota INNER JOIN user ON anggota.id_anggota = user.id_anggota");
	while($barisAnggota = mysqli_fetch_array($tampilAnggota)){
	?>
	<tr class="bordered">
		<td><?php echo $barisAnggota['nama_pengguna']; ?></td>
		<td><?php echo $barisAnggota['email']; ?></td>
		<td><?php echo $barisAnggota['hp']; ?></td>
		<td><?php if($barisAnggota['jekel']=='l'){echo 'Laki-laki';}else{echo 'Perempuan';} ?></td>
		<td><?php echo $barisAnggota['alamat']; ?></td>
		<td><?php echo $barisAnggota['username']; ?></td>
		<td><?php echo '************' ?></td>
	</tr>
	<?php
	}
	?>

</table>
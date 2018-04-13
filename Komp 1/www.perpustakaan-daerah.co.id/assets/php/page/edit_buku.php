<h4 align="center">EDIT BUKU</h4>

<?php

include("../assets/php/inc/koneksi.php");

$pilihBuku = mysqli_query($konek,"SELECT * FROM buku WHERE kode_buku = '$_GET[kode_buku]'");
$barisBuku = mysqli_fetch_array($pilihBuku);
?>
<form method="post" action="?isi=proses_buku">
<table align="center" width="80%">
	<tr align="left">
		<td width="15%">Judul Buku</td>
		<td>
			<input type="hidden" name="kode_buku" value="<?php echo $barisBuku['kode_buku']; ?>">
			<input required="required" type="text" name="judul_buku" class="input-text" autofocus="true" placeholder="Judul Buku" value="<?php echo $barisBuku['judul_buku']; ?>">
		</td>
	</tr>
	<tr align="left">
		<td width="15%">Pengarang</td>
		<td><input required="required" type="text" name="pengarang" class="input-text" placeholder="Pengarang Buku" value="<?php echo $barisBuku['pengarang']; ?>"></td>
	</tr>
	<tr align="left">
		<td width="15%">Kategori</td>
		<td>
			<select required="required" name="kategori" class="input-text">
				<option <?php if($barisBuku['kategori']=='NOVEL'){echo 'selected';} ?> value="NOVEL">NOVEL</option>
				<option <?php if($barisBuku['kategori']=='CERPEN'){echo 'selected';} ?> value="CERPEN">CERPEN</option>
				<option <?php if($barisBuku['kategori']=='KOMIK'){echo 'selected';} ?> value="KOMIK">KOMIK</option>
				<option <?php if($barisBuku['kategori']=='LAINNYA'){echo 'selected';} ?> value="LAINNYA">LAINNYA</option>
			</select>
		</td>
	</tr>
	<tr align="left">
		<td width="15%">Penerbit</td>
		<td><input required="required" type="text" name="penerbit" class="input-text" placeholder="Penerbit" value="<?php echo $barisBuku['penerbit']; ?>"></td>
	</tr>
	<tr align="left">
		<td width="15%">Tahun Terbit</td>
		<td><input required="required" type="number" name="tahun_terbit" class="input-text" placeholder="Tahun Terbit" value="<?php echo $barisBuku['tahun_terbit']; ?>"></td>
	</tr>
	<tr align="left">
		<td valign="top" width="15%">Sinopsis</td>
		<td><textarea required="required" class="input-text" cols="100" rows="5" name="sinopsis" placeholder="Sinopsis"><?php echo $barisBuku['sinopsis']; ?></textarea></td>
	</tr>
	<tr align="center">
		<td colspan="2"><button type="submit" name="edit" class="btn btn-default">MODIFIKASI</button></td>
	</tr>
</table>
</form>
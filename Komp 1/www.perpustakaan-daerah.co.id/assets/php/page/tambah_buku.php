<h4 align="center">TAMBAH BUKU</h4>

<form method="post" action="?isi=proses_buku">
<table align="center" width="80%">
	<tr align="left">
		<td width="15%">Judul Buku</td>
		<td><input required="required" type="text" name="judul_buku" class="input-text" autofocus="true" placeholder="Judul Buku"></td>
	</tr>
	<tr align="left">
		<td width="15%">Pengarang</td>
		<td><input required="required" type="text" name="pengarang" class="input-text" placeholder="Pengarang Buku"></td>
	</tr>
	<tr align="left">
		<td width="15%">Kategori</td>
		<td>
			<select required="required" name="kategori" class="input-text">
				<option value="NOVEL">NOVEL</option>
				<option value="CERPEN">CERPEN</option>
				<option value="KOMIK">KOMIK</option>
				<option value="LAINNYA">LAINNYA</option>
			</select>
		</td>
	</tr>
	<tr align="left">
		<td width="15%">Penerbit</td>
		<td><input required="required" type="text" name="penerbit" class="input-text" placeholder="Penerbit"></td>
	</tr>
	<tr align="left">
		<td width="15%">Tahun Terbit</td>
		<td><input required="required" type="number" name="tahun_terbit" class="input-text" placeholder="Tahun Terbit"></td>
	</tr>
	<tr align="left">
		<td valign="top" width="15%">Sinopsis</td>
		<td><textarea required="required" class="input-text" cols="100" rows="5" name="sinopsis" placeholder="Sinopsis"></textarea></td>
	</tr>
	<tr align="center">
		<td colspan="2"><button type="submit" name="simpan" class="btn btn-default">SIMPAN</button></td>
	</tr>
</table>
</form>
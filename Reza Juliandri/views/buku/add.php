<div class="is-space"></div>
<h1 class="is-center">Tambah data buku</h1>
<div class="container">
	<?php if(isset($_SESSION['flash'])): ?>
		<?php if($_SESSION['flash_type'] == "error"): ?>
			<div class="alert is-yellow">
				<p><?=flash()?></p>
			</div>
		<?php else: ?>
			<div class="alert is-red">
				<p><?=flash()?></p>
			</div>
		<?php endif; ?>
	<?php endif; ?>
	<form method="post" action="<?=BASEURL?>?c=a_buku&m=proses" enctype="multipart/form-data">
		<div class="form-group">
			<label>Judul Buku: </label>
			<input type="text" name="judul_buku" placeholder="Masukkan Judul Buku" required>
		</div>
		<div class="form-group">
			<label>Penulis: </label>
			<input type="text" name="penulis" placeholder="Masukkan Nama Penulis" required>
		</div>
		<div class="form-group">
			<label>Sinopsis: </label>
			<textarea name="sinopsis" placeholder="Masukkan Sinopsis Disini" style="height:200px;" required></textarea>
		</div>
		<div class="form-group">
			<label>Kategori: </label>
			<select required="" name="kategori">
				<?php foreach($kategori as $k): ?>
				<option value="<?=$k->id_kategori?>"><?=$k->nama_kategori?></option>
				<?php endforeach ?>
			</select>
		</div>
		<div class="form-group">
			<label>Gambar Buku </label>
			<input type="file" name="gambar_buku" name="gambar_buku" required>
		</div>
		<div style="padding-left:67%">
			<button class="btn is-red" type="submit" name="submit">Submit</button>
			<a class="btn is-yellow" style="font-size: 0.8em;" onclick="window.history.back()" name="login">Kembali</a>
		</div>
	</form>
</div>
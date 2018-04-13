<form method="post" action="<?=BASEURL?>?c=a_buku&m=update&id=<?=$_GET['id']?>">
	<div class="is-space"></div>
	<h1 class="is-center is-margin">Edit Buku</h1>
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
	<div style="width:70%">
		<div class="form-group">
			<label>Judul Buku: </label>
			<input type="text" name="judul_buku" placeholder="Masukkan Judul Buku" required value="<?=$buku_data->judul_buku?>">
		</div>
		<div class="form-group">
			<label>Penulis: </label>
			<input type="text" name="penulis" placeholder="Masukkan Nama Penulis" required value="<?=$buku_data->penulis?>">
		</div>
		<div class="form-group">
			<label>Sinopsis: </label>
			<textarea name="sinopsis" placeholder="Masukkan Sinopsis Disini" style="height:200px;" required><?=$buku_data->sinopsis?></textarea>
		</div>
		<div class="form-group">
			<label>Kategori: </label>
			<select required="" name="kategori">
				<?php foreach($kategori as $k): ?>
				<option value="<?=$k->id_kategori?>" <?php if($buku_data->kategori == $k->id_kategori) echo "selected";?>><?=$k->nama_kategori?></option>
				<?php endforeach ?>
			</select>
		</div>
		<div class="form-group">
			<label>Gambar Buku </label>
			<input type="file" name="gambar_buku">
			<small style="display: block">Silahkan upload gambar jika ingin mengganti gambar buku.</small>
		</div>
		<div style="padding-left:67%">
			<button class="btn is-red" type="submit" name="submit">Submit</button>
			<a class="btn is-yellow" style="font-size: 0.8em;" onclick="window.history.back()" name="login">Kembali</a>
		</div>
	</div>
</form>

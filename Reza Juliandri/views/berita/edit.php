<div class="is-space"></div>
<h1 class="is-center">Edit data berita</h1>
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
	<form method="post" action="<?=BASEURL?>?c=a_berita&m=update&id=<?=$berita_data->id_berita?>" enctype="multipart/form-data">
		<div class="form-group">
			<label>Judul Berita: </label>
			<input type="text" name="judul_berita" placeholder="Masukkan Judul Berita" required value="<?=$berita_data->judul_berita?>">
		</div>
		<div class="form-group">
			<label>Isi Berita: </label>
			<textarea name="isi_berita" placeholder="Masukkan Isi Disini" style="height:200px;" required><?=$berita_data->isi_berita?></textarea>
		</div>
		<div class="form-group">
			<label>Gambar Headline</label>
			<input type="file" name="gambar_berita">
			<small style="display: block">Silahkan upload gambar jika ingin mengganti gambar headline.</small>
		</div>
		<div style="padding-left:67%">
			<button class="btn is-red" type="submit" name="submit">Submit</button>
			<a class="btn is-yellow" style="font-size: 0.8em;" onclick="window.history.back()" name="login">Kembali</a>
		</div>
	</form>
</div>
<div class="is-space"></div>
<h1 class="is-center">Tambah data berita</h1>
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
	<form method="post" action="<?=BASEURL?>?c=a_berita&m=proses" enctype="multipart/form-data">
		<div class="form-group">
			<label>Judul Berita: </label>
			<input type="text" name="judul_berita" placeholder="Masukkan Judul Berita" required>
		</div>
		<div class="form-group">
			<label>Isi Berita: </label>
			<textarea name="isi_berita" placeholder="Masukkan Isi Disini" style="height:200px;" required></textarea>
		</div>
		<div class="form-group">
			<label>Gambar Headline</label>
			<input type="file" name="gambar_berita" required>
		</div>
		<div style="padding-left:67%">
			<button class="btn is-red" type="submit" name="submit">Submit</button>
			<a class="btn is-yellow" style="font-size: 0.8em;" onclick="window.history.back()" name="login">Kembali</a>
		</div>
	</form>
</div>
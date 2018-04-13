<form method="post" action="<?=BASEURL?>?c=a_kategori&m=proses">
	<div class="is-space"></div>
	<h1 class="is-center is-margin">Tambah Kategori</h1>
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
			<label>Nama Kategori : </label>
			<input type="text" name="nama_kategori" placeholder="Masukkan Nama Kategori">
		</div>
		<div style="padding-left:65%">
			<button class="btn is-red" type="submit" name="submit">Submit</button>
			<a class="btn is-yellow" style="font-size: 0.8em;" onclick="window.history.back()" name="login">Kembali</a>
		</div>
	</div>
</form>

<?php include_once('template/header.php'); ?>
<?php 
$kategori = Buku::get_kategori(TRUE);

?>

<div class="body-admin">
	<div class="container">
		<h1>Tambah Buku</h1>
		<hr/>
		<div class="row" style="margin-top: 20px;">
			<form method="POST" action="<?= base_url('action/admin/add_buku.php'); ?>" enctype="multipart/form-data">
				<div class="form-group">
					<label>Judul Buku</label>
					<input class="form-control" type="text" name="judul_buku">
				</div>
				<div class="form-group">
					<label>Nama Penertbit</label>
					<input class="form-control" type="text" name="penerbit">
				</div>
				<div class="form-group">
					<label>Tahun Buku</label>
					<input class="form-control" type="date" name="thn_buku">
				</div>
				<div class="form-group">
					<label>Kategori Buku</label>
					<select name="kategori" class="form-control">
					<?php foreach ($kategori as $key => $kat) : ?>
						<option value="<?= $kat['kategori_ID']; ?>"><?= $kat['kategori_nama']; ?></option>
					<?php endforeach; ?>
					</select>
				</div>
				<div class="form-group">
					<label>Foto</label>
					<input class="form-control" type="file" name="foto_buku" required="true">
				</div>
				<div class="form-group text-center">
					<button class="btn btn-info" type="submit">Tambah</button>
				</div>
			</form>
		</div>
	</div>
</div>

<?php include_once('template/footer.php'); ?>
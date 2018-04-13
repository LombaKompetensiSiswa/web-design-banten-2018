<?php require_once 'layouts/_header-admin.php'; ?>
<section>
	<div class="container">
		<div class="well">
			<div class="well-header">
				<h3>Unggah gambar</h3>
				<hr>
			</div>
			<form action="<?php echo base_url; ?>/process/galeri.php" method="post" enctype="multipart/form-data">
				<div class="well-body">
					<div class="form-group">
						<label>Pilih Gambar</label>
						<input type="file" name="image" placeholder="Masukan nama penulis.." required>
					</div>
				</div>
				<div class="well-footer">
					<button type="submit" class="btn-primary" name="submit">
						Submit
					</button>
				</div>
			</form>
		</div>
	</div>
	<div class="container">
		<div class="well">
			<div class="well-header">
				<h3>Galeri</h3>
				<hr>
			</div>
			<div class="well-body">
				<div class="galeri-grid">
				<?php 
				$images = DB::query('SELECT * FROM images', array());
				foreach ($images as $row) {
				?>
				<div class="img-container">
					<img src="<?php echo base_url; ?>/assets/img/<?php echo $row['name']; ?>">
				</div>
				<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php require_once 'layouts/_footer-admin.php'; ?>
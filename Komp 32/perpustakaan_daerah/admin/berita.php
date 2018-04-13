<?php require_once 'layouts/_header-admin.php'; ?>
<section>
	<div class="container">
		<div class="well">
			<div class="well-header">
				<h3>Form Berita</h3>
				<hr>
			</div>
			<form action="<?php echo base_url; ?>/process/berita.php" method="post" enctype="multipart/form-data">
				<div class="well-body">
					<div class="form-group">
						<label>Judul</label>
						<input type="text" name="title" placeholder="Masukan nama katalog.." required>
					</div>
					<div class="form-group">
						<label>Pilih gambar</label>
						<input type="file" name="image" required>
					</div>
					<div class="form-group">
						<label>Deskripsi</label>
						<textarea name="description" placeholder="Masukan deskripsi berita.." required></textarea>
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
				<h3>Daftar berita</h3>
				<hr>
			</div>
			<div class="well-body">
				<table cellpadding="12px" cellspacing="0">
					<thead>
						<tr>
							<th>Judul</th>
							<th>Deskripsi</th>
							<th>Gambar</th>
							<th>Opsi</th>
						</tr>
					</thead>
					<tbody>
						<?php  
						$news = DB::query('SELECT * FROM news', array());
						foreach ($news as $row) {
						?>
						<tr>
							<td><?php echo $row['title']; ?></td>
							<td><?php echo $row['description']; ?></td>
							<td>
								<img src="<?php echo base_url; ?>/assets/img/<?php echo $row['image']; ?>" width="80px" height="80px">
							</td>
							<td>
								<form action="<?php echo base_url; ?>/process/berita.php" method="post">
									<input type="hidden" name="_method" value="DELETE">
									<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
									<button type="submit" onclick="return confirm('Anda yakin ingin menghapus data ?')">
										Hapus
									</button>
								</form>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>
<?php require_once 'layouts/_footer-admin.php'; ?>
<?php require_once 'layouts/_header-admin.php'; ?>
<?php  
if (isset($_GET['id'])) {
	$bukuRows = DB::query('SELECT * FROM books WHERE id=:id', array(':id' => $_GET['id']))[0];
}
?>
<section>
	<div class="container">
		<div class="well">
			<div class="well-header">
				<h3>Form Buku</h3>
				<hr>
			</div>
			<form action="<?php echo base_url; ?>/process/buku.php" method="post" enctype="multipart/form-data">
				<?php if (isset($_GET['id'])) { ?>
				<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
				<?php } ?>
				<div class="well-body">
					<div class="form-group">
						<label>Kategori / Katalog Buku</label>
						<select name="category_id" required>
							<option disabled selected>-- Pilih Kategori / Katalog Buku --</option>
							<?php 
							$categories = DB::query('SELECT * FROM category', array());
							foreach ($categories as $row) {
							?>
							<option <?php if(isset($_GET['id'])){ echo $bukuRows['category_id'] == $row['id'] ? 'selected' : null;} ?> value="<?php echo $row['id']; ?>"><?php echo ucfirst($row['name']); ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label>Judul Buku</label>
						<input type="text" name="title" placeholder="Masukan judul buku.." value="<?php echo isset($_GET['id']) ? $bukuRows['title'] : null; ?>" required>
					</div>
					<div class="form-group">
						<label>Penulis</label>
						<select name="author" required>
							<option disabled selected>-- Pilih Penulis Buku --</option>
							<?php 
							$authors = DB::query('SELECT * FROM author', array());
							foreach ($authors as $row) {
							?>
							<option <?php if(isset($_GET['id'])){ echo $bukuRows['author_id'] == $row['id'] ? 'selected' : null;} ?> value="<?php echo $row['id']; ?>"><?php echo ucfirst($row['name']); ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label>Deskripsi</label>
						<textarea name="description" placeholder="Masukan deskripsi berita.." required><?php echo isset($_GET['id']) ? $bukuRows['description'] : null; ?></textarea>
					</div>
					<?php if (empty($_GET['id'])) { ?>
					<div class="form-group">
						<label>Pilih gambar</label>
						<input type="file" name="image" required>
					</div>
					<?php } ?>
					<div class="form-group">
						<label>Sinopsis</label>
						<input type="text" name="synopsis" placeholder="Masukan sinopsis buku.." value="<?php echo isset($_GET['id']) ? $bukuRows['synopsis'] : null; ?>"  required>
					</div>
					<div class="form-group">
						<label>Jumlah Buku</label>
						<input type="number" name="qty" min="1" value="<?php echo isset($_GET['id']) ? $bukuRows['qty'] : null; ?>"  required>
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
				<h3>Daftar Buku</h3>
				<hr>
			</div>
			<div class="well-body">
				<table cellpadding="12px" cellspacing="0">
					<thead>
						<tr>
							<th>Judul Buku</th>
							<th>Katalog / Kategori</th>
							<th>Gambar</th>
							<th>Jumlah</th>
							<th>Opsi</th>
						</tr>
					</thead>
					<tbody>
						<?php  
						$categories = DB::query('SELECT books.*, category.name AS category FROM books LEFT OUTER JOIN category ON category.id = books.category_id', array());
						foreach ($categories as $row) {
						?>
						<tr>
							<td><?php echo ucwords($row['title']); ?></td>
							<td><?php echo ucwords($row['category']); ?></td>
							<td>
								<img src="<?php echo base_url; ?>/assets/img/<?php echo $row['image']; ?>" width="80px" height="80px">
							</td>
							<td><?php echo $row['qty']; ?></td>
							<td>
								<form action="<?php echo base_url; ?>/process/buku.php" method="post">
									<input type="hidden" name="_method" value="DELETE">
									<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
									<a href="?id=<?php echo $row['id']; ?>">Edit </a>
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
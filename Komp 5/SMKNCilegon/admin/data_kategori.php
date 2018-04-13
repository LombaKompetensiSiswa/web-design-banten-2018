<?php include_once('template/header.php'); ?>
<?php $kategori = Buku::get_all_kategori(); ?>

<div class="body-admin">
	<div class="container">
		<h1>Data Kategori</h1>
		<hr/>
		<div class="row" style="margin-top: 20px;">
			<div class="col-7">
				<table class="table">
					<thead>
						<tr>
							<th>Nama Kategori</th>
							<th>#</th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($kategori as $key => $kat) : ?>
					<?php $katID = $kat['kategori_ID']; ?>
						<tr>
							<td><?= $kat['kategori_nama'];?></td>
							<td><a href="<?= base_url('admin/hapus/kategori?id='.$katID); ?>" class="btn btn-danger btn-sm">Hapus</a>
					<?php endforeach; ?>
					</tbody>
				</table>
			</div>
			<div class="col-5">
				<div class="form-group">
					<form action="<?= base_url('action/admin/add_kategori.php'); ?>" method="POST">
						<label>Tambah Kategori</label>
						<input class="form-control small" name="nm_kategori">
						<button class="btn btn-success btn-sm">Tambah</button>
					</form>
				</div>
			</div>
			
		</div>
	</div>
</div>

<?php include_once('template/footer.php'); ?>
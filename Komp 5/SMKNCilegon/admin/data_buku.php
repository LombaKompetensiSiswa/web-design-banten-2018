<?php include_once('template/header.php'); ?>
<?php $buku = Buku::get_all_buku(); ?>

<div class="body-admin">
	<div class="container">
		<h2 class="text-muted">Data Buku</h2>
		<hr/>
		<a href="<?= base_url('admin/tambah-buku'); ?>" class="btn btn-success btn-sm">Tambah Buku</a>
	<?php if(@$_GET['delete'] == 'success') : ?>
		<div class="alert bg-success" style="margin-top: 20px;">Buku berhasil dihapus</div>
	<?php elseif(@$_GET['delete'] == 'error') : ?>
		<div class="alert bg-danger" style="margin-top: 20px;">Buku gagal dihapus</div>
	<?php elseif(@$_GET['add'] == 'error') : ?>
		<div class="alert bg-success" style="margin-top: 20px;">Buku gagal ditambah</div>
	<?php elseif(@$_GET['upload'] == 'error') : ?>
		<div class="alert bg-danger" style="margin-top: 20px;">Foto ditambah</div>
	<?php endif; ?>
		<div class="row" style="margin-top: 20px;">
			<table class="table table-bordered">
				<thead>
					<th>Foto Buku</th>
					<th>Judul Buku</th>
					<th>Penerbit Buku</th>
					<th>Tahun Buku</th>
					<th>Kategori Buku</th>
					<th>#</th>
				</thead>
				<tbody>
				<?php foreach ($buku as $key => $b) : ?>
				<?php $img = $b['foto_buku']; ?>
					<tr>
						<td><img src="<?= base_url('assets/img/buku/'.$img); ?>" width="50"></td>
						<td><?= $b['judul_buku']; ?></td>
						<td><?= $b['penerbit_buku']; ?></td>
						<td><?= $b['thn_buku']; ?></td>
						<td><?= $b['kategori_nama']; ?></td>
						<td>
							<a href="<?= base_url('admin/edit/buku?id='.$b['buku_ID']); ?>" class="btn btn-info btn-sm">Edit</a>
							<a href="<?= base_url('admin/hapus/buku?id='.$b['buku_ID']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Data yang sudah dihapus tidak dapat dikembalikan lagi \n Yakin ingin menghapusnya?')">Hapus</a>
						</td>
					</tr>	
				<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php include_once('template/footer.php'); ?>
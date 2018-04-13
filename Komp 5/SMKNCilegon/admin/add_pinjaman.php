<?php include_once('template/header.php'); ?>
<?php $buku = Buku::get_all_buku(); ?>

<div class="body-admin">
	<div class="container">
		<h2>Tambah Pinjaman</h2>
		<hr/>
		<div class="row" style="margin-top: 20px;">
			<form action="<?= base_url('admin/tambah/pinjaman'); ?>" method="POST">
				<div class="form-group">
					<label>Judul Buku</label>
					<select name="id_buku" class="form-control">
					<?php foreach ($buku as $key => $b) : ?>
						<option value="<?= $b['buku_ID']; ?>"><?= $b['judul_buku']; ?></option>
					<?php endforeach; ?>
					</select>
				</div>
				<div class="form-group">
					<label>Nama Peminjam</label>
					<select name="id_user" class="form-control">
					<?php foreach (Admin::get_all_user() as $key => $u) : ?>
						<option value="<?= $u['user_ID']; ?>"><?= $u['user_fullname']; ?></option>
					<?php endforeach; ?>
					</select>
				</div>
				<div class="form-group">
					<label>Batas Peminjaman</label>
					<input class="form-control" type="date" name="bts_pinjam">
				</div>
				<div class="form-group">
					<button class="btn btn-success">Tambah Peminjaman</button>
				</div>
			</form>
		</div>
	</div>
</div>

<?php include_once('template/footer.php'); ?>
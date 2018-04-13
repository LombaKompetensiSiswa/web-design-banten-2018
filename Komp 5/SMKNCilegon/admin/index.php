<?php include_once('template/header.php'); ?>

<div class="body-admin">
	<div class="container">
		<h1 class="text-muted">Dashboard</h1>
		<hr/>
		<div class="alert bg-info">Hello Admin, welcome</div>
		<div class="row" style="margin-top: 20px;">
			<div class="col-4 text-center">
				<div class="thumbnail pad-1 bg-primary text-light">
					<h3><?= Admin::jumlah_row('tb_buku'); ?></h3>
					<label><small>Total Buku</small></label>
				</div>
			</div>
			<div class="col-4 text-center">
				<div class="thumbnail pad-1 bg-danger text-light">
					<h3><?= Admin::jumlah_row('tb_pinjaman'); ?></h3>
					<label><small>Total Pinjaman</small></label>
				</div>
			</div>
			<div class="col-4 text-center">
				<div class="thumbnail pad-1 bg-success text-light">
					<h3><?= Admin::jumlah_row('tb_user'); ?></h3>
					<label><small>Total Anggota</small></label>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include_once('template/footer.php'); ?>
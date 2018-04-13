<?php include_once('template/header.php'); ?>
<?php if(is_login()) redirect(); ?>

<div style="margin-top: 50px;margin-left: 100px; margin-right: 100px;">
	<div class="container">
		<div class="row">
			<div class="col-12">
			<?php if(@$_GET['daftar'] == 'success') : ?>
				<div class="alert bg-success">Pendaftaran berhasil, silahkan tunggu Admin untuk konfirmasi akun</div>
			<?php elseif(@$_GET['login'] == 'error'): ?>
				<div class="alert bg-danger">Login gagal, pastikan username dan password benar dan pastikan bahwa akun sudah dikonfirmasi oleh Admin.</div>
			<?php endif; ?>
				<h2 class="text-muted">Masuk Akun</h2>
				<hr/>
				<form method="POST" action="<?= base_url('action/user/authLogin.php'); ?>">
					<div class="form-group">
						<label>Username</label>
						<input type="text" class="form-control" name="uName" placeholder="Username..">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control" name="uPass" placeholder="Password..">
					</div>
					<div class="form-group">
						<button class="btn btn-success">Masuk</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php include_once('template/footer.php'); ?>
<?php include_once('template/header.php'); ?>
<?php if(is_login()) redirect(); ?>

<div style="margin-top: 50px;">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="text-muted">Daftar Member</h2>
				<hr/>
				<form method="POST" action="<?= base_url('action/user/add_user.php'); ?>">
					<div class="form-group">
						<label>Nama Lengkap</label>
						<input type="text" class="form-control" name="fullname" placeholder="Nama.." required>
					</div>
					<div class="form-group">
						<label>Username</label>
						<input type="text" class="form-control" name="uName" placeholder="Username.." required>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" name="uEmail " placeholder="Email.." required>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control" name="password" placeholder="username" required>
					</div>
					<div class="form-group">
						<label>Konfirmasi Password</label>
						<input type="password" class="form-control" name="cpassword" placeholder="Konfirmasi Password" required>
					</div>
					<div class="form-group">
						<button class="btn btn-primary" style="submit">Daftar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php include_once('template/footer.php'); ?>
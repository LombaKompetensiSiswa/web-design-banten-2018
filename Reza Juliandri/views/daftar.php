<form method="post" action="<?=BASEURL?>?c=daftar&m=proses">
	<div class="is-space"></div>
	<h1 class="is-center is-margin">Halaman Pendaftaran</h1>
	<?php if(isset($_SESSION['flash'])): ?>
		<?php if($_SESSION['flash_type'] == "error"): ?>
			<div class="alert is-yellow">
				<p><?=flash()?></p>
			</div>
		<?php else: ?>
			<div class="alert is-red">
				<p><?=flash()?></p>
			</div>
		<?php endif; ?>
	<?php endif; ?>
	<p style="margin-left: 10px;font-weight: bold;font-size: 0.9rem;color : rgba(0,0,0,0.7)">Mohon mengisi sesuai dengan data diri kamu.</p>
	<div style="width:70%">
		<div class="form-group">
			<label>Nama Lengkap: </label>
			<input type="text" name="nama" placeholder="Masukkan Nama Lengkap">
		</div>
		<div class="form-group">
			<label>Username : </label>
			<input type="text" name="username" placeholder="Masukkan Username">
		</div>
		<div class="form-group">
			<label>Password : </label>
			<input type="password" name="password" placeholder="Masukkan Password">
		</div>
		<div class="form-group">
			<label>Email : </label>
			<input type="email" name="email" placeholder="Masukkan Email">
		</div>
		<div class="form-group">
			<label>Tanggal Lahir : </label>
			<input type="date" name="tanggal_lahir" placeholder="DD/MM/YYYY">
		</div>
		<div class="form-group">
			<label>Alamat : </label>
			<textarea name="alamat" placeholder="Masukkan Alamat"></textarea>
		</div>
		<div style="padding-left:76%">
			<button class="btn is-red" type="submit" name="login">Daftar</button>
		</div>
	</div>
</form>

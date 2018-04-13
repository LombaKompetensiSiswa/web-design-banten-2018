<form method="post" action="<?=BASEURL?>?c=a_anggota&m=update&id=<?=$_GET['id']?>">
	<div class="is-space"></div>
	<h1 class="is-center is-margin">Edit Anggota</h1>
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
	<p style="margin-left: 10px;font-weight: bold;font-size: 0.9rem;color : rgba(0,0,0,0.7)">Mohon mengisi sesuai dengan data anggota.</p>
	<div style="width:70%">
		<div class="form-group">
			<label>Nama Lengkap: </label>
			<input type="text" name="nama" placeholder="Masukkan Nama Lengkap" value="<?=$anggota->nama?>">
		</div>
		<div class="form-group">
			<label>Username : </label>
			<input type="text" placeholder="Masukkan Username" readonly="" value="<?=$anggota->username?>">
		</div>
		<div class="form-group">
			<label>Password : </label>
			<input type="password" name="password" placeholder="Masukkan Password">
		</div>
		<div class="form-group">
			<label>Email : </label>
			<input type="email"  placeholder="Masukkan Email" readonly="" value="<?=$anggota->email?>">
		</div>
		<div class="form-group">
			<label>Tanggal Lahir :</label>
			<input type="date" name="tanggal_lahir" placeholder="DD/MM/YYYY" value="<?=$anggota->tanggal_lahir?>">
		</div>
		<div class="form-group">
			<label>Alamat : </label>
			<textarea name="alamat" placeholder="Masukkan Alamat"><?=$anggota->alamat?></textarea>
		</div>
		<div class="form-group">
			<label>Role : </label>
			<select name="role">
				<option value="1" <?=($anggota->role == 1)?"selected":""; ?> >User</option>
				<option value="3" <?=($anggota->role == 3)?"selected":""; ?>>Admin</option>
			</select>
		</div>
		<div style="padding-left:67%">
			<button class="btn is-red" type="submit">Submit</button>
			<a class="btn is-yellow" style="font-size: 0.8em;" onclick="window.history.back()" name="login">Kembali</a>
		</div>
	</div>
</form>

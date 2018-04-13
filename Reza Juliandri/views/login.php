<form method="post" action="<?=BASEURL?>?c=login&m=proses">
	<div class="is-space"></div>
	<h1 class="is-center is-margin">Halaman Login</h1>
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
	<div style="width: 300px; margin: 0 auto">
		<div class="form-group">
			<label>Username: </label>
			<input type="text" name="username" placeholder="Masukkan Username." required>
		</div>
		<div class="form-group">
			<label>Password: </label>
			<input type="password" name="password" placeholder="Masukkan Password." required>
		</div>
		<div style="padding-left: 220px;">
			<button class="btn is-red" type="submit" name="login">Login</button>
		</div>
	</div>
</form>

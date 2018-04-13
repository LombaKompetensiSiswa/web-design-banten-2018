<form action="<?php echo base_url; ?>/process/auth.php" method="post">
<div id="sidebar-login" class="sidebar">
	<div class="sidebar-header">
		<h3>Login</h3>
		<a href="javascript:void(0)" onclick="loginClose()" class="close">X</a>
	</div>
	<div class="sidebar-body">
		<form action="<?php echo base_url; ?>/process/auth.php" method="post">
			<div class="form-group">
				<label>Username</label>
				<div class="custom-input">
					<input type="text" name="name" required>
				</div>	
			</div>
			<div class="form-group">
				<label>Password</label>
				<div class="custom-input">
					<input type="password" name="password" required>
				</div>	
			</div>
		</form>
	</div>
	<div class="sidebar-footer">
		<div>
			<button type="submit" name="login" class="btn-login"> 
				LOGIN
			</button>
		</div>
		<div>
			<a href="javascript:void(0)" class="btn-register" onclick="regOpen()">
				REGISTER
			</a>
		</div>
	</div>
</div>
</form>

<form action="<?php echo base_url; ?>/process/auth.php" method="post">
<div id="sidebar-register" class="sidebar">
	<div class="sidebar-header">
		<h3>REGISTER</h3>
		<a href="javascript:void(0)" onclick="regClose()" class="close">X</a>
	</div>
	<div class="sidebar-body">
		<div class="form-group">
			<label>Username</label>
			<div class="custom-input">
				<input type="text" name="name" required>
			</div>	
		</div>
		<div class="form-group">
			<label>Password</label>
			<div class="custom-input">
				<input type="password" name="password" required>
			</div>	
		</div>
	</div>
	<div class="sidebar-footer">
		<div>
			<p>Sudah punya akun ? <a href="javascript:void(0)" onclick="loginOpen()" style="color: #000">yup.</a></p>
			<button type="submit" name="register" class="btn-login"> 
				REGISTER
			</button>
		</div>
	</div>
</div>
</form>

<div id="sidebar-video" class="sidebar-fullscreen">
	<div class="sidebar-header">
		<h3>VIDEO CARA MEMINJAM BUKU DI "PERPUSTAKAAN DAERAH"</h3>
		<a href="javascript:void(0)" onclick="vidClose()" class="close">X</a>
	</div>
	<div class="sidebar-body">
		<div class="video-container"> 
			<!-- <img src="<?php echo base_url; ?>/assets/img/vid.png"> -->
			<video src="<?php echo base_url; ?>/assets/vid/perpustakaan.mp4" controls />
		</div>
	</div>
	<div class="sidebar-footer">
		<div>
			<a href="javascript:void(0)" onclick="vidClose()">TUTUP</a>
		</div>
	</div>
</div>
<div id="sidebar-nav">
	<div class="sidebar-header">
		<h3>MENU</h3>
		<a href="javascript:void(0)" onclick="sideNavClose()" class="close">X</a>
	</div>
	<div class="sidebar-body">
		<ul>
			<li><a href="<?php echo base_url; ?>">Home</a></li>
			<li><a href="galeri.php">Galeri</a></li>
			<li><a href="daftar-buku.php">Daftar Buku</a></li>
			<?php if(empty($_SESSION['username'])){ ?>
			<li><a href="javascript:void(0)" onclick="loginOpen()">Login</a></li>
			<?php }else{ ?>
			<li><a href="profile.php">Halo <b><?php echo strtoupper($_SESSION['username']); ?></b></a></li>
			<li><a href="<?php echo base_url; ?>/process/auth.php?act=logout">LOGOUT</a></li>
			<?php } ?>
			<?php  
			if (isset($_SESSION['username'])) {
				$cek_role = DB::query('SELECT * FROM users WHERE name=:name', array(':name' => $_SESSION['username']))[0]['role'];
				if ($cek_role == 'admin') {
			?>
			<li><a href="<?php echo base_url; ?>/admin/">Administrator</a></li>
			<?php 			
					}	
			}
			?>
		</ul>
	</div>
</div>
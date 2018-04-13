<?php require(__DIR__.'../../classes/DB.php'); ?>
<?php 
session_start();
if (isset($_SESSION['username'])) {
	header('location:'.base_url.'/admin/');
} 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Login | Perpustakaan Daerah</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url;?>/assets/css/admin-login.css">
</head>
<body>
	<div class="container">
		<div class="card">
			<div class="card-header">
				<h1>Login || Administrator</h1>
			</div>
			<div class="card-body">
				<form action="<?php echo base_url; ?>/process/auth.php" method="post">
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="name" placeholder="Username anda.." required>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" placeholder="Password anda.." requirede>
					</div>
					<div class="form-group">
						<div>
							<button type="submit" name="login">
								LOGIN
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>	
</body>
</html>
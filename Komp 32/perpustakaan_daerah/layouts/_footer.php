<footer>
	<div class="content-footer">
		<div>
			<h2>TENTANG KAMI</h2>
			<hr>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
		</div>
		<div>
			<h2>IKUTI KAMI</h2>
			<ul>
				<li><a href="#">
					<img src="<?php echo base_url; ?>/assets/img/tw.png">
				</a></li>
				<li><a href="#">
					<img src="<?php echo base_url; ?>/assets/img/ig.png">
				</a></li>
				<li><a href="#">
					<img src="<?php echo base_url; ?>/assets/img/fb.png">
				</a></li>
			</ul>
		</div>
	</div>
	<p style="text-align: center;">&copy; 2018 Muhza</p>
</footer>
<div id="overlay"></div>
<?php 
if(isset($_SESSION['msg'])){ 
	$message = $_SESSION['msg'];
?>
<div class="alert alert-<?php echo $message['type']; ?> active">
	<div class="alert-header">
		<h3><?php echo strtoupper($message['type']); ?></h3>
	</div>
	<div class="alert-body">
		<p><?php echo $message['msg']; ?></p>
	</div>
</div>
<?php 
	unset($_SESSION['msg']);
} 
?>
<script type="text/javascript">
	const loginSidebar = document.getElementById('sidebar-login');
	const regSidebar = document.getElementById('sidebar-register');
	const vidSidebar = document.getElementById('sidebar-video');
	const overlay = document.getElementById('overlay');
	const sideNav = document.getElementById('sidebar-nav');

	(function(){
		overlay.addEventListener('click', function(){
			overlayClose();
			loginClose();
			regClose();
			sideNavClose();
		});
		setTimeout(function(){
			const alertMsg = document.querySelector('.alert');
			alertMsg.classList.remove('active');
		}, 4000);
	})();
</script>
<script src="<?php echo base_url; ?>/assets/js/main.js"></script>
	</body>
</html>
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
	(function(){
		setTimeout(function(){
			const alertMsg = document.querySelector('.alert');
			alertMsg.classList.remove('active');
		}, 2000);
	})();
</script>
	</body>
</html>
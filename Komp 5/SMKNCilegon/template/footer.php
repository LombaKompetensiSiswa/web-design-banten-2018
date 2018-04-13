
<div class="footer">
	<span>Copyright &copy; 2018 <?= get_config('app_name'); ?></span><br/>
	<div style="inline-block;">
		<a href="//fb.me/"><img src="<?= base_url('assets/img/sosmed/facebook.png'); ?>" height="35"></a>
		<a href="//instagram.com"><img src="<?= base_url('assets/img/sosmed/ig.png'); ?>" height="35"></a>
	</div>
</div>
<script>
var app_url = location.href;
var navbar = document.querySelector('ul.navbar');

function collapseNav(t) {
	var navbar = document.getElementsByClassName('navbar');
	var ico = t;
	if(ico.getAttribute('data-collapse') == '0') {
		navbar[0].classList.add('responsive');
		ico.setAttribute('data-collapse', '1');
		
	} else {
		navbar[0].classList.remove('responsive');
		ico.setAttribute('data-collapse', '0');
		console.log(ico.getAttribute('data-collapse'));
	}	
}
//alertRemove('.alert');
function alertRemove(t) {
	setTimeout(function() {
		document.querySelector(t).remove();
	}, 2000);
}

switch (app_url) {
	case "<?= base_url(); ?>":
		document.querySelector('li#navHome a').classList.add('active');
		break;
	case "<?= base_url('login'); ?>":
		document.querySelector('li#navLogin a').classList.add('active');
		break;
	case "<?= base_url('register'); ?>":
		document.querySelector('li#navRegs a').classList.add('active');
		break;
	case "<?= base_url('daftar_buku'); ?>":
		document.querySelector('li#navListBook a').classList.add('active');
		break;
	
}
</script>
</body>
</html>
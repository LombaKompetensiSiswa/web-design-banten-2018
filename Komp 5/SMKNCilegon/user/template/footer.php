<script type="text/javascript">
var app_url = location.href	;
var navbar = document.querySelector('ul.navbar');

switch (app_url) {
	case "<?= base_url('user/'); ?>":
		document.querySelector('li#navDash a').classList.add('active');
		break;
	case "<?= base_url('user/data_pinjaman'); ?>":
		document.querySelector('li#navPinjm a').classList.add('active');
		break;
	
}
</script>
</body>
</html>
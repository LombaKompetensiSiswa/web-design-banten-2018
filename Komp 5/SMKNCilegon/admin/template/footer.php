<script type="text/javascript">
var app_url = location.href	;
var navbar = document.querySelector('ul.navbar');

switch (app_url) {
	case "<?= base_url('admin/'); ?>":
		document.querySelector('li#navDash a').classList.add('active');
		break;
	case "<?= base_url('admin/data-pinjaman'); ?>":
	case "<?= base_url('admin/tambah-pinjaman'); ?>":
		document.querySelector('li#navPinjm a').classList.add('active');
		break;
	case "<?= base_url('admin/anggota'); ?>":
	case "<?= base_url('admin/add_anggota.php'); ?>":
		document.querySelector('li#navMem a').classList.add('active');
		break;
	case "<?= base_url('admin/buku'); ?>":
	case "<?= base_url('admin/tambah-buku'); ?>":
		document.querySelector('li#navListBook a').classList.add('active');
		break;
	case "<?= base_url('admin/kategori'); ?>":
		document.querySelector('li#navKat a').classList.add('active');
		break;
	
}
</script>
</body>
</html>
<?php

if (!isset($_GET['isi'])) {
	?><script type="text/javascript">document.location.href='?isi=';</script><?php
}

switch ($_GET['isi']) {
	case '':
		include("../assets/php/page/dashboard.php");
		break;
	
	case 'buku':
		include("../assets/php/page/buku.php");
		break;
	
	case 'proses_buku':
		include("../assets/php/page/proses_buku.php");
		break;

	case 'edit_buku':
		include("../assets/php/page/edit_buku.php");
		break;
	
	case 'tambah_buku':
		include("../assets/php/page/tambah_buku.php");
		break;
	
	case 'anggota':
		include("../assets/php/page/anggota.php");
		break;
	
	case 'peminjaman':
		include("../assets/php/page/peminjaman.php");
		break;
	
	case 'logout':
		include("../assets/php/page/logout.php");
		break;
	
	default:
		include("../assets/php/page/dashboard.php");
		break;
}
?>
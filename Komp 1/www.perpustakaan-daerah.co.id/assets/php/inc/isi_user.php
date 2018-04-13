<?php

if (!isset($_GET['isi'])) {
	?><script type="text/javascript">document.location.href='?isi=buku_user';</script><?php
}

switch ($_GET['isi']) {
	case '':
		include("../assets/php/page/buku_user.php");
		break;
	
	case 'buku_user':
		include("../assets/php/page/buku_user.php");
		break;
		
	case 'cari_buku':
		include("../assets/php/page/cari_buku.php");
		break;
		
	case 'peminjaman_user':
		include("../assets/php/page/peminjaman_user.php");
		break;
	
	case 'pinjam':
		include("../assets/php/page/pinjam.php");
		break;
	
	case 'proses_buku':
		include("../assets/php/page/proses_buku.php");
		break;
	
	case 'logout':
		include("../assets/php/page/logout.php");
		break;
	
	default:
		include("../assets/php/page/buku_user.php");
		break;
}
?>
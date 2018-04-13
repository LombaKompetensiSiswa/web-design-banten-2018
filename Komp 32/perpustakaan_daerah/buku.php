<?php require_once('layouts/_header.php'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url; ?>/assets/css/buku.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url; ?>/assets/css/buku-page.css">

<style type="text/css">
	#search-navbar{
		visibility: hidden;
	}
</style>
<section class="hero">
	<img src="<?php echo base_url; ?>/assets/img/hero-1.jpg">
	<div class="hero-title">
		<h1><i>Cari Buku</i></h1>
		<form action="daftar-buku.php">
			<div class="custom-search">
				<input type="text" name="q">
			</div>
			<button type="submit">
				CARI
			</button>
		</form>
	</div>
	<a href="daftar-buku.php" id="daftar-buku">
		LIHAT DAFTAR BUKU
	</a>
</section>
<?php if (isset($_GET['b_id'])) { ?>
<?php  
$buku = DB::query('SELECT books.*, author.name AS author, category.name AS category FROM books LEFT OUTER JOIN author ON author.id = books.author_id LEFT OUTER JOIN category ON category.id = books.category_id WHERE books.id=:id', array(':id' => $_GET['b_id']))[0];
?>
<div style="position: relative;"><h2 id="katalog-title"><i><?php echo strtoupper($buku['category']); ?></i></h2></div>
<section class="buku-container">
	<div class="buku-deskripsi">
		<h3>Deskripsi</h3>
		<hr>
		<p><?php echo $buku['description']; ?></p>
		<br>
		<h3>Sinopis</h3>
		<hr>
		<p><?php echo $buku['synopsis']; ?></p>
	</div>
	<div class="buku-gambar">
		<img src="<?php echo base_url; ?>/assets/img/<?php echo $buku['image']; ?>">
	</div>
	<div class="buku-proses">
		<h2><?php echo strtoupper($buku['title']); ?> </h2>
		<p>Penulis : <b><?php echo ucwords($buku['author']); ?></b></p>
		<hr>
		<div class="buku-order">
			<?php  
			$jumlahBukuDiTrans = DB::query('SELECT COUNT(*) FROM transaction WHERE parent_book_id = :parent AND status = 1', array(':parent' => $buku['id']))[0]['COUNT(*)'];
			?>
			<h3>Jumlah : <?php echo $buku['qty'] - $jumlahBukuDiTrans; ?></h3>
			<hr>
			<?php if (($buku['qty'] - $jumlahBukuDiTrans) > 0) { ?>
			<?php if (isset($_SESSION['username'])) { ?>
			<h3>Buku yang tersedia :</h3>
			<table width="100%">
				<thead>
					<tr>
						<th>Kode Buku</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php  
					$books = DB::query('SELECT * FROM book_unique_id WHERE book_id=:id', array(':id'=>$_GET['b_id']));
					foreach ($books as $row) {
					$cek = DB::query('SELECT COUNT(*) FROM transaction WHERE book_id = :parent AND status = 1', array(':parent' => $row['id']))[0]['COUNT(*)'];
					if($cek == 0){
					?>
					<tr>
						<td style="text-align: center;"><?php echo $row['id']; ?></td>
						<td>
							<form action="<?php echo base_url; ?>/process/buku.php" method="post">
								<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
								<input type="hidden" name="id_buku" value="<?php echo $buku['id']; ?>">
								<button type="submit" name="pinjam" class="btn-pinjam-s">
									Pinjam
								</button>
							</form>
						</td>
					</tr>
					<?php } } ?>
				</tbody>
			</table>
			<?php }else{ ?>
			<h3>Mohon login terlebih dahulu. <a href="javascript:void(0)" onclick="loginOpen()">Login.</a></h3>
			<?php } ?>
			<?php }else{ ?>
			<h3>Buku sedang tidak tersedia.</h3>
			<?php } ?>
		</div>
	</div>
</section>
<?php } ?>
<?php require_once('layouts/_sidebar.php'); ?>
<?php require_once('layouts/_footer.php'); ?>

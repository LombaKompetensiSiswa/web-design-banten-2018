<?php include_once('template/header.php'); ?>
<?php

if(@$_GET['s']) {
	$cariJudul = $_GET['s'];
	$buku = Buku::get_all_buku($cariJudul);
} elseif(@$_GET['kat']) {
	$buku = Buku::get_all_buku_by_kategori($_GET['kat']);
} else {
	$buku = Buku::get_all_buku();
}

?>

<div style="margin-top: 50px;">
	<div class="container">
		<h3>Daftar Buku</h3>
		<div class="row">
			<div>
				<form method="GET">
					<label>Cari Buku</label>
					<input type="" class="form-control" name="s">
					<button class="btn btn-info float-right">Cari</button>
				</form>
			</div>
		<div class="col-2">
			<div class="thumbnail">
				<ul class="katalog-1">
				</ul>
			</div>
		</div>
		<?php foreach ($buku as $key => $b) : ?>
		<?php $img = $b['foto_buku']; ?>
			<div class="col-2">
				<div class="thumbnail" style="height: 100%;display: block;">
					<img src="<?= base_url('assets/img/buku/'.$img); ?>" class="img-responsive">
					<h4><?= $b['judul_buku']; ?></h4>
					<small class="badge bg-primary"><?= $b['kategori_nama']; ?></small>
					<button class="btn btn-info btn-sm float-right">Pinjam Buku Ini</button>
				</div>
			</div>
		<?php endforeach; ?>
		</div>
	</div>
</div>


<?php include_once('template/footer.php'); ?>
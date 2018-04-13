<?php include_once('template/header.php'); ?>
<?php $allPinjaman = Buku::get_all_pinjaman(); ?>

<div class="body-admin">
	<div class="container">
		<h2 class="text-muted">Pinjaman Pengguna</h2>
		<hr/>
		<a href="<?= base_url('admin/tambah-pinjaman'); ?>" class="btn btn-success btn-sm">Buat Peminjaman</a>
		<div class="row" style="margin-top: 20px;">
			<table class="table">
				<thead>
					<th>#</th>
					<th>Judul Buku</th>
					<th>Tanggal Peminjaman</th>
					<th>Batas Peminjaman</th>
					<th>Nama Peminjam</th>
					<th>Status</th>
					<th>#</th>
				</thead>
				<tbody>
			<?php foreach ($allPinjaman as $key => $p) : ?>
			<?php 
				$img = base_url("assets/img/buku/$p[foto_buku]");
				$stat = ($p['status_pinjam'] == 'pinjam') ? '<span class="badge bg-warning">Dipinjam</span>' : '<span class="badge bg-success">Dikembalikan</span>'; 
				$updateLink = base_url("admin/update/statuspinjam?id_pinjam=$p[pinjaman_ID]&uID=$p[user_ID]");
				$btnKembali = ($p['status_pinjam'] == 'pinjam') ? '<a href="'.$updateLink.'" class="btn btn-sm btn-success">Kembalikan</a>' : '';
			?>
					<tr>
						<td><img src="<?= $img; ?>" height="50"></td>
						<td><?= $p['judul_buku']; ?></td>
						<td><?= date('d, M Y', strtotime($p['tgl_pinjaman'])); ?></td>
						<td><?= date('d, M Y', strtotime($p['bts_pinjaman'])); ?></td>
						<td class="text-center"><?= $p['user_fullname']; ?> </td>
						<td class="text-center"><?= $stat; ?></td>
						<td class="text-center"><?= $btnKembali; ?></td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		</div>

	</div>
</div>

<?php include_once('template/footer.php'); ?>
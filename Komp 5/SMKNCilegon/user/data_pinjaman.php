<?php include_once('template/header.php'); ?>
<?php @$pinjaman = Buku::get_pinjaman($_user->user_ID); ?>

<div class="body-admin">
	<div class="container">
		<h1 class="text-muted">Data Pinjaman</h1>
		<hr/>
		<div class="row" style="margin-top: 20px;">
			<div class="table-responsive">
				<table colsspacing="0" class="table table-bordered">
					<tr>
						<th>#</th>
						<th>Judul Buku</th>
						<th>Tanggal Peminjaman</th>
						<th>Batas Peminjaman</th>
						<th>Status</th>
					</tr>
					<tbody>
			<?php if(!empty($pinjaman)) : ?>
					<?php foreach (@$pinjaman as $key => $p): ?>
					<?php $img = base_url('assets/img/buku/'.$p['foto_buku']); ?>
					<?php $stat = ($p['status_pinjam'] == 'pinjam') ? '<span class="badge bg-primary">Dipinjam</span>' : '<span class="badge bg-success">Dikembalikan</span>'; ?>
						<tr>
							<td><img src="<?= $img; ?>" width="50"></td>
							<td><?= $p['judul_buku']; ?></td>
							<td><?= date('d M, Y', strtotime($p['tgl_pinjaman'])); ?></td>
							<td class="text-center"><?= date('d M, Y', strtotime($p['bts_pinjaman'])); ?></td>
							<td class="text-center"><?= $stat; ?></td>
						</tr>
					<?php endforeach; ?>

			<?php endif; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<?php include_once('template/footer.php'); ?>
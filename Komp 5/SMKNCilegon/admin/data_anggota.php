<?php include_once('template/header.php'); ?>
<?php
	$member = User::get_all_user(); 
	$jumlah_terima = DB::from('tb_user')->where('status', 'diterima')->get()->num_rows();
	$jumlah_pending = DB::from('tb_user')->where('status', 'pending')->get()->num_rows();
?>

<div class="body-admin">
	<div class="container">
		<h2 class="text-muted">Data Anggota</h2>
		<hr/>
		<div class="row" style="margin-top: 20px;padding-bottom: 50px;">
			<div class="col-4 text-center">
				<div class="thumbnail pad-1 bg-primary text-light">
					<h3><?= $jumlah_terima; ?></h3>
					<label><small>Total Anggota Diterima</small></label>
				</div>
			</div>
			<div class="col-4 text-center">
				<div class="thumbnail pad-1 bg-danger text-light">
					<h3><?= $jumlah_pending; ?></h3>
					<label><small>Total Anggota Belum Diterima</small></label>
				</div>
			</div>
		</div>
			<table class="table">
				<thead>
					<th>ID</th>
					<th>Nama Anggota</th>
					<th>Username</th>
					<th>Tingkat</th>
					<th>Status</th>
					<th>#</th>
					<th>#</th>
				</thead>
				<tbody>
				<?php foreach ($member as $key => $memb) : ?>
				<?php
					$level = ($memb['user_level'] != '1') ? 
						'<span class="badge bg-secondary text-dark">User</span>' : 
						'<span class="badge bg-success">Admin</span>';
						
					$status = ($memb['status'] != 'diterima') ? '<span class="badge bg-danger">Pending</span>' : '<span class="badge bg-success">Diterima</span>';
					$updateLink = base_url('admin/update/statususer?id='.$memb['user_ID']);
					$btn_terima = ($memb['status'] == 'pending') ? '<a href="'.$updateLink.'" class="btn btn-success btn-sm" onclick="return confirm(`Konfirmasi pengguna?`)">Konfirmasi</a>' : '';
				?>
					<tr>
						<td><?= $memb['user_ID']; ?></td>
						<td><?= $memb['user_fullname']; ?></td>
						<td><?= $memb['user_name']; ?></td>
						<td class="text-center"><?= $level; ?></td>
						<td class="text-center"><?= $status; ?></td>
						<td class="text-center">
							<a href="#" class="btn btn-info btn-sm">Edit</a>
							<a href="#" class="btn btn-danger btn-sm" onclick="return confirm(`Data pengguna yang sudah dihapus tidak dapat dikembalikan \n Anda yakin ingin hapus?`)">Hapus</a>
						</td>
						<td class="text-center">
							<?= $btn_terima; ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php include_once('template/footer.php'); ?>
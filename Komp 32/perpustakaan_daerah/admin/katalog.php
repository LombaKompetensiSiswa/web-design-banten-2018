<?php require_once 'layouts/_header-admin.php'; ?>
<section>
	<div class="container">
		<div class="well">
			<div class="well-header">
				<h3>Form Katalog</h3>
				<hr>
			</div>
			<form action="<?php echo base_url; ?>/process/katalog.php" method="post">
				<div class="well-body">
					<div class="form-group">
						<label>Nama</label>
						<input type="text" name="name" placeholder="Masukan nama katalog.." required>
					</div>
				</div>
				<div class="well-footer">
					<button type="submit" class="btn-primary" name="submit">
						Submit
					</button>
				</div>
			</form>
		</div>
	</div>
	<div class="container">
		<div class="well">
			<div class="well-header">
				<h3>Daftar Katalog</h3>
				<hr>
			</div>
			<div class="well-body">
				<table cellpadding="12px" cellspacing="0">
					<thead>
						<tr>
							<th>Nama Katalog</th>
							<th>Opsi</th>
						</tr>
					</thead>
					<tbody>
						<?php  
						$categories = DB::query('SELECT * FROM category', array());
						foreach ($categories as $row) {
						?>
						<tr>
							<td><?php echo ucwords($row['name']); ?></td>
							<td>
								<form action="<?php echo base_url; ?>/process/katalog.php" method="post">
									<input type="hidden" name="_method" value="DELETE">
									<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
									<button type="submit" onclick="return confirm('Anda yakin ingin menghapus data ?')">
										Hapus
									</button>
								</form>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>
<?php require_once 'layouts/_footer-admin.php'; ?>
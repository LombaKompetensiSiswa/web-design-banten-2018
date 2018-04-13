<?php require_once 'layouts/_header-admin.php'; ?>
<section>
	<div class="container">
		<div class="well">
			<div class="well-header">
				<h3>Form Pengembalian Buku</h3>
				<hr>
			</div>
			<form action="<?php echo base_url; ?>/process/pengembalian.php" method="post">
				<div class="well-body">
					<div class="form-group">
						<label>Kode Buku</label>
						<input type="text" name="kode" placeholder="Masukan kode buku.." required>
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
</section>
<?php require_once 'layouts/_footer-admin.php'; ?>
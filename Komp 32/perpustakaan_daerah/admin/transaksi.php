<?php require_once 'layouts/_header-admin.php'; ?>
<section>
	<div class="container">
		<div class="well">
			<div class="well-header">
				<h3>Daftar Transaksi</h3>
				<hr>
			</div>
			<div class="well-body">
				<table cellpadding="12px" cellspacing="0">
					<thead>
						<tr>
							<th>Kode Buku</th>
							<th>Nama User</th>
							<th>Judul Buku</th>
							<th>Status Buku</th>
						</tr>
					</thead>
					<tbody>
						<?php  
						$transactions = DB::query('SELECT books.*, transaction.book_id AS kode_buku, transaction.status AS status, author.name AS author, users.name AS username FROM transaction LEFT OUTER JOIN books ON books.id = transaction.parent_book_id LEFT OUTER JOIN author ON author.id = books.author_id LEFT OUTER JOIN users ON users.id = transaction.user_id ORDER BY status DESC', array());
						foreach ($transactions as $row) {
						?>
						<tr>
							<td><?php echo $row['kode_buku']; ?></td>
							<td><?php echo ucwords($row['username']); ?></td>
							<td><?php echo ucwords($row['title']); ?></td>
							<td>
								<?php if ($row['status'] == 0) { ?>
								<span style="color: green;">Sudah dikembalikan</span>
								<?php }else{ ?>
								<span style="color: orange;">Sedang dipinjam</span>
								<?php } ?>
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
<?php require_once('layouts/_header.php'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url; ?>/assets/css/profile.css">
<style type="text/css">
	#search-navbar{
		visibility: hidden;
	}
	.navbar{
		background-color: #000;
		position: relative;
	}
</style>
<section class="profile" style="padding: 40px;">
	<h1>Daftar Buku yang dipinjam :</h1>
	<table border="1px">
		<thead>
			<tr>
				<th>Kode Buku</th>
				<th>Judul buku</th>
				<th>Penulis</th>
				<th>Gambar</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
			<?php  
			$userid = DB::query('SELECT * FROM users WHERE name=:name', array(':name' => $_SESSION['username']))[0]['id'];
			$books = DB::query('SELECT books.*, transaction.book_id AS kode_buku, transaction.status AS status, author.name AS author FROM transaction LEFT OUTER JOIN books ON books.id = transaction.parent_book_id LEFT OUTER JOIN author ON author.id = books.author_id WHERE transaction.user_id =:userid ORDER BY status DESC', array(':userid' => $userid));
			foreach ($books as $row) {
			?>
			<tr>
				<td><?php echo $row['kode_buku']; ?></td>
				<td><?php echo $row['title']; ?></td>
				<td><?php echo $row['author']; ?></td>
				<td style="text-align: center;">
					<img src="<?php echo base_url; ?>/assets/img/<?php echo $row['image']; ?>" width="80px" height="80px">
				</td>
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
</section>
<?php require_once('layouts/_sidebar.php'); ?>
<?php require_once('layouts/_footer.php'); ?>

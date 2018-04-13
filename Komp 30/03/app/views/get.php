<?php $this->view('components/head'); ?>
<?php $this->view('components/nav'); ?>
<link rel="stylesheet" type="text/css" href="<?= url() ?>public/stylesheets/admin.css">
<div class="container">
	<main class="papper" style="margin-bottom:100px;">
		<h4>BUKU PINJAMAN ANDA</h4>
		<hr>
		<table>
			<?php $_SESSION['id']; ?>
			<?php $d = $this->db->query("SELECT books.title AS title, books.slug AS slug, books.file AS file, books.penerbit AS penerbit FROM books,users,pinjam WHERE users.id=pinjam.users_id AND books.id=pinjam.books_id"); ?>
			<thead>
				<th>Image</th>
				<th>Nama Buku</th>
				<th>Penerbit</th>
			</thead>
			<?php foreach($pinjam as $data): ?>
			<tbody>
				<td><img src="<?= url() ?>public/uploads/<?= $data->slug . '.'. $data->file ?>" width="100px"></td>
				<td><?= $data->title ?></td>
				<td><?= $data->penerbit ?></td>
			</tbody>
		<?php endforeach; ?>
		</table>
	</main>
</div>

<!-- <?php $this->view('components/aside'); ?>
<?php $this->view('components/footer'); ?> -->
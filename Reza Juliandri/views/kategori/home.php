	<div class="is-space"></div>
	<a class="btn is-red" style="font-size: 0.9rem" href="?c=a_kategori&m=add">Tambah Kategori</a>
	<h1 class="is-center is-margin">Halaman Kategori</h1>
	<?php if(isset($_SESSION['flash'])): ?>
		<?php if($_SESSION['flash_type'] == "error"): ?>
			<div class="alert is-yellow">
				<p><?=flash()?></p>
			</div>
		<?php else: ?>
			<div class="alert is-red">
				<p><?=flash()?></p>
			</div>
		<?php endif; ?>
	<?php endif; ?>
	<div class="alert is-red">
		<p><strong>Perhatian!</strong> <span style="font-weight: normal;">Menghapus kategori akan menghapus semua buku dengan kategori tersebut. Harap mengecek kembali ketika melakukan penghapusan kategori.</span></p>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>
					Nama Kategori
				</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($kategori as $a): ?>
				<tr>
					<td class="is-center"><?=$a->nama_kategori?></td>
					<td class="is-center">
						<a class="btn is-red" style="font-size: 0.8rem" onclick="window.location.href='<?=BASEURL?>?c=a_kategori&m=edit&id=<?=$a->id_kategori?>'">Edit</a>
						<a class="btn is-yellow" style="font-size: 0.8rem" onclick="window.location.href='<?=BASEURL?>?c=a_kategori&m=delete&id=<?=$a->id_kategori?>'">Hapus</a>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
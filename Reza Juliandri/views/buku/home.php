	<div class="is-space"></div>
	<a class="btn is-red" style="font-size: 0.9rem" href="?c=a_buku&m=add">Tambah Buku</a>
	<h1 class="is-center is-margin">Halaman Data Buku</h1>
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
	<table class="table">
		<thead>
			<tr>
				<th>
					Judul Buku
				</th>
				<th>
					Kategori
				</th>
				<th>
					Sinopsis
				</th>
				<th>
					Penulis
				</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($buku_data as $a): ?>
				<tr>
					<td class="is-center"><?=$a->judul_buku?></td>
					<td class="is-center"><?=DB::first("SELECT * FROM kategori WHERE id_kategori=:kategori",[':kategori'=>$a->kategori])->nama_kategori?></td>
					<td class="is-center"><?=$a->sinopsis?></td>
					<td class="is-center"><?=$a->penulis?></td>
					<td class="is-center" style="width:20%">
						<a class="btn is-red" style="font-size: 0.8rem" onclick="window.location.href='<?=BASEURL?>?c=a_buku&m=edit&id=<?=$a->id_buku?>'">Edit</a>
						<a class="btn is-yellow" style="font-size: 0.8rem" onclick="window.location.href='<?=BASEURL?>?c=a_buku&m=delete&id=<?=$a->id_buku?>'">Hapus</a>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
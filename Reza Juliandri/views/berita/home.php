	<div class="is-space"></div>
	<a class="btn is-red" style="font-size: 0.9rem" href="?c=a_berita&m=add">Tambah Berita</a>
	<h1 class="is-center is-margin">Halaman Data Berita</h1>
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
					Judul Berita
				</th>
				<th>
					Isi berita
				</th>
				<th>
					Pembuat Berita
				</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($berita_data as $a): ?>
				<tr>
					<td class="is-center"><?=$a->judul_berita?></td>
					<td class="is-center"><?=$a->isi_berita?></td>
					<td class="is-center"><?=DB::first("SELECT * FROM users WHERE id_user=:id",[':id'=>$a->id_user])->nama?></td>
					<td class="is-center" style="width:20%">
						<a class="btn is-red" style="font-size: 0.8rem" onclick="window.location.href='<?=BASEURL?>?c=a_berita&m=edit&id=<?=$a->id_berita?>'">Edit</a>
						<a class="btn is-yellow" style="font-size: 0.8rem" onclick="window.location.href='<?=BASEURL?>?c=a_berita&m=delete&id=<?=$a->id_berita?>'">Hapus</a>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
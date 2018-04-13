	<div class="is-space"></div>
	<a class="btn is-red" style="font-size: 0.9rem" href="?c=a_anggota&m=add">Tambah Anggota</a>
	<h1 class="is-center is-margin">Halaman Penerimaan Anggota</h1>
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
					Username
				</th>
				<th>
					Nama
				</th>
				<th>
					Email
				</th>
				<th>
					Status
				</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($anggota as $a): ?>
				<tr>
					<td><?=$a->username?></td>
					<td><?=$a->nama?></td>
					<td><?=$a->email?></td>
					<td class="is-center">
						<?php if($a->status == 0): ?>
						<a class="btn is-red" style="font-size: 0.8rem" onclick="window.location.href='<?=BASEURL?>?c=a_anggota&m=status&id=<?=$a->id_user?>'">Approve</a>
						<?php else: ?>
						<a class="btn is-yellow" style="font-size: 0.8rem" onclick="window.location.href='<?=BASEURL?>?c=a_anggota&m=status&id=<?=$a->id_user?>'">Discard Approve</a>
						<?php endif; ?>
					</td>
					<td class="is-center">
						<a class="btn is-red" style="font-size: 0.8rem" onclick="window.location.href='<?=BASEURL?>?c=a_anggota&m=edit&id=<?=$a->id_user?>'">Edit</a>
						<a class="btn is-yellow" style="font-size: 0.8rem" onclick="window.location.href='<?=BASEURL?>?c=a_anggota&m=delete&id=<?=$a->id_user?>'">Hapus</a>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
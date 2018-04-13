<div class="is-space"></div>
<h1 class="is-margin">List pinjaman buku</h1>
<table class="table">
	<thead>
		<tr>
			<th>#</th>
			<th>Judul Buku</th>
			<th>Status</th>
		</tr>
	</thead>
	<tbody>
		<tbody>
			<?php $i=1; ?>
			<?php 
				foreach($pinjaman as $p): 
					$buku = json_decode($p->id_buku,true);
			?>
			<tr>
				<td style="text-align: center"><?=$i?></td>
				<td style="text-align: center">
					<?php for ($s=0; $s < count($buku); $s++):?>
						<?=$buku[$s]['judul_buku']?><br>
					<?php endfor; ?>
				</td>
				<td style="text-align: center">
					<?php if($p->status != 0): ?>
						<button class="btn is-red" style="cursor:default;">Approved</button>
					<?php else: ?>
						<button class="btn is-yellow" style="cursor:default;">Pending</button>
					<?php endif; ?>
				</td>
				<td style="text-align: center"></td>
			</tr>
			<?php $i++; ?>
			<?php endforeach; ?>
		</tbody>
	</tbody>
</table>
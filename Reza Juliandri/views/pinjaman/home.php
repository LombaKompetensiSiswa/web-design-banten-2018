	<div class="is-space"></div>
	<h1 class="is-center is-margin">Halaman Data Pinjaman</h1>
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
				<th>#</th>
				<th>
					Nama buku
				</th>
				<th>
					Peminjam
				</th>
				<th>
					Status
				</th>
				<th>Action</th>
			</tr>
		</thead>
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
				<td style="text-align:center"><?=DB::first("SELECT * FROM users WHERE id_user=:user",[':user'=>$p->id_user])->nama?></td>
				<td style="text-align: center">
					<?php if($p->status != 0): ?>
						<button class="btn is-red" style="cursor:default;">Approved</button>
					<?php else: ?>
						<button class="btn is-yellow" style="cursor:default;">Pending</button>
					<?php endif; ?>
				</td>
				<td style="text-align: center">
					<?php if($p->status == 0): ?>
						<button class="btn is-red" onclick="window.location.href='<?=BASEURL?>?c=a_pinjaman&m=approve&id=<?=$p->id_pinjaman?>'">Approve</button>
					<?php else: ?>
						<button class="btn is-yellow" onclick="window.location.href='<?=BASEURL?>?c=a_pinjaman&m=approve&id=<?=$p->id_pinjaman?>'">Decline</button>
					<?php endif; ?>
				</td>
			</tr>
			<?php $i++; ?>
			<?php endforeach; ?>
		</tbody>
	</table>
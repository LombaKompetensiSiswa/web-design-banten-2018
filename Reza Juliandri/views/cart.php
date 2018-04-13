<div class="is-space"></div>
<h1 class="is-margin">List buku di keranjang</h1>
<table class="table">
	<thead>
		<th>#</th>
		<th>Judul Buku</th>
		<th>Penulis</th>
		<th>Kategori</th>
		<th>Action</th>
	</thead>
	<tbody>
		<?php 
			$data = array_keys($cart);
			for ($i=0; $i <count($data) ; $i++):
				$d = DB::first("SELECT * FROM buku WHERE id_buku=:id",[":id"=>$data[$i]]);
		?>
		<tr>
			<td style="width:10%;">
				<img src="<?=BASEURL?>public/img/upload/<?=$d->gambar_buku?>">
			</td>
			<td style="text-align: center;">
				<?=$d->judul_buku?>
			</td>
			<td style="text-align: center;">
				<?=$d->penulis?>
			</td>
			<td style="text-align: center;">
				<?=DB::first("SELECT * FROM kategori WHERE id_kategori=:kat",[':kat'=>$d->kategori])->nama_kategori?>
			</td>
			<td style="text-align:center">
				<a class="btn is-yellow" style="font-size: 0.8rem" onclick="window.location.href='<?=BASEURL?>?c=cart&m=delete&id=<?=$data[$i]?>'">Hapus</a>

			</td>
		</tr>
		<?php 
			endfor;
		?>
	</tbody>
</table>
<div style="text-align: right;padding-right:4%; margin-top:30px;">
	<button class="btn is-red" onclick="window.location.href='<?=BASEURL?>?c=cart&m=checkout'">Checkout</button>
</div>
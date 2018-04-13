<div class="is-space"></div>
<h1 class="is-center is-margin"><?=$buku_data->judul_buku?></h1>
<div class="book-content">
	<div style="width:30%">
		<img src="<?=BASEURL?>public/img/upload/<?=$buku_data->gambar_buku?>" style="box-shadow: 1px 2px 80px rgba(100,100,100,0.6)">
		<?php if(isset($_SESSION['login'])): ?>
		<div style="width:100%;display: block;"><button class="btn is-red is-margin" style="display: block;width:100%" onclick="window.location.href='<?=BASEURL?>?c=buku&m=addCart&id=<?=$buku_data->id_buku?>'">Pinjam Buku ini</button></div>
		<?php endif; ?>
	</div>
	<div style="width: 60%">
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
		<div class="detail">
			<span>Sinopsis : </span>
			<p>
				<?=$buku_data->sinopsis?>
			</p>
		</div>
		<div class="detail">
			<span>Kategori : </span>
			<p>
				<?=DB::first("SELECT * FROM kategori WHERE id_kategori=:kategori",[':kategori'=>$buku_data->kategori])->nama_kategori?>
			</p>
		</div>
		<div class="detail">
			<span>Penulis : </span>
			<p>
				<?=$buku_data->penulis?>
			</p>
		</div>
	</div>
</div>
<div class="is-space"></div>
<h1 class="is-center is-margin"><?=$berita_data->judul_berita
?></h1>
<img src="<?=BASEURL?>public/img/upload/<?=$berita_data->gambar_berita?>" style="box-shadow: 1px 2px 3px rgba(100,100,100,0.6);max-height: 450px" class="is-margin">
<div class="book-content">
	<div style="width: 100%">
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
			<p>
				<?=$berita_data->isi_berita?>
			</p>
		</div>
	</div>
</div>
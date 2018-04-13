<?php require_once('layouts/_header.php'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url; ?>/assets/css/daftar-buku.css">
<style type="text/css">
	#search-navbar{
		visibility: hidden;
	}
	.navbar{
		background-color: #000;
		position: relative;
	}
</style>
<section class="daftar-buku-section">
	<?php if(isset($_GET['q'])){ ?>

	<p>Hasil dari : <b><?php echo $_GET['q']; ?></b></p>
	<?php } ?>
	<form>
	<div class="search">
		<h2>Cari Berdasarkan :</h2>
		<div class="katalog-filter">
			<label>Katalog</label>
			<select name="katalog">
				<option>All</option>
				<?php  
				$categories = DB::query('SELECT * FROM category', array());
				foreach ($categories as $row) {
				?>
				<option value="<?php echo $row['id']; ?>" <?php if(isset($_GET['katalog'])){ echo $_GET['katalog'] == $row['id'] ? 'selected' : null; } ?>><?php echo ucwords($row['name']); ?></option>
				<?php } ?>
			</select>
		</div>
		<div class="big-search">
			<input type="text" name="q" placeholder="Masukan kata kunci..">
			<button>Cari</button>
		</div>
	</div>
	</form>
	<table border="1">
		<thead>
			<tr>
				<th>Judul</th>
				<th class="hd-xs">Penulis</th>
				<th>Katalog</th>
				<th>Sampul</th>
				<th>Opsi</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			if (isset($_GET['q'])) {
				$books = DB::query('SELECT books.*, author.name AS author, category.name AS category FROM books LEFT OUTER JOIN author ON author.id = books.author_id LEFT OUTER JOIN category ON category.id = books.category_id WHERE books.title LIKE :q', array(':q' =>'%'.$_GET['q'].'%'));
				if (isset($_GET['katalog'])) {
					if ($_GET['katalog'] != 'All') {
						$books = DB::query('SELECT books.*, author.name AS author, category.name AS category FROM books LEFT OUTER JOIN author ON author.id = books.author_id LEFT OUTER JOIN category ON category.id = books.category_id WHERE books.title LIKE :q AND books.category_id = :category_id', array(':q' =>'%'.$_GET['q'].'%', ':category_id' => $_GET['katalog']));
					}
				}
			}else{
				$books = DB::query('SELECT books.*, author.name AS author, category.name AS category FROM books LEFT OUTER JOIN author ON author.id = books.author_id LEFT OUTER JOIN category ON category.id = books.category_id', array());
			}
			foreach ($books as $row) {
			?>
			<tr>
				<td><?php echo ucwords($row['title']); ?></td>
				<td class="hd-xs"><?php echo $row['author']; ?></td>
				<td><?php echo $row['category']; ?></td>
				<td class="thumbnail-book">
					<div class="thumbnail-container">	
						<img src="<?php echo base_url; ?>/assets/img/<?php echo $row['image']; ?>">
					</div>
				</td>

				<td width="100px;" style="text-align: center;"><a href="buku.php?b_id=<?php echo $row['id']; ?>" class="btn-pinjam">Lihat</a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</section>
<?php require_once('layouts/_sidebar.php'); ?>
<?php require_once('layouts/_footer.php'); ?>

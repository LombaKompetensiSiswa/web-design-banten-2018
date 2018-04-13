<h2 align="center">WAKTU SISTEM</h2>
<h1 align="center"><?php echo "Tanggal : ".date("d-m-Y")." | Jam : ". date("h:m"); ?></h1>

<?php
include("../assets/php/inc/koneksi.php");

$tampilBuku = mysqli_query($konek,"SELECT * FROM buku");
$jumlahBuku = mysqli_num_rows($tampilBuku);

$tampilAnggota = mysqli_query($konek,"SELECT * FROM anggota");
$jumlahAnggota = mysqli_num_rows($tampilAnggota);


?>
<h1 align="center"><?php echo $jumlahBuku." Buku | ".$jumlahAnggota." Anggota"; ?></h1>

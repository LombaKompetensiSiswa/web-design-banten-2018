<?php
$data['buku'] = DB::get("SELECT *  FROM buku ORDER BY judul_buku ASC ",[]);
$data['w'] = true;
$data['judul'] = "Katalog Buku Perpustakaan Daerah";
template('katalog',$data);
<?php
$data['buku'] = DB::getT('buku');
$data['judul'] = "Berikut adalah buku yang tersedia di sini.";
$data['w'] = true;
template('buku',$data);
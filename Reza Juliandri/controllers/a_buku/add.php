<?php
$data['kategori'] = DB::getT('kategori');
template('buku.add',$data);
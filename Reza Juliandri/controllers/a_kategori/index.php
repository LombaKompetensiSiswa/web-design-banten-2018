<?php
$data['kategori'] = DB::getT("kategori");
template('kategori.home',$data);
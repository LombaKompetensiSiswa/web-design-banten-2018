<?php
$data['buku_data'] = DB::getT("buku");
template('buku.home',$data);
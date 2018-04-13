<?php
$data['berita_data'] = DB::getT("berita");
template('berita.home',$data);
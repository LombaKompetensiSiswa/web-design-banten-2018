<?php
$data['berita'] = DB::getT("berita");
$data['w'] = true;
template('berita',$data);
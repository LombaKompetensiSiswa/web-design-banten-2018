<?php
$data['pinjaman'] = DB::getT("pinjaman");
template("pinjaman.home",$data);
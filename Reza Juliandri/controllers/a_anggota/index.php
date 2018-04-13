<?php
$anggota = DB::getT('users');
template('anggota.home',['anggota'=>$anggota]);
<?php
$data['pinjaman'] = DB::get("SELECT * FROM pinjaman WHERE id_user=:id",[":id"=>$_SESSION['user_id']]);
template('pinjaman',$data);
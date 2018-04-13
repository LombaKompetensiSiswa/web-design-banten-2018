<?php

/**
* 
*/
class Admin extends DB
{
	protected $db;
	
	function __construct() {
		$this->db = new DB();
	}
	public function jumlah_row($table) {
		$q = DB::from($table)->get();
		return $q->num_rows();
	}
	public function get_all_user() {
		$q = DB::from('tb_user')
				->select('*')
				->get();
		return $q->fetchAll();
	}
	public function insert_anggota($data) {
		$q = DB::from('tb_user');
		return $q->insert($data);
	}
	public function update_status_user($user_ID) {
		$q = DB::from('tb_user')
				->where("status = 'pending' AND user_ID = '$user_ID'")
				->update(array('status' => 'diterima'));
		return $q;
	}
	public function update_status_pinjam($pinjaman_ID, $user_ID) {
		$q = DB::from('tb_pinjaman')
				->where("pinjaman_ID = '$pinjaman_ID' AND user_ID = '$user_ID'")
				->update(array('status_pinjam' => 'dikembalikan'));
		return $q->query;
	}

}

?>
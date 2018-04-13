<?php


class Buku extends DB
{
	protected $db;
	function __construct() {
		$this->db = new DB();
	}
	public function get_kategori() {
		$q = DB::from('tb_kategori')
				->select('*')
				->get();
		return $q->fetchAll();
	}
	public function get_all_buku($search='') {
		if($search) {
			$q = DB::from('tb_buku')->select('*')
				->join('INNER JOIN tb_kategori ON tb_kategori.kategori_ID = tb_buku.kategori_buku')
				->where("judul_buku LIKE '%$search%'")
				->get();
		} else {
			$q = DB::from('tb_buku')
					->select('*')
					->join('INNER JOIN tb_kategori ON tb_kategori.kategori_ID = tb_buku.kategori_buku')
					->get();
		}
		return $q->fetchAll();
	}
	public function get_all_buku_by_kategori($kat_id) {
		$q = DB::from('tb_buku')
				->select('*')
				->join('INNER JOIN tb_kategori ON tb_kategori.kategori_ID = tb_buku.kategori_buku')
				->where("kategori_buku = '$kat_id'")
				->get();
		return $q->fetchAll();
	}
	public function add_buku($data) {
		$q = DB::from('tb_buku')->insert($data);
		return $q;
	}
	public function add_kategori($data) {
		$q = DB::from('tb_kategori')->insert($data);
		return $q;
	}
	public function add_pinjaman($data) {
		$q = DB::from('tb_pinjaman')->insert($data);
		return $q;
	}
	public function delete_buku($id) {
		$q = DB::from('tb_buku')->delete('buku_ID', $id);
		return $q;
	}
	public function delete_kategori($id) {
		$q = DB::from('tb_kategori')->delete('kategori_ID', $id);
		return $q;
	}
	public function get_all_kategori() {
		$q = DB::from('tb_kategori')->select('*')
				->get();
		return $q->fetchAll();
	}


	/**
	*
	* FUNCTION PINJAMAN 
	*
	**/
	public function get_all_pinjaman() {
		$q = DB::from('tb_pinjaman')
				->select('*')
				->join('INNER JOIN tb_buku ON tb_buku.buku_ID = tb_pinjaman.buku_ID INNER JOIN tb_user ON tb_user.user_ID = tb_pinjaman.user_ID')
				->get();
		return $q->fetchAll();
	}
	public function get_pinjaman($user_ID) {
		$q = DB::from('tb_pinjaman')
				->select('*')
				->join('INNER JOIN tb_buku ON tb_buku.buku_ID = tb_pinjaman.buku_ID')
				->where('user_ID', $user_ID)
				->get();
		return $q->fetchAll();
	}
}

?>
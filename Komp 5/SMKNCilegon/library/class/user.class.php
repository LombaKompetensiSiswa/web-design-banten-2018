<?php


class User extends DB
{
	protected $db;

	function __construct() {
		$this->db = new DB();
	}
	public function get_all_user() {
		$q = DB::from('tb_user')
				->select('*')
				->orderBy('user_datejoin ASC')
				->get();
		return $q->fetchAll();
	}
	public function add_user($data) {
		$q = DB::from('tb_user')
				->insert($data);
		return $q;
	}
	public function authLogin($usern, $pass){
		$q = DB::from('tb_user')
				->select('*')
				->where('user_name', $usern)
				->get();
		$auth = $q->fetchRow(TRUE);
		if($q->num_rows() > 0) {
			$hash = $auth->user_password;
			if($auth->user_name == $usern && password_verify($pass, $hash)) {
				if($auth->status != 'pending') return $auth;
				return false;
			}
		}
		return false;
	}

}
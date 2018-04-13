<?php

/**
** @author Database Engine
*/

class DB
{
	protected $db;
	protected $select='*';
	protected static $instances;
	protected static $table;
	protected $where;
	protected $query;
	protected $join;
	protected $orderBy;

	function __construct()
	{
		global $config;
		$db = $config['database'];
		$this->db = new mysqli($db['hostname'], $db['username'], $db['password'], $db['database']);
	}
	public function closeInstance() {
		Self::$instances = null;
	}
	public static function from($tb) {
		if(Self::$instances === NULL) {
			Self::$instances = new Self;
		}
		Self::$table = $tb;
		return Self::$instances;
	}
	public function select($select='*') { //Default nya Select All
		 $this->select = $select;
		 return $this;
	}
	public function where($p1, $p2=NULL) {
		if($p2 !== NULL) {
			$this->where = "$p1 = '$p2'";
		} else {
			$this->where = "$p1";
		}
		return $this;
	}
	public function join($join) {
		$this->join = $join;
		return $this;
	}
	public function orderBy($order) {
		$this->orderBy = $order;
		return $this;
	}
	public function get() {
		$select = $this->select;
		$table = Self::$table;
		$where = (isset($this->where)) ? "WHERE ".$this->where : '';
		$join = (isset($this->join)) ? $this->join : '';
		$orderBy = (isset($this->orderBy)) ? "ORDER BY ".$this->orderBy : '';
		$this->query = "SELECT $select FROM $table $join $where $orderBy";
		Self::$instances = null;
		return $this;
	}
	public function insert($data) {
		$table = Self::$table;
		$collumn = array();
		$values = array();
		foreach ($data as $key => $value) {
			$column[] = $key;
			$values[] = "'$value'";
		}
		$column = "(".implode(",", $column).")";
		$values = "(".implode(",", $values).")";
		$this->query = "INSERT INTO $table $column VALUES $values";
		return $this->db->query($this->query);
	}
	public function delete($p1, $p2=NULL) {
		$table = Self::$table;
		if($p2 === NULL) {
			$this->query = "DELETE FROM $table WHERE $p1";
		} else {
			$this->query = "DELETE FROM $table WHERE $p1 = '$p2'";
		}
		return $this->db->query($this->query);
	}
	public function update($data) {
		$table = Self::$table;
		$collumn = array();
		$values = array();
		$where = (isset($this->where)) ? "WHERE ".$this->where : '';
		foreach ($data as $key => $value) {
			$collumn[] = "$key='$value'";
		}
		$query = implode(', ', $collumn);
		$this->query = "UPDATE $table SET $query $where";
		return $this->db->query($this->query);
	}
	public function fetchRow($obj=FALSE) { // Output row
		$q = $this->db->query($this->query);
		if($obj) {
			return $q->fetch_object();
		} else {
			return $q->fetch_assoc();
		}

		return $q->fetch_assoc();
	}
	public function fetchAll($obj=FALSE) {
		$all = array();
		$q = $this->db->query($this->query);
		while ($r = $q->fetch_assoc()) {
			$all[] = $r;
		}
		if($obj) $all = (object) $all;
		return $all;
	}
	public function num_rows() {
		$q = $this->db->query($this->query);
		return $q->num_rows;
	}

}

?>
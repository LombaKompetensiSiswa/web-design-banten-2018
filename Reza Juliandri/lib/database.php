<?php
/**
* 	Database Class
*/
class DB
{
	// Singleton Instance
	public static $__instance = [];
	// Private Var
	private $pdo;
	// Singleton Function
	public static function getInstance(...$p){
		if(!isset(self::$__instance[static::class])){
			self::$__instance[static::class] = new static(...$p);
		}
		return self::$__instance[static::class];
	}
	//  Constructor
	public function __construct(){
		try {
			$this->pdo = new \PDO("mysql:host=localhost;dbname=reza",'root','',[3=>2]);
		} catch (\PDOException $e) {
			echo $e->getMessage();
		}
	}
	// Called Static Database
	public static function __callStatic($m,$p){
		return self::getInstance()->pdo->{$m}($p);
	}
	// Query PDO
	public static function query($query,$data=[]){
		try {
			$prep = self::getInstance()->pdo->prepare($query);
			$prep->execute($data);
			return true;	
		} catch (\PDOException $e) {
			return $e->getMessage();
		}
	}
	// Get Many Data
	public static function get($sql,$data){
		$prep = self::getInstance()->pdo->prepare($sql);
		$prep->execute($data);
		return $prep->fetchAll(5);
	}
	//  Just get one data first
	public static function first($sql,$data){
		$prep = self::getInstance()->pdo->prepare($sql);
		$prep->execute($data);
		return $prep->fetch(5);
	}
	// Get Per Table data
	public static function getT($table){
		$prep = self::getInstance()->pdo->prepare("SELECT * FROM ".$table);
		$prep->execute();
		return $prep->fetchAll(5);
	}
	// First Per Table data
	public static function firstT($table){
		$prep = self::getInstance()->pdo->prepare("SELECT * FROM ".$table);
		$prep->execute();
		return $prep->fetch(5);
	}
}
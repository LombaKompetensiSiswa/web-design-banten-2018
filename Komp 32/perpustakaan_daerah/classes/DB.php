<?php 
define('base_url', 'http://localhost/perpustakaan_daerah');
class DB{
	private static function conn()
	{
		$pdo = new PDO('mysql:dbhost=localhost;dbname=perpusdar', 'root', '');
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $pdo;
	}
	public static function query($sql, $params = array())
	{
		$exec = self::conn()->prepare($sql);
		$exec->execute($params);
		if(explode(' ', $sql)[0] == 'SELECT'){
			$data = $exec->fetchAll();
			return $data;
		}
	}
}

<?php
class Database
{
	private $username = "root";
	private $password = "farisksa511";
	private $host = "localhost";
	private $db_name = "test9";
	private $charset = "utf8mb4";

	public function Connect(){

    try{
	$dsn = "mysql:host=".$this->host.";dbname=".$this->db_name.";charset=".$this->charset;
	$pdo = new PDO($dsn, $this->username, $this->password,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));	
	$pdo -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
	}
	  catch(PDOException $err){
      	die('Unable to connect: '.$err->getMessage());
	}
	return $pdo;
	}
}
?>
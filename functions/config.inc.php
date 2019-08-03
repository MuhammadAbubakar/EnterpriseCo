<?php
class Database{
	private $username = "root";
	private $password = "farisksa511";
	private $host = "localhost";
	private $db_name = "panel";
	private $charset = "utf8";

	public function Connect(){

    try{
	$dsn = "mysql:host=".$this->host.";dbname=".$this->db_name.";charset=".$this->charset;
	$pdo = new PDO($dsn, $this->username, $this->password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));	
	$pdo -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
	$pdo->exec("SET CHARACTER utf8");
	}
	  catch(PDOException $err){
      	die('Unable to connect: '.$err->getMessage());
	}
	return $pdo;
	}
}
?>
<?php

$host = "localhost";
$username = "Database Username";
$password="Database Password";
$db_name="enterpriseco";
//--------------------- Don Not Change ---------------------//
$conn = mysqli_connect($host,$username,$password,$db_name);
if(!$conn){
	die("Database Error :".mysqli_connect_error());
} else {

} 
//--------------------- Don Not Change ---------------------//
?>

<?php
$Host = "localhost";
$Username = "root";
$Password = "farisksa511";
$DBName = "panel2";

$conn = mysqli_connect($Host,$Username,$Password,$DBName);
if (!$conn) {
	die("No Connection! : ".mysqli_connect_error());
}
?>

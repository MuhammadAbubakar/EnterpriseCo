<?php
$Host = "localhost";
$Username = "root";
$Password = "farisksa511";
$DBName = "panel";

$conn = mysqli_connect($Host,$Username,$Password,$DBName);
if (!$conn) {
	die("No Connection! : ".mysqli_connect_error());
}
?>

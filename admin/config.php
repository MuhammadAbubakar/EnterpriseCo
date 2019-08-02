<?php
$Host = "localhost";
$Username = "DB Username";
$Password = "DB Password";
$DBName = "DB Name";

$conn = mysqli_connect($Host,$Username,$Password,$DBName);
if (!$conn) {
	die("No Connection! : ".mysqli_connect_error());
}
?>

<?php 
require '../../functions/config.inc.php';
require '../../functions/users.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	if (!isset($_POST['avatar']) or $_POST['avatar'] == "") {
		$avatar = "../src/img/blank.png";
	} else {
		$avatar = $_POST['avatar'];
	}
  $user = new User;
  $msg = $user->newUser($_POST['fname'],$_POST['lname'],$_POST['username'],$_POST['password'],$_POST['Email'],$_POST['role'],$avatar);
  exit(header("Location: ../newUser.php?msg=".$msg));
}
?>
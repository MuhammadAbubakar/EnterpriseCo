<?php 
require '../../functions/config.inc.php';
require '../../functions/users.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $user = new User;
  $msg = $user->newUser($_POST['fname'],$_POST['lname'],$_POST['username'],$_POST['password'],$_POST['Email'],$_POST['role'],$_POST['avatar']);
  exit(header("Location: ../newUser.php?msg=".$msg));
}
?>
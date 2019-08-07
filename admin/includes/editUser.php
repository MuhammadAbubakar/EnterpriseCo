<?php 
require '../../functions/config.inc.php';
require '../../functions/users.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $id = $_POST['id'];
  echo $id;
  $username = $_POST['username'];
  $user = new User;
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
   $msg = $user->updateUser($id,$username,$_POST['password'],$_POST['Email'],$_POST['role'],$_POST['avatar']);
   exit(header("Location: ../UserEditor.php?user=$username&msg=yes"));
  }
}
?>
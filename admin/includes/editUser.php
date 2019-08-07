<?php 
require '../../functions/config.inc.php';
require '../../functions/users.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $id = $_POST['id'];
  $username = $_POST['username'];
  $user = new User;
   $msg = $user->updateUser($id,$_POST['firstName'],$_POST['lastName'],$username,$_POST['password'],$_POST['Email'],$_POST['role'],$_POST['avatar']);
 exit(header("Location: ../UserEditor.php?user=$username&msg=yes"));
}
?>
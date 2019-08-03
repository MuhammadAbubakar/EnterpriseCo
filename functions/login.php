<?php
class Login extends Database
{
 
 public function newLogin($username,$password)
 {
 	  $pdo = $this->Connect();
 	  $username = $_POST['Username'];
      $password = md5($_POST['Password']); 
      $sql = "SELECT * FROM users WHERE username = :username AND password = :password limit 1";
      $stmt = $pdo->prepare($sql);
      $stmt -> execute(['username'=>$username,'password'=>$password]);
      return $stmt;
 }
}
?>
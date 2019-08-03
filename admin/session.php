<?php
   include('../functions/config.inc.php');
   session_start();
    $db = new Database;
    $pdo = $db->Connect();
    $user_check = $_SESSION['login_user'];
    $sql = "SELECT username FROM admin WHERE username = :username";
	  $stmt = $pdo->prepare($sql);
	  $stmt->execute(['username' => $user_check]);
	  $data = $stmt->fetch();
	  $login_session = $data->username;
   if(!isset($_SESSION['login_user'])){
      exit(header("Location: login.php"));
   }
?>
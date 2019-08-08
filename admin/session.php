<?php
  include '../functions/users.php';
   session_start();
    $user = new User;
    $user_check = $_SESSION['login_user'];
    $data = $user->getUserData($user_check); 
	$login_session = $data->username;
	  if ($data->role != "administrator") {
	    exit(header("Location: ../blog/profile.php?user=".$login_session));
	  }
    if(!isset($_SESSION['login_user'])){
      exit(header("Location: login.php"));
    }
?>
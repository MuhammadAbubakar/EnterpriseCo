<?php
  include '../functions/users.php';
   session_start();
   if (isset($_SESSION['login_user'])) {
       $user = new User;
       $user_check = $_SESSION['login_user'];
       $data = $user->getUserData($user_check); 
	   $login_session = $data->username;
   }
?>
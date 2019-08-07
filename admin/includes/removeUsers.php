<?php 
require '../../functions/config.inc.php';
include '../../functions/users.php';
$user = new User;
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['settings']) && $_POST['settings'] == "Delete") {
        $GetDelete = $_POST['delete'];
        $GetDeleteTidy = GetFilter(implode(',', $GetDelete));
        $user->deleteUser($GetDeleteTidy);
        exit(header("Location: ../viewUsers.php?msg=yes"));
  }
}

  function GetFilter($value){
    $step1 = trim($value);
    $step2 = strip_tags($step1);
    $step3 = htmlspecialchars($step2);
    return $step3;
  }
?>
<?php 
require '../../functions/config.inc.php';
include '../../functions/orders.php';
$order = new Order;
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['settings']) && $_POST['settings'] == "Delete") {
        $GetDelete = $_POST['delete'];
        $GetDeleteTidy = GetFilter(implode(',', $GetDelete));
        $order->deleteOrder($GetDeleteTidy);
        exit(header("Location: ../index.php?msg=yes"));
  }
}

  function GetFilter($value){
    $step1 = trim($value);
    $step2 = strip_tags($step1);
    $step3 = htmlspecialchars($step2);
    return $step3;
  }
?>
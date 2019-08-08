<?php 
require '../../functions/config.inc.php';
include '../../functions/cat.php';
$cat = new Categories;
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['settings']) && $_POST['settings'] == "Delete") {
        $GetDelete = $_POST['delete'];
        $GetDeleteTidy = GetFilter(implode(',', $GetDelete));
        $cat->deleteCategory($GetDeleteTidy);
        exit(header("Location: ../viewCategories.php?msg=delCat"));
  }
}

  function GetFilter($value){
    $step1 = trim($value);
    $step2 = strip_tags($step1);
    $step3 = htmlspecialchars($step2);
    return $step3;
  }
?>
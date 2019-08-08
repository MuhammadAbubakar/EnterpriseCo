<?php 
require '../../functions/config.inc.php';
require '../../functions/cat.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $cat = new Categories;
  $slug = $_POST['name'];
  $slug = str_replace(" ","-",$slug);
  $slug = strtolower($slug);
  $msg = $cat->newCategory($_POST['name'],$slug);
  exit(header("Location: ../viewCategories.php?msg=newCat"));
}
?>
<?php 
require '../../functions/config.inc.php';
include '../../functions/cat.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $id = $_POST['id'];
  $comment = new Categories;
   $msg = $comment->editCategory($id,$_POST['name'],$_POST['slug']);
   exit(header("Location: ../CategoriesEditor.php?id=$id&msg=yes"));
}
?>
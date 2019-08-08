<?php 
require '../../functions/config.inc.php';
require '../../functions/users.php';
include '../../functions/posts.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $id = $_POST['id'];
  $post = new Posts;
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
   $msg = $post->editPost($id,$_POST['author'],$_POST['title'],$_POST['post'],$_POST['image'],$_POST['date'],$_POST['category']);
   exit(header("Location: ../PostEditor.php?id=$id&msg=yes"));
  }
}
?>
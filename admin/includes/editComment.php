<?php 
require '../../functions/config.inc.php';
require '../../functions/users.php';
include '../../functions/comments.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $id = $_POST['id'];
  $comment = new Comments;
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
   $msg = $comment->editComment($id,$_POST['username'],$_POST['Comment'],$_POST['PostID']);
   exit(header("Location: ../editcoms.php?id=$id&msg=yes"));
  }
}
?>
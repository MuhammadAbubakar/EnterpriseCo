<?php
 /**
  * summary
  */
 class Comments extends Posts
 {
 	public function getComments(){
 		$pdo = $this->Connect();
 		

 	}

 	public function newComment($postid,$username,$comment){
 		$pdo = $this->Connect();
 	}

 	public function editComment(){
 		$pdo = $this->Connect();
 	}

 	public function getComment($id){
 		$pdo = $this->Connect();
 	}
 }
?>
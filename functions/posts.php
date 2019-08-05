<?php

 class Posts extends Database{

 	public function getAllPosts(){
 		$pdo = $this->Connect();
 		$sql = "SELECT * FROM Posts";
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		return $stmt;
 	}

	public function getPost($id){
		$pdo = $this->Connect();
		$sql = "SELECT * FROM Posts WHERE id = ?";
		$stmt = $pdo->prepare($sql);
		$stmt->execute([$id]);
		$data = $stmt->fetch();
		return $data;
	}
 	public function newPost(){
 		
 	}

 	public function editPost(){
 		
 	}

 	public function deletePost($id){
 		
 	}    
 }
?>
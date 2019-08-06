<?php
 class Posts extends Database{

 	public function getAllPosts($page,$per_page){
 		$x = ($page - 1) * $per_page;
 		$pdo = $this->Connect();
 		$sql = "SELECT * FROM Posts LIMIT $x, $per_page";
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetchAll();
		return $data;
 	}

	public function getPost($id){
		$pdo = $this->Connect();
		$sql = "SELECT * FROM Posts WHERE id = ?";
		$stmt = $pdo->prepare($sql);
		$stmt->execute([$id]);
		$data = $stmt->fetch();
		return $data;
	}

	public function numRows(){
		$pdo = $this->Connect();
		$sql = "SELECT COUNT(*) FROM Posts";
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetchColumn();
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
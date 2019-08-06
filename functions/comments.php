<?php
 include 'users.php';
 class Comments extends User
 {
 	public function getComments($id){
 		$pdo = $this->Connect();
 		$sql = "SELECT * FROM Comments WHERE PostID = ?";
		$stmt = $pdo->prepare($sql);
		$stmt->execute([$id]);
		$data = $stmt->fetchAll();
		return $data;
 	}

 	public function newComment($username,$comment,$postid){
 		$pdo = $this->Connect();
		$sql = "INSERT INTO Comments(username,Comment,PostID) VALUES(:username,:comment,:id)";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(['username'=>$username,'comment'=>$comment,'id'=>$postid]);
		return "Comment Added";
 	}

 	public function editComment(){
 		$pdo = $this->Connect();
 	}

 	public function getComment($id){
 		$pdo = $this->Connect();
 	}

 	public function getUserAvatar($username){
 		$pdo = $this->Connect();
 		$user = new User;
 		$data = $user->getUserData($username);
 		return $data->avatar;
 		
 	}
 }
?>
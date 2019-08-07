<?php
 class Comments extends User

 {
 	public function getComment($id){
 		$pdo = $this->Connect();
 		$sql = "SELECT * FROM Comments WHERE PostID = ?";
		$stmt = $pdo->prepare($sql);
		$stmt->execute([$id]);
		$data = $stmt->fetch();
		return $data;
 	}

 	 	public function NumComments(){
 		$pdo = $this->Connect();
 		$sql = "SELECT COUNT(*) FROM Comments";
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetchColumn();
		return $data;
 	}

 	public function newComment($username,$comment,$postid){
 		$pdo = $this->Connect();
		$sql = "INSERT INTO Comments(username,Comment,PostID) VALUES(:username,:comment,:id)";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(['username'=>$username,'comment'=>$comment,'id'=>$postid]);
		return "Comment Added";
 	}

 	public function deleteComment($id) {
 	 $pdo = $this->Connect();
 	 $sql = "DELETE FROM Comments WHERE id IN ($id)";
	 $stmt = $pdo->prepare($sql);
	 $stmt->execute();
	 return 'Comments Deleted';
 	}

 	public function editComment($id,$username,$comment,$postid){
 		$pdo = $this->Connect();
 		$comments = $this->getComment($id);
			if ($comments->username == $username) {
				$newUsername = $comments->username;
			} else {
				$newUsername = $username;
			}

			if ($comments->Comment == $comment) {
				$newText = $comments->Comment;
			} else {
				$newText = $comment;
			}

			if ($comments->PostID == $postid) {
				$newPostID = $comments->PostID;
			} else {
				$newPostID = $postid;
			}

		$sql = "UPDATE Comments SET 
			username = :user,
			Comment = :msg,
			PostID = :postid
			WHERE id = :id";
			$stmt = $pdo->prepare($sql);
			$stmt->execute(['user'=>$newUsername,'msg'=>$newText,'postid'=>$newPostID,'id'=>$id]);
			return 'Comment Updated';
 	}

 	public function getComments(){ // For Admin Dashboard
 		$pdo = $this->Connect();
 		$sql = "SELECT * FROM Comments";
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetchAll();
		return $data;
 	}

 	public function getUserAvatar($username){
 		$pdo = $this->Connect();
 		$user = new User;
 		$data = $user->getUserData($username);
 		return $data->avatar;
 		
 	}
 }
?>
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

 	public function getAllPostsAdmin(){
 		$pdo = $this->Connect();
 		$sql = "SELECT * FROM Posts";
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetchAll();
		return $data;
 	}



 	public function getAllPostsByCat($page,$per_page,$category){
 		$x = ($page - 1) * $per_page;
 		$pdo = $this->Connect();
 		$sql = "SELECT * FROM Posts WHERE category = :cat LIMIT $x, $per_page";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(['cat'=>$category]);
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

	public function getCatNameBySlug($slug){
		$pdo = $this->Connect();
		$sql = "SELECT * FROM Categories WHERE slug = ?";
		$stmt = $pdo->prepare($sql);
		$stmt->execute([$slug]);
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

 	public function newPost($author,$title,$text,$image,$category){
        $pdo = $this->Connect();
        $sql = "INSERT INTO Posts(Author,Title,Post,image,category) VALUES(:author,:title,:post,:image,:category)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['author'=>$author,'title'=>$title,'post'=>$text,'image'=>$image,'category'=>$category]);
        return 'Post Has Been Created';   
 	}

 	public function editPost($id,$author,$title,$text,$image,$date,$category){
  		$pdo = $this->Connect();
 		$post = $this->getPost($id);
			if ($post->Author == $author) {
				$newAuthor = $post->Author;
			} else {
				$newAuthor = $author;
			}

			if ($post->Title == $title) {
				$newTitle = $post->Title;
			} else {
				$newTitle = $title;
			}


			if ($post->Post == $text) {
				$newPost = $post->Post;
			} else {
				$newPost = $text;
			}

			if ($post->image == $image) {
				$newImage = $post->image;
			} else {
				$newImage = $image;
			}

			if ($post->category == $category) {
				$newCategory = $post->category;
			} else {
				$newCategory = $category;
			}

		$sql = "UPDATE Posts SET 
			Author = :user,
			Title = :title,
			Post = :post,
			Post_Date = :datee,
			image = :image,
			category = :category

			WHERE id = :id";
			$stmt = $pdo->prepare($sql);
			$stmt->execute(['user'=>$newAuthor,'title'=>$newTitle,'post'=>$newPost,'datee'=>$date,'image'=>$newImage,'category'=>$newCategory,'id'=>$id]);

			return 'Post Updated';
 	}

 	public function deletePost($id){
		$pdo = $this->Connect();
		$sql = "DELETE FROM Posts WHERE id IN ($id)";
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		return "Done";
 	}    

 }
?>
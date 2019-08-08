<?php
	class Categories extends Database{
		public function getCats(){
			$pdo = $this->Connect();
			$sql = "SELECT * FROM Categories LIMIT 7";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			$data = $stmt->fetchAll();
			return $data;
		}

		public function getCatByID($id){
			$pdo = $this->Connect();
			$sql = "SELECT * FROM Categories WHERE ID = ?";
			$stmt = $pdo->prepare($sql);
			$stmt->execute([$id]);
			$data = $stmt->fetch();
			return $data;
		}
		
		public function getCatsWithOutLimit(){
			$pdo = $this->Connect();
			$sql = "SELECT * FROM Categories";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			$data = $stmt->fetchAll();
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

		public function newCategory($name,$slug){
			$pdo = $this->Connect();
			$sql = "INSERT INTO Categories (name,slug) VALUES (:name,:slug) ";
			$stmt = $pdo->prepare($sql);
			$stmt->execute(['name'=>$name,'slug'=>$slug]);
		}

		public function deleteCategory($id){
			$pdo = $this->Connect();
			$sql = "DELETE FROM Categories WHERE id IN ($id)";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			return "Done";
		}

	public function editCategory($id,$name,$slug){
	  		$pdo = $this->Connect();
	 		$ctaig = $this->getCatNameBySlug($slug);
				if ($ctaig->name == $name) {
					$newName = $ctaig->name;
				} else {
					$newName = $name;
				}

				if ($ctaig->slug == $slug) {
					$newSlug = $ctaig->slug;
				} else {
					$newSlug = $slug;
				}


			$sql = "UPDATE Categories SET name = :name,slug = :slug WHERE id = :id";
				$stmt = $pdo->prepare($sql);
				$stmt->execute(['name'=>$newName,'slug'=>$newSlug,'id'=>$id]);
				return 'Category Updated';
	 	}

}
?>
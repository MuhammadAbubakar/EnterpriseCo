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
	}
?>
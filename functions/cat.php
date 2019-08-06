<?php
	class Categories extends Database{
		public function getCats(){
			$pdo = $this->Connect();
			$sql = "SELECT * FROM Categories";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			$data = $stmt->fetchAll();
			return $data;
		}
	}
?>
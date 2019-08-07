<?php 
class Services extends Database
{
	public function getServices(){
		$pdo = $this->Connect();
		$sql = "SELECT * FROM Services WHERE id = 1";
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetch();
		return $data;
	}

	public function setServices($Code,$URL){
		
	}
}

?>
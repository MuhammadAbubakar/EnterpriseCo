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
		$pdo = $this->Connect();
		$sql = "UPDATE Services SET GoogleAnalytics = :gcode,Mailchimp = :murl WHERE id = 1";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(['gcode'=>$Code,'murl'=>$URL]);
		echo 'Username Updated';
  }
}

?>
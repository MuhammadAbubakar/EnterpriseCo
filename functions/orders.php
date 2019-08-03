<?php
class Order extends Database
{
	public function newOrder($token,$fullname,$email,$subject,$message,$status){
		$pdo = $this->Connect();
		$sql = "INSERT INTO Orders (FullName,Email,OrderNum,Subject,Message,Status) VALUES (:name,:email,:token,:subject,:message,:status) ";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(['name'=>$fullname,'email'=>$email,'token'=>$token,'subject'=>$subject,'message'=>$message,'status'=>$status]);
	}

	public function getAllOrders(){
		$pdo = $this->Connect();
		$sql = "SELECT * FROM Orders";;
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetchAll();
		return $data;
	}

	public function getOrder($id){
		$pdo = $this->Connect();
		$sql = "SELECT * FROM Orders WHERE id = :id";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(['id' => $id]);
		$data = $stmt->fetch();
		return $data;
	}


	public function sendEmail($email,$subject,$body){
		$header = "From: noreply@example.com\r\n"; 
		$header.= "MIME-Version: 1.0\r\n"; 
		$header.= "Content-type: text/html; charset=iso-8859-1\r\n"; 
		$header.= "X-Priority: 1\r\n";
		mail($email, $subject, $body,$header);
	   return $sendmsg = "Message has been send"; 
	}

	public function setStatus($id,$status){
		$pdo = $this->Connect();
		switch ($status) {
		  case "Open":
		      $sql = "UPDATE Orders SET Status='Open' WHERE id= ?";
		    break;

		    case "Close":
		      $sql = "UPDATE Orders SET Status='Close' WHERE id= ?";
		    break;

		    case "Pending":
		      $sql = "UPDATE Orders SET Status='Pending' WHERE id= ?";
		    break;
		}
		$stmt = $pdo->prepare($sql);
		$stmt->execute([$id]);
	}

	public function emailValid($email) {
		$domain = substr($email, strpos($email, '@') + 1);
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		if (checkdnsrr($domain) != FALSE) {
		   switch(strtolower($domain)) {
			   	case 'gmail.com':
			    	return true;
			    	break;

			    case 'hotmail.com':
			    	return true;
			    	break;

			    case 'outlook.com':
			    	return true;
			    	break;

			    case 'yahoo.com':
			    	return true;
			    	break;

			    case 'msn.com':
			    	return true;
			    	break;

			    case 'outlook.sa':
			    	return true;
			    	break;

			    case "aol.com":
			    	return true;
			    	break;

			    default:
			    	return false;
			    	break;
		   }
		} else {
			return false;
		}

	  } else {
		 	return false;
		}
	  }
	}
?>
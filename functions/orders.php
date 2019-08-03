<?php
class Order extends Database
{
	public function newOrder($token,$fullname,$email,$subject,$message,$status){
		$pdo = $this->Connect();
		$sql = "INSERT INTO Orders (FullName,Email,OrderNum,Subject,Message,Status) VALUES (:name,:email,:token,:subject,:message,:status) ";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(['name'=>$fullname,'email'=>$email,'token'=>$token,'subject'=>$subject,'message'=>$message,'status'=>$status]);
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
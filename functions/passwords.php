<?php

class ResetPassword extends User {


	public function generateToken(){
		return md5(uniqid(rand(), true));
	}

	public function sendEmail($username){
		$pdo = $this->Connect();
		$header = "From: noreply@thunderhost.xyz"; 
	    	if ($this->checkUser($username) != "User Exit") {
	    		return "Username does not exist!";
	    	} else {
	    		$token = $this->generateToken();
	    		$rows = $this->getUserData($username);
	    		$email = $rows->email;
				$sql = "INSERT INTO ConfirmCode (username,code) VALUES (:username,:token)";
				$stmt = $pdo->prepare($sql);
				$stmt->execute(['username'=>$username,'token'=>$token]);
	    	    mail($email, "Hello '$username', </br> Password Rest Token: '$token' </br> Good day to you", "",$header);
	    		return "Instructions has been send to your email";
	    }
 }

	 public function updatePassword($username,$password)
	 {

	 		$pdo = $this->Connect();
		 if (strlen($password) >= 8) {
			$sql = "UPDATE users SET password = :password WHERE username = :username";
			$stmt = $pdo->prepare($sql);
			$stmt->execute(['username'=>$username,'password'=>md5($password)]);
	    	return "Password Has Been Updated"; 
	    } else {
	      return 'Please enter more then 8 characters';
	    }
	 }

	 public function getUserAssignToToken($token)
	 {
	 	$pdo = $this->Connect();
        $sql = "SELECT * FROM ConfirmCode WHERE code = ? limit 1";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$token]);
        $data = $stmt->fetch();
        return $data;
	 }
}
?>
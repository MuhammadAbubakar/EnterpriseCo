<?php
include 'config.inc.php';

class User extends Database{
    public function getUserData($username){
    	$username = $username;
    	$pdo = $this->Connect();
        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$username]);
        $data = $stmt->fetchAll();
		foreach ($data as $username) {
			return $username->password;
		}
    }

    public function checkUser($username){
    	$pdo = $this->Connect();
		$sql = $pdo->prepare("SELECT * FROM users WHERE username = ?");
		$sql -> execute([$username]);
		if ($sql->rowCount()) {
			echo 'User Exit';
		} else {
			echo 'Premission Denied';
		}
    }

    public function newUser($username,$password,$email,$role){
    	$pdo = $this->Connect();
    	$sql = "INSERT INTO users(username,password,email,role) VALUES(:username,:password,:email,:role)";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(['username'=>$username,'password'=>md5($password),"email"=>$email,"role"=>$role]);
		return 'Username Created';
    }

    public function deleteUser($id){
    	$pdo = $this->Connect();
    	$sql = "DELETE FROM users WHERE id = ?";
		$stmt = $pdo->prepare($sql);
		$stmt->execute([$id]);
		return 'Username Removed';
    }

    public function updateUser($id,$username){
    	$pdo = $this->Connect();
    	$sql = "UPDATE users SET username = :username WHERE id = :id";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(['username'=>$username,'id'=>$id]);
		echo 'Username Updated';
    }
}

$object = new User;
echo $object->updateUser("4","blackhacker");
?>
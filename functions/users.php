<?php
class User extends Database{
    public function getUserData($username){
        $pdo = $this->Connect();
        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$username]);
        $data = $stmt->fetch();
        return $data;
    }

    public function getAllUsers(){
        $pdo = $this->Connect();
        $sql = "SELECT * FROM users";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }
    
    public function numUsers(){
        $pdo = $this->Connect();
        $sql = "SELECT COUNT(*) FROM users";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchColumn();
        return $data;
    }

   public function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!+@#$%^&*/';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
 }
    public function checkUser($username){
    	$pdo = $this->Connect();
		$sql = $pdo->prepare("SELECT * FROM users WHERE username = ?");
		$sql -> execute([$username]);
		if ($sql->rowCount()) {
			return 'User Exit';
		} else {
			return 'Premission Denied';
		}
    }

    public function newUser($username,$password,$email,$role){
        if ($this->checkUser($username) == "User Exit") {
            return 'Username Exist';
        } else {
            $pdo = $this->Connect();
            $sql = "INSERT INTO users(username,password,email,role) VALUES(:username,:password,:email,:role)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['username'=>$username,'password'=>md5($password),"email"=>$email,"role"=>$role]);
            return 'Account Has Been Created';   
        }
    }

    public function deleteUser($id){
    	$pdo = $this->Connect();
    	$sql = "DELETE FROM users WHERE id IN ($id)";
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		return 'Username Removed';
    }

    public function updateUser($id,$username,$password,$email,$role,$avatar){
    	$pdo = $this->Connect();
        $user = $this->getUserData($username);
        if ($user->username == $username) {
                $newUser = $user->username;
            } else {
                $newUser = $username;
            }

            if ($user->password == md5($password)) {
                $newPassword = $user->password;
            } else {
                $newPassword = md5($password);
            }

            if ($user->email == $email) {
                $newEmail = $user->email;
            } else {
                $newEmail = $email;
            }

            if ($user->role == $role) {
                $newRole = $user->role;
            } else {
                $newRole = $role;
            }
            if ($user->avatar == $avatar) {
                $newAvatar = $user->avatar;
            } else {
                $newAvatar = $avatar;
            }

    	$sql = "UPDATE users SET username = :username,
        password = :password,
        email=:email,
        role=:role,
        avatar=:avatar WHERE id = :id";

		$stmt = $pdo->prepare($sql);
		$stmt->execute(['username'=>$newUser,'password'=>$newPassword,'email'=>$newEmail,'role'=>$newRole,'avatar'=>$newAvatar,'id'=>$id]);
		return 'Username Updated';
    }
}
?>
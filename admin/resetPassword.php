<?php 
require 'config.php';
session_start();
  $key = $_GET['key'];
  $userequest = "SELECT * FROM ConfirmCode WHERE code='$key' limit 1";
  $result=mysqli_query($conn,$userequest);
  $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
  $username = $row['username'];

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $Password = md5($_POST['password']);
  $confirmPassword = md5($_POST['confirmPassword']);
  if ($Password == $confirmPassword) {
  	if (strlen($_POST['password']) >= 8) {
    $sql = "UPDATE admin SET password='$Password' WHERE username='$username'";
    $newcuser = mysqli_query($conn,$sql);
    $msg = "Password Has Been Updated";	
  	} else {
  		$errmsg = 'Please enter more then 8 characters';
  	}
  } else {
    $errmsg = "Password Confirm is incorrect";
  }
}
  session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>EnterpriseCo - Reset Password</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Reset Password</div>
      <div class="card-body">
         <div class="text-center">
            <?php   
              if(isset($msg)) {
                echo '<div class="alert alert-success" role="alert"><b class="text-success">'.$msg."</b></div>";
                } elseif(isset($errmsg)) {
                  echo '<div class="alert alert-danger" role="alert"><b class="text-danger">'.$errmsg."</b></div>";
                } else {
                  // Nothing
                }
              ?>
          </div>
        <div class="text-center mb-4">

          <h4>Reset Password</h4>
          <p>Please enter a strong password that contains 8 characters and at least one special character</p>
        </div>
        <form method="POST" action="">

          <div class="form-group">
            <div class="form-label-group">
              <input type="password" name="password" id="password" class="form-control" placeholder="Enter your new password" required="required" autofocus="autofocus">
              <label for="password">New Password</label>
            </div>
          </div>

          <div class="form-group">
            <div class="form-label-group">
              <input type="password" name="confirmPassword" id="confirmPassword" class="form-control" placeholder="Enter your password again" required="required" autofocus="autofocus">
              <label for="confirmPassword">Confirm Password</label>
            </div>
        </div>
          <button class="btn btn-primary btn-block" type="submit">Reset Password</button>

        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.php">Register an Account</a>
          <a class="d-block small" href="login.php">Login Page</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>

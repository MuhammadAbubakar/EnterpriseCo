<?php 
require '../functions/config.inc.php';
include '../functions/users.php';
include '../functions/passwords.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username =isset($_POST['username']) ? $_POST['username']: '';
    $resetPassword = new ResetPassword;
   $msg = $resetPassword -> sendEmail($username);
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>EnterpriseCo - Forgot Password</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="src/css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Reset Password</div>
      <div class="card-body">
         <div class="text-center">
            <?php   
              if(isset($msg)) {
                echo '<div class="alert alert-primary" role="alert"><b class="text-primary">'.$msg."</b></div>";
                }
              ?>
          </div>
        <div class="text-center mb-4">

          <h4>Forgot your password?</h4>
          <p>Enter your username and we will send you instructions on how to reset your password.</p>
        </div>
        <form method="POST" action="">
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" name="username" id="username" class="form-control" placeholder="Enter" required="required" autofocus="autofocus">
              <label for="username">Username</label>
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

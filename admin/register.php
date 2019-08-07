<?php 
require '../functions/config.inc.php';
include '../functions/users.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $fname = isset($_POST['firstName']) ? $_POST['firstName']: ''; 
  $lname = isset($_POST['lastName']) ? $_POST['lastName']: ''; 
  $Username = isset($_POST['Username']) ? $_POST['Username']: ''; 
  $Password = isset($_POST['Password']) ? $_POST['Password']: ''; 
  $confirmPassword = isset($_POST['confirmPassword']) ? $_POST['confirmPassword']: '';
  $email = isset($_POST['Email']) ? $_POST['Email']: '';
  $role = "user";

  $db = new User;
  if ($Password != $confirmPassword) {
    $msg = "Password Confirm is incorrect";
  } else {
    $msg = $db->newUser($fname,$lname,$Username,$Password,$email,$role,"../src/img/blank.png");
  }
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

  <title>SB Admin - Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="src/css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        <form method="POST">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="firstName" class="form-control" placeholder="First name" required="required" autofocus="autofocus">
                  <label for="firstName">First name</label>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="lastName" class="form-control" placeholder="Last name" required="required">
                  <label for="lastName">Last name</label>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="form-label-group">
              <input type="text" name="Username" id="Username" class="form-control" placeholder="Username" required="required">
              <label for="Username">Username</label>
            </div>
          </div>

          <div class="form-group">
            <div class="form-label-group">
              <input type="email" name="Email" id="Email" class="form-control" placeholder="Email address" required="required">
              <label for="Email">Email address</label>
            </div>
          </div>

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" name="Password" id="Password" class="form-control" placeholder="Password" required="required">
                  <label for="Password">Password</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" name="confirmPassword" id="confirmPassword" class="form-control" placeholder="Confirm password" required="required">
                  <label for="confirmPassword">Confirm password</label>
                </div>
              </div>
            </div>
          </div>
          <button class="btn btn-primary btn-block" type="submit">Register</button>
        <?php 
          if (isset($msg)){
            echo $msg;
          }
          ?>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.php">Login Page</a>
          <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
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

<?php
  include '../functions/config.inc.php';
  include '../functions/login.php';
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
     $username = $_POST['Username'];
     $password = $_POST['Password'];
     $login = new Login;
     $logme = $login->newLogin($username,$password);
     $row = $logme->fetch();
     $userCount = $logme->rowCount();
    if($userCount  == 1) {
      if($row->role == "administrator" or $row->role == "user"){
       $_SESSION['login_user'] = $username;
       exit(header("location: index.php"));  
    } else {
         $error = "Access Denied You Are Not Admin.";
   }
      } else {
         $error = "Username or Password is Incorrect.";
      }

      if (isset($_POST['remember_me'])) {
        $remember_me = $_POST['remember_me'];
        if ($remember_me == "yes") {
          $hour = time() + 3600 * 24 * 30;
          setcookie('Username', $login, $hour);
          setcookie('Password', $password, $hour);
        } 
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

  <title>EnterpriseCo - Login</title>

  <!-- Custom fonts for this template-->
  <link href="../admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="../admin/src/css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <div class="text-center">
            <?php   
              if(isset($error)) {
                echo '<div class="alert alert-danger" role="alert"><b class="text-danger">'.$error."</b></div>";
              }
              ?>
      </div>
        <form method="POST">
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" name="Username" id="Username" class="form-control" placeholder="Username" required="required" autofocus="autofocus">
              <label for="Username">Username</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" name="Password" id="Password" class="form-control" placeholder="Password" required="required">
              <label for="Password">Password</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" id="remember_me"  name="remember_me"  value="yes">
                Remember Password
              </label>
            </div>
          </div>
          <button class="btn btn-primary btn-block" type="submit">Login</button>
          
            <div class="text-lef">

          </div>
        
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.php">Register an Account</a>
          <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../admin/vendor/jquery/jquery.min.js"></script>
  <script src="../admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../admin/vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>

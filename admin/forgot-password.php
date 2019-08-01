<?php 
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $token = md5(uniqid(rand(), true));
  if(isset($_POST['email']) && $_POST['email'] != ''){
    $myemail = $_POST['email'];
    if(check_email($myemail)){
    
   } else {
    $emailErr = "error";
  }
}

  if(isset($emailErr)) {
    $messageerror = "Invalid email address";
  } else {

    $header = "From: noreply@thunderhost.xyz"; 
    if (mail($myemail, "Rest Password Code", "",$header)) {
        $messageerror = "One or more critical errors have occurred.";
    } else {
        $regquiry = "INSERT INTO ConfirmCode (username,code) VALUES ('$username','$token')";
        $newcuser = mysqli_query($conn,$regquiry);
        $messagesend = "Instructions has been send to your email";
    }
  } 
}

function check_email($email) {
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
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Reset Password</div>
      <div class="card-body">
         <div class="text-center">
            <?php   
              if(isset($messagesend)) {
                echo '<div class="alert alert-success" role="alert"><b class="text-success">'.$messagesend."</b></div>";
                
                } elseif(isset($messageerror)) {
                  echo '<div class="alert alert-danger" role="alert"><b class="text-danger">'.$messageerror."</b></div>";
                } else {
                  // Nothing
                }
              ?>
          </div>
        <div class="text-center mb-4">

          <h4>Forgot your password?</h4>
          <p>Enter your email address and we will send you instructions on how to reset your password.</p>
        </div>
        <form method="POST" action="">
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" name="email" id="email" class="form-control" placeholder="Enter email address" required="required" autofocus="autofocus">
              <label for="email">Email Address</label>
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

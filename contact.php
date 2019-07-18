<?php
require 'send.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>EnterpriseCo - Contact Us</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="shortcut icon" href="http://icons.iconarchive.com/icons/chanut/role-playing/128/Monster-icon.png">
    <link rel="stylesheet" href="src/css/bootstrap.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="src/css/custom.css">
    <script type="text/javascript" src="src/js/scrool-smooth.js"></script>
    <script type="text/javascript" src="src/js/imgload.js"></script>
    <script type="text/javascript" src="src/js/cookies.js"></script>
    <style type="text/css">
    	.pt{
			padding: 150px 0px 50px 0px;
    	}
    </style>
</head>
<body class="d-flex flex-column h-100">
	
	<nav class="navbar navbar-expand-md navbar-dark bg-primary hidden-lg-up">
    <div class="container">
    <a class="navbar-brand" href="#">EnterpriseCo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-easing="easeInQuad" href="#services">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-easing="easeInQuad" href="#pricing">Prices</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-easing="easeInQuad" href="#team">Our Team</a>
      </li>
    </ul>
 <ul class="navbar-nav ml-auto">
  <li class="nav-item">
  <a href="#"><button class="btn btn-primary">Contact Us</button></a>
  </li>
 </ul>
  </div>
</div>
 </nav>
 <div class="wrapper pt">
 	<div class="flex-shrink-0">
	<div class="h2 text-center">
		<h2>Contact Us</h2>
	</div>

   <form method='POST' class='form-signin'>

 <div class="form-row">
    <div class="col">
      <input id="fname" name="fname" type="text" class="form-control" 
        <?php
            if(!isset($_POST['fname'])) {
                    echo 'placeholder="First Name"';
                  } else { 
                   if($fname == '') {
                      echo 'placeholder="First Name"';
                    } else {
                    echo 'value='.'"'.$fname.'"';
                  }
                  }
                  ?> 
      required >
    </div>
    <div class="col">
      <input id="lname" name="lname" type="text" class="form-control"

        <?php
            if(!isset($_POST['lname'])) {
                    echo 'placeholder="Last Name"';
                  } else { 
                   if($lname == '') {
                      echo 'placeholder="Last Name"';
                    } else {
                    echo 'value='.'"'.$lname.'"';
                  }
                  }
                  ?> 
                  required>
    </div>
  </div>

    <div class='form-group pt-3'>
      <input id="email" name="email" type='email' class='form-control' 
        <?php
            if(!isset($_POST['email'])) {
                    echo 'placeholder="Enter email"';
                  } else { 
                   if($email == '') {
                      echo 'placeholder="Enter email"';
                    } else {
                    echo 'value='.'"'.$email.'"';
                  }
                  }
                  ?> 
      required> 
    </div>

    <div class='form-group'>
      <input id="subject" name="subject" type='text' class='form-control' 
        <?php
            if(!isset($_POST['subject'])) {
                    echo 'placeholder="Subject"';
                  } else { 
                   if($subject == '') {
                      echo 'placeholder="Subject"';
                    } else {
                    echo 'value='.'"'.$subject.'"';
                  }
                  }
                  ?> 
       required>
    </div>

    <div class='form-group'>
          <textarea required wrap='soft' class ="form-control" name="message" id="message" rows="5" <?php
                  if(!isset($_POST['message'])) {
                      echo 'wrap="soft" rows="5" placeholder="Enter your message."'.">".'</textarea>';
                    } else {
                        if($message == '') {
                          echo 'wrap="soft" rows="5" placeholder="Enter your message."'.">".'</textarea>';
                         } else {
                      echo ">".$message.'</textarea>';
                    } 
                  }
                  ?> 
    </div>

  <div class="form-group">
    <div class="custom-control custom-checkbox text-center">
      <input type="checkbox" class="custom-control-input" id="customCheck1" required>
      <label class="custom-control-label" for="customCheck1">I'm a Human</label>
    </div>
  </div>

      <button type='submit' class='btn btn-primary btn-block'>Submit</button>
                <?php   
            echo '<div class="text-center"';
              if(isset($messagesend)) {
               
                echo '<br />';
                echo '<div class="alert alert-success" role="alert"><b class="text-white">'.$messagesend."</b></div>";

                } elseif(isset($messageerror)) {
                  echo '<br />';
                  echo '<div class="alert alert-danger" role="alert"><b class="text-white">'.$messageerror."</b></div>";
                } else {
                  // Nothing
                }
                echo '</div>';
                ?>

    </form>
    <!-- Footer -->

</div>

 </div>



 <div class="container my-md-5 pt-md-5 footer mt-auto py-3 navbar-fixed-bottom">
  <div class="container text-center pt-5">
    <ul class="list-inline h4">
      <li class="list-inline-item circle"><a href="#"><i class="onhover fa fa-twitter fa-stack circle-twitter"></i></a></li>
      <li class="list-inline-item circle"><a href="#"><i class="onhover fa fa-facebook fa-stack circle-facebook"></i></a></li>
      <li class="list-inline-item circle"><a href="#"><i class="onhover fa fa-linkedin fa-stack circle-linkedin"></i></a></li>
      <li class="list-inline-item circle"><a href="#"><i class="onhover fa fa-instagram fa-stack circle-instagram"></i></a></li>
      <li class="list-inline-item circle"><a href="#"><i class="onhover fa fa-snapchat-ghost fa-stack circle-snapchat"></i></a></li>
    </ul>
</div>
  <footer class="pt-4 my-md-5 pt-md-5 border-top footer mt-auto py-3">
    <div class="row">
      <div class="col-12 col-md">
        <img class="mb-2" src="src/img/beard.svg" alt="" width="30" height="30" class="img-fluid">
        <small class="d-block mb-3 text-muted">&copy; 2017-2019 - Made with <span class="fa fa-heart"></span> by SnakeDesign</small>
    <ul class="list-inline">
      <li class="list-inline-item payment"><i class="fa fa-cc-paypal"></i></li>
      <li class="list-inline-item payment"><i class="fa fa-cc-visa"></i></li>
      <li class="list-inline-item payment"><i class="fa fa-cc-mastercard"></i></li>
      <li class="list-inline-item payment"><i class="fa fa-cc-discover"></i></li>
      <li class="list-inline-item payment"><i class="fa fa-cc-amex"></i></li>
    </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Features</h5>
        <ul class="list-unstyled text-small">
          <li><a class="link" href="#">Cool stuff</a></li>
          <li><a class="link" href="#">Random feature</a></li>
          <li><a class="link" href="#">Team feature</a></li>
          <li><a class="link" href="#">Stuff for developers</a></li>
          <li><a class="link" href="#">Another one</a></li>
          <li><a class="link" href="#">Last time</a></li>
        </ul>
        
      </div>
      <div class="col-6 col-md">
        <h5>Resources</h5>
        <ul class="list-unstyled text-small">
          <li><a class="link" href="#">Resource</a></li>
          <li><a class="link" href="#">Resource name</a></li>
          <li><a class="link" href="#">Another resource</a></li>
          <li><a class="link" href="#">Final resource</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>About</h5>
        <ul class="list-unstyled text-small">
          <li><a class="link" href="#">Team</a></li>
          <li><a class="link" href="#">Locations</a></li>
          <li><a class="link" href="#">Privacy</a></li>
          <li><a class="link" href="#">Terms</a></li>
        </ul>
      </div>
    </div>
  </footer>
 </div>
</body>
</html>
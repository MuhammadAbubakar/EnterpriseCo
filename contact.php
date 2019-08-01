
<?php
require 'send.php';
?>
<!DOCTYPE html>
<html>
<head>
 <title>EnterpriseCo - اتصل بنا</title>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//cdn.rawgit.com/morteza/bootstrap-rtl/v3.3.4/dist/css/bootstrap-rtl.min.css">
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
   padding: 200px 0px 50px 0px;
     }

     .msg_container{
      width: 100px;
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
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">اﻟﺮﺋﻴﺴﻴﻪ<span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-easing="easeInQuad" href="#services">ﺧﺪاﻣﺎﺗﻨﺎ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-easing="easeInQuad" href="#pricing">اﻻﺳﻌﺎﺭ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-easing="easeInQuad" href="#team">ﻓﺮﻳﻖ اﻟﻌﻤﻞ</a>
      </li>
    </ul>
 <ul class="navbar-nav mr-auto">
  <li class="nav-item">
  <a href="#"><button class="btn btn-primary">اﺗﺼﻞ ﺑﻨﺎ</button></a>
  </li>
 </ul>
  </div>
</div>
 </nav>

 <div class="wrapper pt">

      <?php
      echo '<div class="container">';
         echo '<div class="form-row justify-content-center">';
            echo '<div class="text-center">';
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
              echo '</div>';
            echo '</div>';
             ?>
              
  <div class="flex-shrink-0">
 <div class="h2 text-center">
  <h2>اﺗــﺼــﻞ ﺑــﻨــﺎ</h2>
 </div>

   <form method='POST' class='form-signin'>

 <div class="form-row">
    <div class="col">
      <input id="fname" name="fname" type="text" class="form-control" 
        <?php
            if(!isset($_POST['fname'])) {
                    echo 'placeholder="اﻻﺳﻢ اﻻﻭﻝ"';
                  } else { 
                   if($fname == '') {
                      echo 'placeholder="اﻻﺳﻢ اﻻﻭﻝ"';
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
                    echo 'placeholder="اﻻﺳﻢ اﻻﺧﻴﺮ"';
                  } else { 
                   if($lname == '') {
                      echo 'placeholder="اﻻﺳﻢ اﻻﺧﻴﺮ"';
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
                    echo 'placeholder="اﻟﺒﺮﻳﺪ اﻷﻟﻜﺘﺮﻭﻧﻲ"';
                  } else { 
                   if($email == '') {
                      echo 'placeholder="اﻟﺒﺮﻳﺪ اﻷﻟﻜﺘﺮﻭﻧﻲ"';
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
                    echo 'placeholder="اﻟﻌﺘﻮاﻥ"';
                  } else { 
                   if($subject == '') {
                      echo 'placeholder="اﻟﻌﻨﻮاﻥ"';
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
                      echo 'wrap="soft" rows="5" placeholder="اﺩﺧﻞ ﺭﺳﺎﻟﺘﻚ ﻫﻨﺎ."'.">".'</textarea>';
                    } else {
                        if($message == '') {
                          echo 'wrap="soft" rows="5" placeholder="اﺩﺧﻞ ﺭﺳﺎﻟﺘﻚ ﻫﻨﺎ."'.">".'</textarea>';
                         } else {
                      echo ">".$message.'</textarea>';
                    } 
                  }
                  ?> 
    </div>

  <div class="form-group">
    <div class="custom-control custom-checkbox text-center">
      <input type="checkbox" class="custom-control-input" id="customCheck1" required>
      <label class="custom-control-label" for="customCheck1">اﻧﺎ ﻟﺴﺖ ﺭﻭﺑﻮﺕ</label>
    </div>
  </div>
      <button type='submit' class='btn btn-primary btn-block'>اﺭﺳﺎﻝ اﻟﺮﺳﺎﻟﺔ</button>
    </form>
    <!-- Footer -->

</div>

 </div>



 <div class="container my-md-5 footer navbar-fixed-bottom">
  <div class="container text-center pt-5">
    <ul class="list-inline h4">
      <li class="list-inline-item circle"><a href="#"><i class="onhover fa fa-twitter fa-stack circle-twitter"></i></a></li>
      <li class="list-inline-item circle"><a href="#"><i class="onhover fa fa-facebook fa-stack circle-facebook"></i></a></li>
      <li class="list-inline-item circle"><a href="#"><i class="onhover fa fa-linkedin fa-stack circle-linkedin"></i></a></li>
      <li class="list-inline-item circle"><a href="#"><i class="onhover fa fa-instagram fa-stack circle-instagram"></i></a></li>
      <li class="list-inline-item circle"><a href="#"><i class="onhover fa fa-snapchat-ghost fa-stack circle-snapchat"></i></a></li>
      <li></li>
    </ul>
</div>
  <footer class="pt-4 my-md-5 pt-md-5 border-top footer mt-auto py-3">
    <div class="row">
      <div class="col-12 col-md">
        <img class="mb-2" src="src/img/beard.svg" alt="" width="30" height="30" class="img-fluid">
        <small class="d-block mb-3 text-muted">&copy; 2017-2019 - ﺻﻨﻊ ﺑﻜﻞ <span class="fa fa-heart"></span>ﻣﻦ ﻗﺒﻞ ﺳﻨﻴﻚ ﺩﻳﺰاﻳﻦ</small>
    <ul class="list-inline">
      <li class="list-inline-item payment"><i class="fa fa-cc-paypal"></i></li>
      <li class="list-inline-item payment"><i class="fa fa-cc-visa"></i></li>
      <li class="list-inline-item payment"><i class="fa fa-cc-mastercard"></i></li>
      <li class="list-inline-item payment"><i class="fa fa-cc-discover"></i></li>
      <li class="list-inline-item payment"><i class="fa fa-cc-amex"></i></li>
      <li></li>
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
          <li></li>
        </ul>
      </div>
    </div>
  </footer>
 </div>
</body>
</html>

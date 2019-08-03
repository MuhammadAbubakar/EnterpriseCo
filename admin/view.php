<?php
require 'config.php';
include 'session.php';
header('Content-Type:text/html; charset=UTF-8');
$id = $_GET['id'];
$retriveorders = "SELECT * FROM Orders WHERE id='$id'";
mysqli_query($conn,"SET NAMES 'utf8'");
$printorders = mysqli_query($conn,$retriveorders);
$rows = mysqli_fetch_array($printorders, MYSQLI_ASSOC);
if ($login_session != $row['username']){
    exit(header("Location: logout.php"));
}
if (isset($_GET['status'])) {
switch ($_GET['status']) {
  case "Open":
      $sql = "UPDATE Orders SET Status='Open' WHERE id='$id'";
      $UpdateStatus = mysqli_query($conn,$sql);
    break;

    case "Close":
      $sql = "UPDATE Orders SET Status='Close' WHERE id='$id'";
      $UpdateStatus = mysqli_query($conn,$sql);
    break;

    case "Pending":
      $sql = "UPDATE Orders SET Status='Pending' WHERE id='$id'";
      $UpdateStatus = mysqli_query($conn,$sql);
    break;
}
}

if (isset($_GET['email'])) {
$header = "From: noreply@example.com\r\n"; 
$header.= "MIME-Version: 1.0\r\n"; 
$header.= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$header.= "X-Priority: 1\r\n";
mail($_POST['email'], $_POST['subject'], $_POST['comment'],$header);

   $sendmsg = "Message has been send"; 

}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="minified/themes/default.min.css" />
    <script src="minified/sceditor.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>EnterpriseCo - Review Order</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
	<script src="minified/formats/xhtml.js"></script>
  </head>
  <body id="page-top">
    <nav class="navbar navbar-toggleable-md navbar-dark bg-dark static-top">
      <a class="navbar-brand mr-1" href="index.php">EnterpriseCo</a>

    <span class="navbar-text d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      Welcome <?php echo $login_session; ?> - <a href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
    </span>


    </nav>
    <div id="wrapper">
      <div id="content-wrapper">
        <div class="container-fluid">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Review Order</li>
          </ol>

<div class="card mx-auto" style="width: 50rem;">
  <div class="card-header"><?php echo "Ticket Number : #".$rows['OrderNum']."<br>"."Subject : ".$rows['Subject']; ?> </div>
  <div class="card-body" charset="UTF-8"><?php  echo  $rows['Message']; ?></div>
  <div class="card-footer">
<form>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Select Status
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="view.php?id=<?php echo $_GET['id']."&status=Open"; ?>">Open</a>
    <a class="dropdown-item" href="view.php?id=<?php echo $_GET['id']."&status=Close"; ?>">Close</a>
    <a class="dropdown-item" href="view.php?id=<?php echo $_GET['id']."&status=Pending"; ?>">Pending</a>
  </div>
</div>
</form>
</div>
</div>
<br />

<div class="text-center justify-content-center mx-auto">
  <div class="card justify-content-center mx-auto" style="width: 50rem;">
  <div class="card-header">Contact Form</div>
  <div class="card-body">
      <form method='POST' class='form-signin'>


    <div class='form-group pt-3'>
      <input id="email" name="email" type='email' class='form-control' value=" <?php echo $rows['Email']; ?>" 
      required> 
    </div>

    <div class='form-group'>
      <input id="subject" name="subject" type='text' value="Reply: <?php echo($rows['Subject']); ?>" class='form-control' 
       required>
    </div>

    <div class='form-group'>
          <textarea required wrap='soft' class ="form-control" name="message" id="message" rows="15" cols="15" wrap="soft" placeholder="Enter your message."></textarea>
    </div>

      <button type='submit' class='btn btn-primary btn-block'>Submit</button>
      <?php
      if (isset($sendmsg)) {
        echo $sendmsg;
      }

       ?>

    </form>
  </div>
</div>
</div>

<br />
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © EnterpriseCo - <?php echo date("Y"); ?></span>
            </div>
          </div>
        </footer>

      </div>
    </div>
    <!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin.min.js"></script>
    <script src="minified/formats/xhtml.min.js"></script>
<script>
// Replace the textarea #example with SCEditor
var textarea = document.getElementById('message');
sceditor.create(textarea, {
  format: 'xhtml',
  autofocus: true,
  style: 'minified/themes/content/default.min.css',
  colors: '#1abc9c,#2ecc71,#3498db,#9b59b6,#34495e,#16a085|#16a085,#27ae60,#2980b9,#8e44ad,#2c3e50,#f1c40f|#e67e22,#e74c3c,#ecf0f1,#95a5a6,#f39c12,#d35400|#c0392b,#bdc3c7,#7f8c8d,#B53471,#0652DD,#006266|#474787,#ff793f,#ff5252,#b33939,#ffb142,#34ace0|#000,#40739e,#aaa69d,#1e272e,#ffc048,#575fcf',
  width: "100%",
  resizeEnabled: false,
  emoticons:{
    dropdown: {
        ':)': 'emoticons/smile.png',
        ':(': 'emoticons/sad.png',
        ":D": 'emoticons/grin.png',
        ";P": 'emoticons/razz.png',
        ":-)": 'emoticons/razz.png',
        "B)": 'emoticons/cool.png',
        "8o": 'emoticons/eek.png',
        ":?": 'emoticons/confused.png',
        "8)": 'emoticons/glasses.png',
        ";)": 'emoticons/wink.png',
        ":-*": 'emoticons/kiss.png',
        ":-(": 'emoticons/crying.png',
      },
      more: {
        ":|": 'emoticons/plain.png',
        "O:-D": 'emoticons/angel.png',
        ":-@": 'emoticons/devilish.png',
        ":alien": 'emoticons/alien.png',
        ":ninja": 'emoticons/ninja.png',
        ":whistling": 'emoticons/whistling.png',
        ":facepalm": 'emoticons/facepalm.png',
        ":sick": 'emoticons/sick.png',
        ":rose": 'emoticons/D1.gif',
        ":warning": 'emoticons/icon4.gif',
        ":o)": 'emoticons/monkey.png',
        "brb": 'emoticons/brb.png',
        ":warn": 'emoticons/warn.png',
        ":help": 'emoticons/help.png',
        ":sos": 'emoticons/55.gif',
        ":bad": 'emoticons/bad.png',
        ":love": 'emoticons/love.png',
        ":idea": 'emoticons/idea.png',
        ":bomb": 'emoticons/bomb.png',
        ":!": 'emoticons/important.png',
    },
  }
});
</script>
  </body>
</html>
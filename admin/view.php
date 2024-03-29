<?php
require '../functions/config.inc.php';
include '../functions/orders.php';
require 'session.php';
$view = new Order;
$rows = $view->getOrder($_GET['id']);

if (isset($_GET['status'])) {
  $view -> setStatus($_GET['id'],$_GET['status']);
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (isset($_POST['email'])) {
    $sendmsg = $view->sendEmail($_POST['email'],$_POST['subject'],$_POST['message']);
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="src/minified/themes/default.min.css" />
    <script src="src/minified/sceditor.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>EnterpriseCo - Review Order</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="src/css/sb-admin.css" rel="stylesheet">
	<script src="src/minified/formats/xhtml.js"></script>
  </head>
  <body id="page-top">
  <?php include 'template/default/Header.inc.php'; ?>
    <div id="wrapper">
        <?php include 'template/default/Navbar.inc.php'; ?>
      <div id="content-wrapper">
        <div class="container-fluid">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Review Order</li>
          </ol>

<div class="card mx-auto" style="width: 50rem;">
  <div class="card-header"><?php echo "Ticket Number : #".$rows->OrderNum."<br>"."Subject : ".$rows->Subject; ?> </div>
  <div class="card-body" charset="UTF-8"><?php  echo  $rows->Message?></div>
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
      <input id="email" name="email" type='email' class='form-control' value=" <?php echo $rows->Email; ?>" 
      required> 
    </div>

    <div class='form-group'>
      <input id="subject" name="subject" type='text' value="Reply: <?php echo($rows->Subject); ?>" class='form-control' 
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
    <script src="src/js/sb-admin.min.js"></script>
    <script src="src/minified/formats/xhtml.min.js"></script>
<script>
// Replace the textarea #example with SCEditor
var textarea = document.getElementById('message');
sceditor.create(textarea, {
  format: 'xhtml',
  autofocus: true,
  style: 'src/minified/themes/content/default.min.css',
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
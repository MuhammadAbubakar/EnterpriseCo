<?php
require '../functions/config.inc.php';
include '../functions/settings.php';
include 'session.php';

if ($login_session != $data->username){
    exit(header("Location: logout.php"));
  }
  $settings = new Settings;
  $wSettings = $settings->getSettings();

  if ($_SERVER['REQUEST_METHOD'] == "POST") {
   $msg = $settings->changesettings($_POST['Title'],$_POST['URL'],$_POST['Favicon'],$_POST['Description'],$_POST['Email']);
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

  <title>EnterpriseCo - Website Settings</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="src/css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">
  <?php include 'template/default/Header.inc.php'; ?>



  <div id="wrapper">

   <?php include 'template/default/Navbar.inc.php'; ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Settings</li>
        </ol>

        <!-- Icon Cards-->


        <!-- Area Chart Example-->



        <!-- DataTables Example -->
        <div class="card mx-auto" style="width: 50rem;">
          <div class="card-header">
            <i class="fas fa-wrench"></i>
            WebSite Settings</div>
        <div class="card-body">
          <div class="container">

               <?php if (isset($msg)) {
                echo '<div class="alert alert-success">';
                  echo $msg;
                  echo '</div>';
               }
               ?>
            
          <form method="POST">
            <div class="form-group row">
              <label for="Title" class="col-sm-2 col-form-label">Website Title: </label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="Title" id="Title" value="<?php echo $wSettings->Title;  ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="URL" class="col-sm-2 col-form-label">Website URL: </label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="URL" id="URL" value="<?php echo $wSettings->URL; ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="URL" class="col-sm-2 col-form-label">Website Email: </label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="Email" id="Email" value="<?php echo $wSettings->websiteEmail; ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="URL" class="col-sm-2 col-form-label">Favicon: </label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="Favicon" id="Favicon" value="<?php echo $wSettings->FavIcon; ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="URL" class="col-sm-2 col-form-label">Description: </label>
              <div class="col-sm-10">
                <textarea type="text" class="form-control" name="Description" id="Description"><?php echo $wSettings->Description; ?></textarea>
              </div>
            </div>
            <div class="justify-content-center text-center">
              <button class="btn btn-primary btn-lg">Submit</button>
            </div>
          </form>
            </div>
          </div>
          <div class="card-footer small text-muted"> </div>
        </div>
</br>
      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <?php include 'template/default/Footer.inc.php';  ?>
    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

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

  <!-- Bootstrap core JavaScript-->
  <?php include 'template/default/Libs.inc.php';  ?>

</body>

</html>
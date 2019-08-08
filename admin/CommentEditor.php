<?php
require '../functions/config.inc.php';
include 'session.php';
include '../functions/comments.php';

$id = $_GET['id'];
if ($login_session != $data->username){
    exit(header("Location: logout.php"));
  }
  $comment = new Comments;
  $wComment = $comment->getComment($id);
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>EnterpriseCo - Edit Comment</title>

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
          <li class="breadcrumb-item active">Edit Comment</li>
        </ol>

        <!-- Icon Cards-->


        <!-- Area Chart Example-->



        <!-- DataTables Example -->
        <div class="card mx-auto" style="width: 50rem;">
          <div class="card-header">
            <i class="fas fa-wrench"></i>
            Comment Editor</div>
        <div class="card-body">
          <div class="container">

               <?php if (isset($_GET['msg'])) {
                echo '<div class="alert alert-success">';
                  echo "Comment has been edited";
                  echo '</div>';
               }
               ?>
            
          <form method="POST" action="includes/editComment.php">
            <input type="text" id="id" name="id" hidden="" value="<?php echo $id ?>">
            <div class="form-group row">
              <label for="Title" class="col-sm-2 col-form-label">Commentor Username: </label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="username" id="username" value="<?php echo $wComment->username;  ?>">
              </div>
            </div>

            <div class="form-group row">
              <label for="URL" class="col-sm-2 col-form-label">Comment: </label>
              <div class="col-sm-10">
                <textarea type="text" class="form-control" name="Comment" id="Comment"><?php echo $wComment->Comment; ?></textarea>
              </div>
            </div>

            <div class="form-group row">
              <label for="URL" class="col-sm-2 col-form-label">Post ID: </label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="PostID" id="PostID" value="<?php echo $wComment->PostID; ?>">
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
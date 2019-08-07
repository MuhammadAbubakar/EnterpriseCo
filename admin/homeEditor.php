<?php
require '../functions/config.inc.php';
include 'session.php';

if ($login_session != $data->username){
    exit(header("Location: logout.php"));
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

  <title>EnterpriseCo - FrontEnd Editor</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="src/css/sb-admin.css" rel="stylesheet">
<style type="text/css">
	textarea {
  width: 100%;
}
</style>
</style>
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
            Front-End Settings</div>
        <div class="card-body">
          <div class="container">

               <?php if (isset($_GET['msg'])) {
                echo '<div class="alert alert-success">';
                  echo "Page has been updated";
                  echo '</div>';
               }
               ?>
           
        <form method="POST">
 		  <div class="form-group">
		    <label for="filename">Select file to edit</label>
		    <select class="form-control" name="filename" id="filename">
		      <option value="../index.php">index.php</option>
		      <option value="../tags.php">tags.php</option>
		      <option value="../send.php">send.php</option>
		      <option value="../404.html">404.html</option>
		    </select>
		    <div class="pt-2">
		    	<button type="submit" class="btn btn-primary btn-block">Edit</button>
		    </div>
		  </div>
         </form>
          <form method="POST" action="includes/updateFrontEnd.php">
          	<?php 
                	if (isset($_POST['filename'])) {
                		$filename = $_POST['filename'];
                	} else {
                		$filename = "../index.php";
                	}
          	?>
          		<input type="text" name="filename" hidden="" id="filename" value="<?php echo $filename; ?>">
                <textarea id="editor" name="home_editor" data-editor="php" data-gutter="1" rows="15"><?php
                	echo @file_get_contents($filename);
                 ?></textarea>
            <div class="justify-content-center text-center pt-4">
              <button type="submit" class="btn btn-primary btn-lg ">Update</button>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.5/ace.js"></script>
<script>
$(function() {
  $('textarea[data-editor]').each(function() {
    var textarea = $(this);
    var mode = textarea.data('editor');
    var editDiv = $('<div>', {
      position: 'absolute',
      width: textarea.width(),
      height: textarea.height(),
      'class': textarea.attr('class')
    }).insertBefore(textarea);
    textarea.css('display', 'none');
    var editor = ace.edit(editDiv[0]);
    editor.renderer.setShowGutter(textarea.data('gutter'));
    editor.getSession().setValue(textarea.val());
    editor.getSession().setMode("ace/mode/" + mode);
    editor.setTheme("ace/theme/clouds_midnight");

    // copy back to textarea on form submit...
    textarea.closest('form').submit(function() {
      textarea.val(editor.getSession().getValue());
    })
  });
});
</script>
</body>


</html>
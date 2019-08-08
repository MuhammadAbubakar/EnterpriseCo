<?php
require '../functions/config.inc.php';
include 'session.php';
include '../functions/cat.php';


if ($login_session != $data->username){
    exit(header("Location: logout.php"));
  }
  $cat = new Categories;
  $getCats = $cat->getCatsWithOutLimit();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>EnterpriseCo - View Categories</title>

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
          <li class="breadcrumb-item active">Posts</li>
        </ol>

        <!-- Icon Cards-->


        <!-- Area Chart Example-->


        <!-- DataTables Example -->
      
        <div class="card mb-3">
          <div class="card-header">

         <form method="POST" action="includes/addCategory.php">
         	<div class="row">
         		<div class="col-3">
            <?php 
                if (isset($_GET['msg']) && $_GET['msg']  == "newCat") {
                  echo '<div class="alert alert-success">Category has been added</div>';
                }
             ?>
               <div class="input-group">
              <input type="text" class="form-control" name="name" id="name" placeholder="Category Name">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="submit">Add</button>
              </span>
            </div>
         		</div>
         	</div>
          </form>
          </div>
      <form method='POST' action="includes/deleteCategories.php">          
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Settings</th>
                  </tr>
                </thead>

                <tbody>
                 <?php
                 
                  foreach ($getCats as $category) {
                      echo "<tr>";
                      echo '<td><input type="checkbox" name="delete[]" value="'.$category->id.'"></td>';
                      echo '<td class="font-weight-bold">'.$category -> id.'</td>';
                      echo '<td class="font-weight-bold">'.$category -> name.'</td>';
                      echo '<td class="font-weight-bold">'.$category -> slug.'</td>';
                      echo '<td><a class="btn btn-primary text-white btn-block" href="CategoriesEditor.php?id='.$category->id.'">Edit</a></td>';
                      echo '</tr>';
                      }

                      ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">
            <?php 
            if (isset($_GET['msg']) && $_GET['msg'] == "delCat") {
              echo '<div class="alert alert-success">Post has been removed</div>';
            }
             ?>
      <?php echo "
        <div class='form-inline'>
          <div class='form-group mb-2'>
            <select id='settings' name='settings' class='form-control'>
              <option>Bulk Actions</option>
              <option value='Delete'>Delete</option>
            </select>
        </div>
        <button type='submit' class='btn btn-primary mb-2'>Submit</button>
        </div>
          " ?>
        </div>
        </div> 
      </form>
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
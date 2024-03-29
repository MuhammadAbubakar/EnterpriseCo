<?php
require '../functions/config.inc.php';
include '../functions/orders.php';
include '../functions/posts.php';
include 'session.php';
include '../functions/comments.php';

if ($login_session != $data->username){
    exit(header("Location: logout.php"));
  }
  
  if ($data->role != "administrator") {
    exit(header("Location: logout.php"));
  }

  $index = new Order;
  $post = new Posts;
  $comments = new Comments;
  $orders = $index->getAllOrders();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>EnterpriseCo - Dashboard</title>

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
          <li class="breadcrumb-item active">Overview</li>
        </ol>

        <!-- Icon Cards-->
          <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-comments"></i>
                </div>
                <div class="mr-5"><? echo $post->numRows(); ?> New Posts!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="viewPosts.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-user"></i>
                </div>
                <div class="mr-5"><?php echo $user->numUsers(); ?> Users!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="viewUsers.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5"><?php echo $index->numOfOrders(); ?> New Orders!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="index.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-comments"></i>
                </div>
                <div class="mr-5"><?php echo $comments->NumComments(); ?> New Comments!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="viewComments.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>


        <!-- Area Chart Example-->

<form method='POST' action="includes/removeOrders.php">
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Custmors Orders</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Ticket Number</th>
                    <th>Subject</th>
                    <th>Status</th>
                    <th>Settings</th>
                  </tr>
                </thead>

                <tbody>
                 <?php
                  foreach ($orders as $order) {
                    echo "<tr>";
                    echo '<td><input type="checkbox" name="delete[]" value="'.$order->id.'"></td>';
                      echo '<td>'.$order -> id.'</td>';
                        echo '<td>'.$order -> FullName.'</td>';
                        echo '<td>'.$order -> Email.'</td>';
                        echo '<td>'.$order -> OrderNum.'</td>';
                        echo  '<td>'.$order -> Subject.'</td>';
                        echo '<td>';
                          switch ($order -> Status) {
                           case "Open":
                             echo '<b style="color: #2ecc71;">Open</b>';
                             break;
                             case "Close":
                               echo '<b style="color:#e74c3c;">Close</b>';
                              break;

                              case "Pending":
                               echo '<b style="color: #e67e22;">Pending</b>';  
                              break;
                           
                           default:
                            echo 'Error';
                             break;
                         }
                          echo '</td>';
                          echo '<td><a href="'."view.php?id=".$order -> id.'">View</a></td>';
                          echo '</tr>';   
                      }
                      ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">
            <?php 
            if (isset($_GET['msg'])) {
              echo '<div class="alert alert-success">Orders has been removed</div>';
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
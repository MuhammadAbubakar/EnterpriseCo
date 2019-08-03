<?php
include 'session.php';
include '../functions/orders.php';
if ($login_session != $data->username){
    exit(header("Location: logout.php"));
  }
  $index = new Order;
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
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.php">EnterpriseCo</a>

    <!-- Navbar Search -->
    <span class="navbar-text d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      Welcome <?php echo $login_session; ?> - <a href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
    </span>

    <!-- Navbar -->
    
  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
   

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

          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5">123 New Orders!</div>
              </div>
            </div>
          </div>

        <!-- Area Chart Example-->


        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Support Tickets</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
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
                      echo '<tr><td>'.$order -> id.'</td>';
                        echo '<td>'.$order -> FullName.'</td>';
                        echo '<td>'.$order -> Email.'</td>';
                        echo '<td>'.$order -> OrderNum.'</td>';
                        echo  '<td>'.$order -> Subject.'</td>';
                        echo '<td>';
                          switch ($order -> Status) {
                           case "Open":
                             echo '<b style="color: green;">Open</b>';
                             break;
                             case "Close":
                               echo '<b style="color:red;">Close</b>';
                              break;

                              case "Pending":
                               echo '<b style="color: orange;">Pending</b>';  
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
          <div class="card-footer small text-muted"> </div>
        </div>

      </div>
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
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
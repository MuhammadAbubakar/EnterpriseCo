<?php
$id = $_GET['id'];
include '../functions/config.inc.php';
include 'session.php';
include '../functions/posts.php';
include '../functions/comments.php';
include '../functions/settings.php';

$post = new Posts;
$data = $post->getPost($id);

$settings = new Settings;
$setting = $settings->getSettings();
$services = $settings->getServices();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $newComment = new Comments;
  $mycomment = "<p>".$_POST['comment']."</p>";
  $mycomment = str_replace("\n","<br />",$mycomment);
  $msg = $newComment->newComment($login_session,$mycomment,$id);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><? echo $data -> Title; ?> - <? echo $setting->Title; ?></title>

  <!-- Bootstrap core CSS -->
   <link href="../src/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/blog-post.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="index.php"><?php echo $setting->Title; ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../contact.php">Contact Us</a>
          </li>
          <li class="nav-item"><b class="navbar-text">|</b></li>
          <li class="nav-item dropdown">
           <?php
            if (isset($login_session)) {
              echo "<span class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Welcome ".$login_session."</span>"; 
              echo '<div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php">Log Out</a>
        </div>';
            } else {
              echo '<a class="nav-link" href="login.php">Login/Register</a>';
            }
            ?>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4"><? echo $data->Title; ?></h1>

        <!-- Author -->
        <p class="lead">
          by
          <a href="#"><? echo $data -> Author; ?></a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on <? echo $data->Post_Date; ?></p>

        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="<?php echo $data->image;  ?>" alt="">

        <hr>

        <?php  echo $data->Post; ?>

        <hr>

        <!-- Comments Form -->
        <?php 
        if (isset($login_session)) {
          echo '<div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form method="POST">';
              
                if(isset($msg)){
                  echo '<div class="alert alert-success text-light font-weight-bold">';
                  echo  $msg;
                  echo '</div>';
                }
            
             
              echo '<div class="form-group">
                <textarea name="comment" id="comment" class="form-control" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
              
            </form>
          </div>
        </div>';
        } else {
          
        }

        ?>

        <!-- Single Comment -->
        <?php
        $comments = new Comments;
        $data = $comments -> getComments($id);
        foreach ($data as $comment) {
          echo '<div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" height="50px" width="50px" src="'.$comments->getUserAvatar($comment->username).'" alt="">
            <div class="media-body">
            <h5 class="mt-0">'.$comment->username.'</h5>'
            .$comment->Comment.
            '</div>'
          .'</div>';
        }
        ?>


      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">
      <?php 
      include 'widgets/newsletter.php';
      include 'widgets/catig.php';
      include 'widgets/starter.php';
      ?>
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-primary">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; <?php echo $setting->Title; ?> 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

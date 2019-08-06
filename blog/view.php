<?php
$id = $_GET['id'];
include '../functions/config.inc.php';
include '../functions/posts.php';
include '../functions/comments.php';

$post = new Posts;
$data = $post->getPost($id);
$username = 'admin';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $newComment = new Comments;
  $mycomment = "<p>".$_POST['comment']."</p>";
  $mycomment = str_replace("\n","<br />",$mycomment);
  $msg = $newComment->newComment($username,$mycomment,$id);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><? echo $data -> Title; ?> - My Blog</title>

  <!-- Bootstrap core CSS -->
   <link href="../src/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/blog-post.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Blog</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
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
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form method="POST">
              
                <?php if(isset($msg)){
                  echo '<div class="alert alert-success text-light font-weight-bold">';
                  echo  $msg;
                  echo '</div>';
                }
              ?>
             
              <div class="form-group">
                <textarea name="comment" id="comment" class="form-control" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
              
            </form>
          </div>
        </div>

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
      include 'widgets/search.php';
      include 'widgets/catig.php';
      include 'widgets/starter.php';
      ?>
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

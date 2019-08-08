<?php
include '../functions/config.inc.php';
 include '../functions/posts.php';
 include '../functions/settings.php';
 include 'session.php';
if(isset($_GET['page'])){
	$page=$_GET['page'];
} else {
	$page=1;
}

 $per_page = 5;
 $posts = new Posts;
 $slug = $_GET['id'];
 $catname = $posts->getCatNameBySlug($slug);
 $data = $posts->getAllPostsByCat($page,$per_page,$catname->name);
 $rowCount = $posts->numRows();
 $total_pages = ceil($rowCount/$per_page);

 $class = new Settings();
 $settings = $class->getSettings();
 $services = $class->getServices();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?php echo $settings->Description; ?>">
  <meta name="author" content="">

  <title>Blog - <?php echo $settings->Title; ?></title>

  <!-- Bootstrap core CSS -->
  <link href="../src/css/bootstrap.min.css" rel="stylesheet">


  <!-- Custom styles for this template -->
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="index.php"><?php echo $settings->Title; ?></a>
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

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4"></h1>

         <?php
          if ($rowCount == 0) {
             echo '<div class="alert alert-light border-dark">
             <h2 class="text-muted">No Posts!!</h2>
             </div>';
              } else {
            foreach ($data as $post) {
                $summary = $post->Post;
                $limit = 300;
                if(strlen($summary) > $limit){
                    $summary = substr($summary, 0, strrpos(substr($summary, 0, $limit), ' ')) . '...';
                }
              echo '<div class="card mb-4">
                <img class="card-img-top" src="'.$post->image.'" alt="Card image cap">
                <div class="card-body">
                  <h2 class="card-title">'.$post->Title.'</h2>
                  <p class="card-text">'.$summary.'</p>
                  <a href="view.php?id='.$post->id.'" class="btn btn-primary">Read More &rarr;</a>
                </div>
                <div class="card-footer text-muted">
                  Posted on '.$post->Post_Date.' by
                  <a href="#">'.$post->Author.'</a>
                </div>
              </div>
              ';  
                }

               echo '<ul class="pagination justify-content-center mb-4">';
                if (isset($page) && $page != $total_pages) {
                   	echo'<li class="page-item">
           					  <a class="page-link" href="index.php?page='.($page+1).'"">&larr; Older</a>
         					 </li>';	
                } 
                if ($page != 1) {
                      echo'<li class="page-item">
            				<a class="page-link" href="index.php?page='.($page-1).'">Newer &rarr;</a>
          					</li>';
                }
                echo '</ul>';
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
      <p class="m-0 text-center text-white">Copyright &copy; <?php echo $settings->Title; ?> 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

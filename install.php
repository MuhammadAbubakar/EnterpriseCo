<?php
include 'functions/config.inc.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
$query = '';
$sqlScript = file('EnterpriseCo.sql');
$datbase = new Database;
$pdo = $datbase->Connect();
foreach ($sqlScript as $line){
	$startWith = substr(trim($line), 0 ,2);
	$endWith = substr(trim($line), -1 ,1);	
	if (empty($line) || $startWith == '--' || $startWith == '/*' || $startWith == '//') {
		continue;
	}	
	$query = $query . $line;
	if ($endWith == ';') {
		$stmt = $pdo->query($query) or die('Problem in executing the SQL query <b>' . $query. '</b></div>');
		$query= '';
	}
}
$msg = 'SQL file imported successfully';
}
?> 

<!DOCTYPE html>
<html>
<head>
	<title>EnterpriseCo - Installstion</title>
	<meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
   <link rel="shortcut icon" href="http://icons.iconarchive.com/icons/chanut/role-playing/128/Monster-icon.png">
   <link rel="stylesheet" href="src/css/bootstrap.min.css">
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css">
   <link rel="stylesheet" type="text/css" href="src/css/custom.css">
   <script type="text/javascript" src="src/js/scrool-smooth.js"></script>
   <script type="text/javascript" src="src/js/imgload.js"></script>
   <script type="text/javascript" src="src/js/cookies.js"></script>
	<style type="text/css">
		.pt{
			padding-top: 250px;
		}
	</style>
</head>
<body>
	<div>
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<a class="navbar-brand" href="#">EnterpriseCo</a>
		</nav>
	</div>
	
	<div class="container d-flex justify-content-center align-items-center">
		<div class="row justify-content-center align-middle">
			<div class="col pt">
			   <div class="container">
			   		<div class="row">
			   			<div class="col">
						<?php 
						  if ($_SERVER['REQUEST_METHOD'] == "POST") {
						  	echo '<div class="alert alert-success">'.$msg.'</div>';
						  }
						  ?>
			   			</div>
			   		</div>
			   </div>
			   <form method="POST">
			   <div class="alert alert-light text-center border-danger">
			   	<p class="lead h2"><b>this page going to install EnterpriseCo default settings <br> 
			   		<hr>
			   		<p class="h3">admin login details</p>
			   		<ul class="list-unstyled h4">
			   			<li class="">Username: admin</li>
			   			<li class="">Password: admin</li>
			   		</ul>
			   	</b></p>
			   </div>
			   <button class="btn btn-dark btn-lg btn-block"><h1>Install Our Database</h1></button>	
		   	
			   </form>
			</div>
		</div>
	</div>
</body>
</html>
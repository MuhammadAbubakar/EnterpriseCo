<?php
include 'admin/config.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
$table = "Orders";
if(mysqli_num_rows(mysqli_query($conn,"SHOW TABLES LIKE '".$table."'")) == 1)  {


} else {

$CreateOrders = "CREATE TABLE Orders (id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
FullName MEDIUMTEXT NOT NULL,
Email LONGTEXT NOT NULL,
OrderNum LONGTEXT NOT NULL,
Subject LONGTEXT NOT NULL,
Message LONGTEXT NOT NULL,
Status LONGTEXT NOT NULL)";
$quriy = mysqli_query($conn, $CreateOrders);

}

$table2 = "admin";
if(mysqli_num_rows(mysqli_query($conn,"SHOW TABLES LIKE '".$table2."'")) == 1)  {


} else {

$CreateAdmin = "CREATE TABLE admin (id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username MEDIUMTEXT NOT NULL,
password LONGTEXT NOT NULL,
role LONGTEXT NOT NULL)";

$quriy2 = mysqli_query($conn, $CreateAdmin);

$username = "admin";
$password = md5("admin");
$role = 'administrator';
$RegesterUser = "INSERT INTO admin (username,password,role) VALUES ('$username','$password','$role')";

$quriy3 = mysqli_query($conn, $RegesterUser);

}


$table3 = "ConfirmCode";
if(mysqli_num_rows(mysqli_query($conn,"SHOW TABLES LIKE '".$table3."'")) == 1)  {


} else {

$CreateCode = "CREATE TABLE ConfirmCode (id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username MEDIUMTEXT NOT NULL,
code LONGTEXT NOT NULL)";

$quriy4 = mysqli_query($conn, $CreateCode);

}

}
mysqli_close($conn);
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
			   <form method="POST">
			   <button class="btn btn-dark btn-lg btn-block"><h1>Install</h1></button>			   	
			   </form>
			   <div class="container">
			   		<div class="row">
			   			<div class="col">
						<?php 
						  if ($_SERVER['REQUEST_METHOD'] == "POST") {
						echo "<ul>
			   					<li><b>Create Orders Table [ id,FullName,Email,OrderNum,Subject,Message,Status ]</b></li>
			   					<li><b>Create admin Table [ id,username,password,role ]</b></li>
 								<li><b>Regester Dafualt User  [ 1,admin,admin,administrator]</b></li>
 								<li><b>Now You Can Access The Botnet HomePage and Regester a new Account</b></li>
			   				</ul>";
						  }

						  ?>
			   			</div>
			   		</div>
			   </div>
			</div>
		</div>
	</div>
</body>
</html>
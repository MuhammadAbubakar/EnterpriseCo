<?php
require 'config.php';
$fname = '';
$lname = '';
$email = '';
$subject = '';
$message = '';

$_GET   = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
$_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
$time=date("l jS \of Y h:i:s A");
$ip = $_SERVER['REMOTE_ADDR'];

if($_SERVER["REQUEST_METHOD"] == "POST") {

$fname =  $_POST['fname'];
$lname = $_POST['lname'];
$name = $fname.' '.$lname;

if(isset($name) && $name != ''){
	$name = test_input($name);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
    $nameErr = "Only letters and white space allowed";
    }
	} else {
	$name = '';
}

if(isset($_POST['email']) && $_POST['email'] != ''){
	$email = test_input($_POST['email']);
    if(check_email($email)){
		
  } else {
	$emailErr = "error";
  }
}

if(isset($_POST['subject']) && $_POST['subject'] != '' ){
	$subject = test_input($_POST['subject']);
} else {
	$subject = '';
}

if(isset($_POST['message']) && $_POST['message'] != ''){
	$message = test_input($_POST['message']);
	$message = str_replace("\n","<br />",$message);
} else {
	$message = '';
}

if(isset($name) && $name != '' && isset($_POST['email']) && $email != '' && isset($_POST['message']) && $message != '' && isset($_POST['subject']) && $subject != ''){

	if(isset($emailErr)) {
		$messageerror = "Invalid email address";

		} elseif(isset($nameErr)) {
		$messageerror = "In name Only letters and white space allowed";

	} else {

	  $ins_sql = "INSERT INTO messages (name,email,subject,message,time,ip) VALUES ('$name','$email','$subject','$message','$time','$ip')";
    $run_sql = mysqli_query($conn,$ins_sql);

   $fname = $lname = $name = $email = $subject = $message = "";
	$messagesend = "Thank You, We will contact you soon.";

	}

} elseif(!isset($name) || $name == '' || !isset($_POST['email']) || $email == '' || !isset($_POST['message']) || $message == '' || !isset($_POST['subject']) || $subject == '') {
	$messageerror = "Please fill in all fields.";
}

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = strip_tags($data);
  return $data;
}

function check_email($email) {
$domain = substr($email, strpos($email, '@') + 1);
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
if (checkdnsrr($domain) != FALSE) {
   switch(strtolower($domain)) {
       case 'gmail.com':
	   return true;
	   break;
	   case 'hotmail.com':
	   return true;
	   break;
	   case 'outlook.com':
	   return true;
	   break;
	   case 'yahoo.com':
	   return true;
	   break;
	   case 'msn.com':
	   return true;
	   break;
	   case 'outlook.sa':
	   return true;
	   break;
	   case "aol.com":
	   return true;
	   break;
	   default:
	   return false;
	   break;
   }
} else {
return false;
}
} else {
	return false;
}
}
?>
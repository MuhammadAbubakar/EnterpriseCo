<?php
require 'admin/config.php';
$fname = '';
$lname = '';
$email = '';
$subject = '';
$message = '';

$_GET   = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
$_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


if($_SERVER["REQUEST_METHOD"] == "POST") {
$token = md5(uniqid(rand(), true));

$fname =  $_POST['fname'];
$lname = $_POST['lname'];
$name = $fname.' '.$lname;

if(isset($name) && $name != ''){
	$name = test_input($name);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
    $nameErr = "الرجاء كتابة الاسم بالنجليزي";
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
		$messageerror = "الرجاء التأكد من البريد الألكتروني";

		} elseif(isset($nameErr)) {
		$messageerror = "بالاسم فقط الحروف والمساحة البيضاء مسموح بها";

	} else {
	  $status = "Open";
	  $ins_sql = "INSERT INTO Orders (FullName,Email,OrderNum,Subject,Message,Status) VALUES ('$name','$email','$token','$subject','$message','$status')";
    $run_sql = mysqli_query($conn,$ins_sql);

   $fname = $lname = $name = $email = $subject = $message = "";
	$messagesend = "شكرا لك ، سوف نتصل بك قريبا";

	}

} elseif(!isset($name) || $name == '' || !isset($_POST['email']) || $email == '' || !isset($_POST['message']) || $message == '' || !isset($_POST['subject']) || $subject == '') {
	$messageerror = "يرجى تعبئة جميع الحقول.";
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

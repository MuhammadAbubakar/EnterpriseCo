<?php
require 'functions/config.inc.php';
include 'functions/orders.php';


if($_SERVER["REQUEST_METHOD"] == "POST") {

 $token = md5(uniqid(rand(), true));
 $fname = isset($_POST['fname']) ? $_POST['fname']: '';
 $lname = isset($_POST['lname']) ? $_POST['lname']: '';
 $name = $fname.' '.$lname;
 $email = isset($_POST['email']) ? $_POST['email']: '';
 $subject = isset($_POST['subject']) ? $_POST['subject']: '';
 $message = isset($_POST['message']) ? $_POST['message']: '';

 $order = new Order();

 if($order->emailValid($email)){
   
   } else {
    $emailErr = "error";
   }
 $message = str_replace("\n","<br />",$message);

  if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
     $nameErr = "اﻟﺮﺟﺎء ﻛﺘﺎﺑﺔ اﻻﺳﻢ ﺑﺎﻟﻨﺠﻠﻴﺰﻱ";
     }

 if(isset($emailErr)) {
   $messageerror = "اﻟﺮﺟﺎء اﻟﺘﺄﻛﺪ ﻣﻦ اﻟﺒﺮﻳﺪ اﻷﻟﻜﺘﺮﻭﻧﻲ";

   } elseif(isset($nameErr)) {
   $messageerror = "ﺑﺎﻻﺳﻢ ﻓﻘﻂ اﻟﺤﺮﻭﻑ ﻭاﻟﻤﺴﺎﺣﺔ اﻟﺒﻴﻀﺎء ﻣﺴﻤﻮﺡ ﺑﻬﺎ";

  } else {
    $status = "Open";
    $order->newOrder($token,$name,$email,$subject,$message,$status);
    $fname = $lname = $name = $email = $subject = $message = "";
  $messagesend = "ﺷﻜﺮا ﻟﻚ ، ﺳﻮﻑ ﻧﺘﺼﻞ ﺑﻚ ﻗﺮﻳﺒﺎ";

  }

}

?>

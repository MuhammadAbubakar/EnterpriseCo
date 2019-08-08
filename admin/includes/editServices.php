<?php
require '../../functions/config.inc.php';
include '../../functions/settings.php';
include 'session.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $id = $_POST['id'];
  $service = new Settings;
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
   $msg = $service->setServices($_POST['GCode'],$_POST['MailchimpURL']);
   exit(header("Location: ../services.php?msg=yes"));
  }
}
?>
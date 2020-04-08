<?php
session_start();

$valid = true;
if (empty($_POST["name"]) || empty($_POST["email"])|| strlen($_POST["password"]) < 6 || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
  $valid = false;
}
if ($valid) {
  $_SESSION['views']=0;
  $_SESSION['email'] = $_POST["email"];
  $_SESSION['name'] = $_POST["name"];
  header('Location:welcome.php');
}
else {
  header('Location:login.html');
}
?>
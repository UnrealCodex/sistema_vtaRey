<?php
/////////////////////////
$database   =  "nego_base";
$username   =  "root";
$password   =  "";
/////////////////////////

$link  = mysqli_connect('127.0.0.1', $username, $password,$database);
//$db    = mysqli_select_db($link);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>

<?php
session_start();

if (!isset($_SESSION['REGISTERED_USER_ID'])){
//echo "No session";
 echo "<script>alert('You must Log In first!')</script>";
 echo "<script>window.open('index.php','_self')</script>";
 return;
}


?>
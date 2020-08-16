<?php session_start();

if(!isset($_SESSION['username'])) {
	header('location:logout.php');
}

$otp = $_POST['otp'];
$error = "Wrong OTP Entered";

if ($otp == $_SESSION['otp']) {
	setcookie("username", $_SESSION['username'], time()+24*60*60);
  header('location:displaytable.php');
}

else {
  $_SESSION['error'] = $error;
  header('location:otppage.php');
} ?>

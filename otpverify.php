<?php session_start();

if(!isset($_SESSION['username'])) {
	header('location:logout.php');
}

$branch = $_SESSION['branch'];
$otp = $_POST['otp'];
$error = "Wrong OTP Entered";

if ($otp == $_SESSION['otp']) {
	setcookie("username", $_SESSION['username'], time()+24*60*60);

	if ($branch == 'admin') {
		header("location:home.php");
		die();
	}
  header("location:displaytable.php?branch=$branch");
}

else {
  $_SESSION['error'] = $error;
  header('location:otppage.php');
} ?>

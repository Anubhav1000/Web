<?php

session_start();


include 'config.php';

$name = $_POST['user'];
$pass = $_POST['password'];
$error = "Wrong username or password entered";

$s = "SELECT *  FROM `admintable` WHERE `name` = '$name' AND `password` = '$pass'";
$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);
$retval = mysqli_fetch_assoc($result);


if ($num == 1) {
	$_SESSION['username'] = $name;
	$_SESSION['role'] = $retval['role'];
	header('location:displaytable.php');
}
else {
	$_SESSION['error'] = $error;
	header('location:login.php');
}
?>

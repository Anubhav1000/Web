<?php

session_start();
include 'config.php';

$frstname = $_POST['frstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$role = $_POST['role'];
$contact =$_POST['contact'];
$dob = $_POST['dob'];
$error = "Username already taken";

$sql = "SELECT * FROM `admintable` WHERE `name` = '$username' ";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);

if($num == 1) {
	$_SESSION['error'] = $error;
	header('location:register.php');
}
else {
	$reg = "INSERT INTO `admintable` (`frstname`, `lastname`, `username`, `password`,
		`email`, `role`, `contact`, `dob`) VALUES ('$frstname', '$lastname', '$username',
		'$password', '$email', '$role', '$contact', '$dob')";
	$result = mysqli_query($conn, $reg);

	if ($role == 'user') {
		$privilege = "INSERT INTO `privilege` (`username`, `enrolled_on_30.06`,
			`enrolled_on_19-20`, `enrolled_on_20-21`, `enrolled_on_21-22`, `review_1`,
			`review_2`, `review_3`, `review_4`, `review_5`, `review_6`) VALUES
			('$username', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0')";
		$retval = mysqli_query($conn, $privilege);
	}
	else {
		$privilege = "INSERT INTO `privilege` (`username`, `enrolled_on_30.06`,
			`enrolled_on_19-20`, `enrolled_on_20-21`, `enrolled_on_21-22`, `review_1`,
			`review_2`, `review_3`, `review_4`, `review_5`, `review_6`) VALUES
			('$username', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1')";
		$retval = mysqli_query($conn, $privilege);
	}

	if ($result && $retval) {
		echo "<script>alert('Registration Successful');
		document.location.href='login.php'</script>";
	}
} ?>

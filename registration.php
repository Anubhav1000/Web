<?php

session_start();
include 'config.php';

$frstname = $_POST['frstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$role = $_POST['role'];
$contact = $_POST['contact'];
$dob = $_POST['dob'];
$conf_passwrd = $_POST['confirm_password'];
$branch = $_POST['branch'];
$usrname_error = "Username already taken";
$passwrd_error = "Password Not Matched";

$sql = "SELECT * FROM `admintable` WHERE `username` = '$username' ";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);

if($num == 1) {
	$_SESSION['usrname_error'] = $usrname_error;
	header('location:register.php');
}
elseif ($conf_passwrd != $password){
	$_SESSION['passwrd_error'] = $passwrd_error;
	header('location:register.php');
}
else {
	$reg = "INSERT INTO `admintable` (`frstname`, `lastname`, `username`, `password`,
		`email`, `role`, `contact`, `dob`, `branch`) VALUES ('$frstname', '$lastname', '$username',
		'$password', '$email', '$role', '$contact', '$dob', '$branch')";
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

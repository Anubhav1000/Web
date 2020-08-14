<?php

session_start();
include 'config.php';

$finame = $_POST['finame'];
$laname = $_POST['laname'];
$name = $_POST['user'];
$pass = $_POST['password'];
$Email = $_POST['Email'];
$role = $_POST['role'];
$dob = $_POST['dob'];
$con =$_POST['mob'];
$error = "Username already taken";

$s = "select * from admintable where name = '$name' ";

$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION['error'] = $error;
	header('location:register.php');
}

else{
	$reg = "insert into admintable(finame, laname, name, password, Email, role, dob, contact) values ('$finame','$laname','$name', '$pass','$Email','$role','$dob','$con')";
	$result = mysqli_query($conn, $reg);
	if ($role == 'user') {
		$privilege = "INSERT INTO `privilage` (`name`, `enrolled_on_30.06`, `enrolled_on_19-20`, `enrolled_on_20-21`, `enrolled _on_21-22`, `R1`, `R2`, `R3`, `R4`, `R5`, `R6`) VALUES ('$name', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0')";
		$retval = mysqli_query($conn, $privilege);
	}
	else {
		$privilege = "INSERT INTO `privilage` (`name`, `enrolled_on_30.06`, `enrolled_on_19-20`, `enrolled_on_20-21`, `enrolled _on_21-22`, `R1`, `R2`, `R3`, `R4`, `R5`, `R6`) VALUES ('$name', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1')";
		$retval = mysqli_query($conn, $privilege);
	}
	if ($result && $retval) {
		echo "<script>alert('Registration Successful');
		document.location.href='login.php'</script>";
	}
}
?>

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
$con =$_POST['con'];
$error = "Username already taken";

$s = "select * from admintable where name = '$name' ";

$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION['error'] = $error;
	header('location:register.php');
}

else{
	$reg = "insert into admintable(finame, laname, name, password, Email, role, dob, con) values ('$finame','$laname','$name', '$pass','$Email','$role','$dob','$con')";
	mysqli_query($conn, $reg);
	echo "<script>alert('Registration Successful');
	document.location.href='login.php'</script>";
}
?>

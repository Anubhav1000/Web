<?php include 'navbar.php'; 

if(!isset($_SESSION['username'])) {
	header('location:logout.php');
} ?>


<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<style type="text/css">
	h1{
		font-size: 5em;
		margin: 0;
		padding: 0;
		text-align: center;
		font-family: 'arial';
		position: absolute;
		top: 40%;
		left: 50%;
		transform: translateX(-50%);
	}
	</style>
</head>
<body>
	<div class = 'container'>
		<h1>Welcome Admin</h1>
	</div>
</body>
</html>

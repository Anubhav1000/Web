<?php session_start();
include 'config.php' ?>


<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href= "stylesheets/navbar.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>
	<nav id = "a1" class="navbar navbar-expand-lg navbar-light bg-light" class="navbar navbar-inverse">
		<div class="container-fluid">

			<a class="navbar-brand"><button type="button" class="btn btn-default btn-default"
				onclick="window.history.back()"><span class="glyphicon glyphicon-arrow-left"
				aria-hidden="true"></span></button>
			</a>

			<div class="navbar-header">
				<a class="navbar-brand" id = "a2" >WebSiteName</a>
			</div>

			<div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
			<div></div>
			<div></div>
			<div></div>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">

					<?php if ($_SESSION['role'] == 'admin') {
						echo "<li class='nav-item active'>";
							echo "<a class='nav-link' href='home.php'><button type='button'";
							echo "class='btn btn-default btn-sm'><span class='glyphicon glyphicon-home'";
							echo "aria-hidden='true'></span> Home</button></a>";
						echo "</li>";
					} ?>

					<?php if ($_SESSION['role'] != 'admin') {
						echo "<li class='nav-item active'>";
						echo "<a class='nav-link' href='displaytable.php?branch=".$_SESSION['branch']."'><button type='button' class='btn btn-default btn-sm'>";
						echo "<span class='glyphicon glyphicon-user' aria-hidden='true'></span> View Table";
						echo "</button> </a>";
						echo "</li>";
					}
					else {
						echo "<li class='nav-item dropdown'>";
							echo "<a class='nav-link' id='navbarDropdown'";
							 echo "role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>";
							 echo "<button type='button' class='btn btn-default btn-sm'>";
								echo "<span class='glyphicon glyphicon-user' aria-hidden='true'></span> View Table &#9660;";
							 echo "</button>";
							echo "</a>";
							echo "<div class='dropdown-menu' aria-labelledby='navbarDropdown'>";
								echo "<a class='dropdown-item' href='displaytable.php?branch=cse'>CSE</a>";
								echo "<div class='dropdown-divider'></div>";
								echo "<a class='dropdown-item' href='displaytable.php?branch=mechanical'>MECHANICAL</a>";
								echo "<div class='dropdown-divider'></div>";
								echo "<a class='dropdown-item' href='displaytable.php?branch=eee'>EEE</a>";
								echo "<div class='dropdown-divider'></div>";
								echo "<a class='dropdown-item' href='displaytable.php?branch=biotech'>BIOTECH</a>";
							echo "</div>";
						echo "</li>";
					} ?>

					<?php if ($_SESSION['role'] == 'editor') {
						echo "<li class='nav-item active'>";
						echo "<a class='nav-link' href='edittable.php?branch=".$_SESSION['branch']."'><button type='button' class='btn btn-default btn-sm'>";
						echo "<span class='glyphicon glyphicon-pencil' aria-hidden='true'></span> Edit Table";
						echo "</button> </a>";
						echo "</li>";
					}
					else if ($_SESSION['role'] == 'admin') {
						echo "<li class='nav-item dropdown'>";
							echo "<a class='nav-link' id='navbarDropdown'";
							 echo "role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>";
							 echo "<button type='button' class='btn btn-default btn-sm'>";
									echo "<span class='glyphicon glyphicon-pencil' aria-hidden='true'></span> Edit Table &#9660;";
								echo "</button>";
							echo "</a>";
							echo "<div class='dropdown-menu' aria-labelledby='navbarDropdown'>";
								echo "<a class='dropdown-item' href='edittable.php?branch=cse'>CSE</a>";
								echo "<div class='dropdown-divider'></div>";
								echo "<a class='dropdown-item' href='edittable.php?branch=mechanical'>MECHANICAL</a>";
								echo "<div class='dropdown-divider'></div>";
								echo "<a class='dropdown-item' href='edittable.php?branch=eee'>EEE</a>";
								echo "<div class='dropdown-divider'></div>";
								echo "<a class='dropdown-item' href='edittable.php?branch=biotech'>BIOTECH</a>";
							echo "</div>";
						echo "</li>";
					} ?>

					<?php if ($_SESSION['role'] == 'admin') {
						echo "<li class='nav-item'>";
						echo "<a class='nav-link' href='usertable.php'><button type='button'";
						echo "class='btn btn-default btn-sm'>";
						echo "<span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>";
						echo " Edit Privileges</button></a>";
						echo "</li>";
					} ?>

				</ul>
				<button type="button" class="btn btn-default btn-sm" onclick="document.location='logout.php'" id="logout">
					<span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> LOGOUT
				</button>
			</div>
		</div>
	</nav>
</body>
</html>

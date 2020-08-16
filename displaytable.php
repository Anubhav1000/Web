<?php session_start();
if(!isset($_SESSION['username'])) {
	header('location:logout.php');
}
include 'config.php' ?>


<!DOCTYPE html>
<html>
<head>
      <title>Your Table</title>
			<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href= "stylesheets/table.css">
</head>

<body>
	<button class="btn btn-primary" onclick="document.location='logout.php'"
	id="logout">LOGOUT</button>
	 <table>
			<tr class="head">
				 <td rowspan="3">Name of Unit / Dept.</th>
				 <td colspan="4">TARGETS</td>
				 <td rowspan="3">Academic Year 1 July to 30 June</td>
			</tr>
			<tr class="head1">
				<td colspan="4">PhD scholars enrolled / likely to be enrolled in that
					year only (Not cumulative)</td>
			</tr>
			<tr class="head2">
				 <td>2019-20 <br> Total PhD scholars on roll <br> as on 30.06.2020</td>
				 <td>2019-20 <br> (01.07.2019 - 30.06.2020) <br> Enrolled only in 2019-2020</td>
				 <td>2020-21 <br> (01.07.2020 - 30.06.2020) <br> Enrolled only in 2020-2021</td>
				 <td>2021-22 <br> (01.07.2021 - 30.06.2022) <br> Enrolled only in 2021-2022</td>
			</tr>
			<tr class="odd">
				<td>FT PhD Scholars</td>
				<?php $sql = "SELECT *  FROM `targets` WHERE `dept_name` = 'FT PhD'";
				$retval = mysqli_query($conn, $sql);
				$row = mysqli_fetch_assoc($retval);
				echo '<td>'.$row['enrolled_on_30.06'].'</td>';
				echo '<td>'.$row['enrolled_on_19-20'].'</td>';
				echo '<td>'.$row['enrolled_on_20-21'].'</td>';
				echo '<td>'.$row['enrolled_on_21-22'].'</td>'; ?>
				 <td></td>
			</tr>
			<tr class="even">
				<td>All PT PhD Scholars</td>
				<?php $sql = "SELECT *  FROM `targets` WHERE `dept_name` = 'PT PhD'";
				$retval = mysqli_query($conn, $sql);
				$row = mysqli_fetch_assoc($retval);
				echo '<td>'.$row['enrolled_on_30.06'].'</td>';
				echo '<td>'.$row['enrolled_on_19-20'].'</td>';
				echo '<td>'.$row['enrolled_on_20-21'].'</td>';
				echo '<td>'.$row['enrolled_on_21-22'].'</td>';
				 ?>
				 <td></td>
			</tr>
			<tr class="odd">
				<td>SRM PT PhD Scholars</td>
				<?php $sql = "SELECT *  FROM `targets` WHERE `dept_name` = 'SRM PT PhD'";
				$retval = mysqli_query($conn, $sql);
				$row = mysqli_fetch_assoc($retval);
				echo '<td>'.$row['enrolled_on_30.06'].'</td>';
				echo '<td>'.$row['enrolled_on_19-20'].'</td>';
				echo '<td>'.$row['enrolled_on_20-21'].'</td>';
				echo '<td>'.$row['enrolled_on_21-22'].'</td>'; ?>
				<td></td>
			</tr>
	 </table>

	 <table>
		 <tr class="head">
			 <td rowspan="3">Name of Unit / Dept.</td>
			 <td colspan="6"> Progress - Addition - from preceding to current review</td>
			 <td rowspan="3">Total at the end of the current review <br>
				 Sum R1 + R2...etc till review under consideration</td>
		 </tr>
		 <tr class="head2">
			 <td>Progress between <br> 01.07.2020 - 10.07.2020</td>
			 <td>Progress between <br> 11.07.2020 - 31.07.2020</td>
			 <td>Progress between <br> 01.08.2020 - 31.08.2020</td>
			 <td>Progress between <br> 01.09.2020 - 30.09.2020</td>
			 <td>Progress between <br> 01.10.2020 - 31.10.2020</td>
			 <td>Progress between <br> 01.11.2020 - 30.11.2020</td>
		 </tr>
		 <tr class="head1">
			 <td>Review 1</td>
			 <td>Review 2</td>
			 <td>Review 3</td>
			 <td>Review 4</td>
			 <td>Review 5</td>
			 <td>Review 6</td>
		 </tr>
		 <tr class="odd">
			 <td>FT PhD Scholars</td>
			 <?php $sql = "SELECT * FROM `progress` WHERE `dept_name` = 'FT PhD'";
			 $retval = mysqli_query($conn, $sql);
			 $row=mysqli_fetch_assoc($retval);
			 echo '<td>'.$row['review_1'].'</td>';
			 echo '<td>'.$row['review_2'].'</td>';
			 echo '<td>'.$row['review_3'].'</td>';
			 echo '<td>'.$row['review_4'].'</td>';
			 echo '<td>'.$row['review_5'].'</td>';
			 echo '<td>'.$row['review_6'].'</td>';
			 echo '<td>'.$row['sum'].'</td>'; ?>
		 </tr>
		 <tr class="even">
			 <td>All PT PhD Scholars</td>
			 <?php $sql = "SELECT * FROM `progress` WHERE `dept_name` = 'PT PhD'";
			 $retval = mysqli_query($conn, $sql);
			 $row=mysqli_fetch_assoc($retval);
			 echo '<td>'.$row['review_1'].'</td>';
			 echo '<td>'.$row['review_2'].'</td>';
			 echo '<td>'.$row['review_3'].'</td>';
			 echo '<td>'.$row['review_4'].'</td>';
			 echo '<td>'.$row['review_5'].'</td>';
			 echo '<td>'.$row['review_6'].'</td>';
			 echo '<td>'.$row['sum'].'</td>'; ?>
		 </tr>
		 <tr class="odd">
			 <td>SRM PT PhD Scholars</td>
			 <?php $sql = "SELECT * FROM `progress` WHERE `dept_name` = 'SRM PT PhD'";
			 $retval = mysqli_query($conn, $sql);
			 $row=mysqli_fetch_assoc($retval);
			 echo '<td>'.$row['review_1'].'</td>';
			 echo '<td>'.$row['review_2'].'</td>';
			 echo '<td>'.$row['review_3'].'</td>';
			 echo '<td>'.$row['review_4'].'</td>';
			 echo '<td>'.$row['review_5'].'</td>';
			 echo '<td>'.$row['review_6'].'</td>';
			 echo '<td>'.$row['sum'].'</td>'; ?>
		 </tr>
	 </table>
	 <?php if ($_SESSION['role'] != 'user') {
		 echo "<p align='center'><a href='edittable.php' class='btn btn-primary'>
		 EDIT / INSERT</a></p>";
	 }
	 if ($_SESSION['role'] == 'admin') {
		 echo "<p align='center'><a href='usertable.php' class='btn btn-primary'>
		 EDIT USER PRIVILEGES</a></p>";
	 } ?>
</body>
</html>

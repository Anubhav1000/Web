<?php include 'config.php';
include 'navbar.php';

if(!isset($_SESSION['username']) || ($_SESSION['role'] == 'user')) {
	header('location:logout.php');
}

$branch = $_GET['branch'];

$sql = "SELECT *  FROM `$branch` WHERE `dept_name` = 'FT PhD'";
$retval = mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($retval);
$enrolled_FT_30_06 = $row['enrolled_on_30.06'];
$enrolled_FT_19_20 = $row['enrolled_on_19-20'];
$enrolled_FT_20_21 = $row['enrolled_on_20-21'];
$enrolled_FT_21_22 = $row['enrolled_on_21-22'];

$sql = "SELECT *  FROM `$branch` WHERE `dept_name` = 'PT PhD'";
$retval = mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($retval);
$enrolled_PT_30_06 = $row['enrolled_on_30.06'];
$enrolled_PT_19_20 = $row['enrolled_on_19-20'];
$enrolled_PT_20_21 = $row['enrolled_on_20-21'];
$enrolled_PT_21_22 = $row['enrolled_on_21-22'];

$sql = "SELECT *  FROM `$branch` WHERE `dept_name` = 'SRM PT PhD'";
$retval = mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($retval);
$enrolled_SRM_30_06 = $row['enrolled_on_30.06'];
$enrolled_SRM_19_20 = $row['enrolled_on_19-20'];
$enrolled_SRM_20_21 = $row['enrolled_on_20-21'];
$enrolled_SRM_21_22 = $row['enrolled_on_21-22'];

$sql = "SELECT * FROM `$branch` WHERE `dept_name` = 'FT PhD'";
$retval = mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($retval);
$FT_review_1 = $row['review_1'];
$FT_review_2 = $row['review_2'];
$FT_review_3 = $row['review_3'];
$FT_review_4 = $row['review_4'];
$FT_review_5 = $row['review_5'];
$FT_review_6 = $row['review_6'];
$FT_sum = $row['sum'];

$sql = "SELECT * FROM `$branch` WHERE `dept_name` = 'PT PhD'";
$retval = mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($retval);
$PT_review_1 = $row['review_1'];
$PT_review_2 = $row['review_2'];
$PT_review_3 = $row['review_3'];
$PT_review_4 = $row['review_4'];
$PT_review_5 = $row['review_5'];
$PT_review_6 = $row['review_6'];
$PT_sum = $row['sum'];

$sql = "SELECT * FROM `$branch` WHERE `dept_name` = 'SRM PT PhD'";
$retval = mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($retval);
$SRM_review_1 = $row['review_1'];
$SRM_review_2 = $row['review_2'];
$SRM_review_3 = $row['review_3'];
$SRM_review_4 = $row['review_4'];
$SRM_review_5 = $row['review_5'];
$SRM_review_6 = $row['review_6'];
$SRM_sum = $row['sum'];

$username = $_SESSION['username'];
$sql = "SELECT *  FROM `privilege` WHERE `username` = '$username'";
$retval = mysqli_query($conn, $sql);
$privilege = mysqli_fetch_assoc($retval); ?>


<!DOCTYPE html>
<html>
<head>
	<title>User Edit Table</title>
	<link rel ="stylesheet" type= "text/css" href= "stylesheets/table.css">
</head>

<body>
	<form action="" method="post">
		<table>
			<tr class="head">
				<td rowspan="3">Name of Unit / Dept.</td>
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
				<?php if ($privilege['enrolled_on_30.06']) {
					echo '<td><input  type="text" name="enrolled_FT_30_06"
					 value='.$enrolled_FT_30_06.'> </td>';
				}
				else {
					echo '<td><input type="text" style="border:hidden;" name="enrolled_FT_30_06"
					 value='.$enrolled_FT_30_06.' readonly></td>';
				}

				if ($privilege['enrolled_on_19-20']) {
					echo '<td><input  type="text" name="enrolled_FT_19_20"
					 value='.$enrolled_FT_19_20.' > </td>';
				}
				else {
					echo '<td> <input type="text" style="border:hidden;" name="enrolled_FT_19_20"
					 value='.$enrolled_FT_19_20.' readonly></td>';
				}

				if ($privilege['enrolled_on_20-21']) {
					echo '<td><input  type="text" name="enrolled_FT_20_21"
					 value='.$enrolled_FT_20_21.' > </td>';
				}
				else {
					echo '<td> <input type="text" style="border:hidden; "name="enrolled_FT_20_21"
					 value='.$enrolled_FT_20_21.' readonly></td>';
				}

				if ($privilege['enrolled_on_21-22']) {
					echo '<td><input  type="text" name="enrolled_FT_21_22"
					 value='.$enrolled_FT_21_22.' > </td>';
				}
				else {
					echo '<td><input type="text" style="border:hidden;" name="enrolled_FT_21_22"
					 value='.$enrolled_FT_21_22.' readonly></td>';
				} ?>
				<td></td>
			</tr>

			<tr class="even">
				<td>All PT PhD Scholars</td>
				<?php if ($privilege['enrolled_on_30.06']) {
					echo '<td><input type="text" name="enrolled_PT_30_06"
					 value='.$enrolled_PT_30_06.'></td>';
				}
				else {
					echo '<td> <input type="text" style="border:hidden;"  name="enrolled_PT_30_06"
					 value='.$enrolled_PT_30_06.' readonly></td>';
				}

				if ($privilege['enrolled_on_19-20']) {
					echo '<td><input  type="text" name="enrolled_PT_19_20"
					 value='.$enrolled_PT_19_20.' > </td>';
				}
				else {
					echo '<td> <input type="text" style="border:hidden;" name="enrolled_PT_19_20"
					 value='.$enrolled_PT_19_20.' readonly></td>';
				}

				if ($privilege['enrolled_on_20-21']) {
					echo '<td><input  type="text" name="enrolled_PT_20_21"
					 value='.$enrolled_PT_20_21.' > </td>';
				}
				else {
					echo '<td> <input type="text" style="border:hidden;" name="enrolled_PT_20_21"
					 value='.$enrolled_PT_20_21.' readonly></td>';
				}

				if ($privilege['enrolled_on_21-22']) {
					echo '<td><input  type="text" name="enrolled_PT_21_22"
					 value='.$enrolled_PT_21_22.' > </td>';
				}
				else {
					echo '<td> <input type="text" style="border:hidden;"  name="enrolled_PT_21_22"
					 value='.$enrolled_PT_21_22.' readonly></td>';
				} ?>
				<td></td>
			</tr>

			<tr class="odd">
				<td>SRM PT PhD Scholars</td>
				<?php
				if ($privilege['enrolled_on_30.06']) {
					echo '<td><input  type="text" name="enrolled_SRM_30_06"
					 value='.$enrolled_SRM_30_06.' > </td>';
				}
				else {
					echo '<td> <input type="text" style="border:hidden;" name="enrolled_SRM_30_06"
					 value='.$enrolled_SRM_30_06.' readonly></td>';
				}

				if ($privilege['enrolled_on_19-20']) {
					echo '<td><input  type="text" name="enrolled_SRM_19_20"
					 value='.$enrolled_SRM_19_20.' > </td>';
				}
				else {
					echo '<td> <input type="text" style="border:hidden;" name="enrolled_SRM_19_20"
					 value='.$enrolled_SRM_19_20.' readonly></td>';
				}

				if ($privilege['enrolled_on_20-21']) {
					echo '<td><input  type="text" name="enrolled_SRM_20_21"
					 value='.$enrolled_SRM_20_21.' > </td>';
				}
				else {
					echo '<td> <input type="text" style="border:hidden;"  name="enrolled_SRM_20_21"
					 value='.$enrolled_SRM_20_21.' readonly></td>';
				}

				if ($privilege['enrolled_on_21-22']) {
					echo '<td><input  type="text" name="enrolled_SRM_21_22"
					 value='.$enrolled_SRM_21_22.' > </td>';
				}
				else {
					echo '<td> <input type="text" style="border:hidden;" name="enrolled_SRM_21_22"
					 value='.$enrolled_SRM_21_22.' readonly></td>';
				} ?>
				<td></td>
			</tr>
		</table>

		<table>
			<tr class="head">
				<td rowspan="3">Name of Unit / Dept.</td>
				<td colspan="6"> Progress - Addition - from preceding to current review</td>
				<td rowspan="3">Total at the end of the current review <br> Sum R1 + R2...etc till review under consideration</td>
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
				<td class="odd">FT PhD Scholars</td>
				<?php if ($privilege['review_1']) {
					echo '<td><input type="text" name="FT_review_1" value='.$FT_review_1.'></td>';
				}
				else {
					echo '<td><input type="text" style="border:hidden;" name="FT_review_1"
					 value='.$FT_review_1.' readonly></td>';
				}

				if ($privilege['review_2']) {
					echo '<td><input  type="text" name="FT_review_2" value='.$FT_review_2.'></td>';
				}
				else {
					echo '<td><input type="text" style="border:hidden;" name="FT_review_2"
					 value='.$FT_review_2.' readonly></td>';
				}

				if ($privilege['review_3']) {
					echo '<td><input  type="text" name="FT_review_3" value='.$FT_review_3.' > </td>';
				}
				else {
					echo '<td> <input type="text" style="border:hidden;" name="FT_review_3"
					 value='.$FT_review_3.' readonly></td>';
				}

				if ($privilege['review_4']) {
					echo '<td><input type="text" name="FT_review_4" value='.$FT_review_4.'></td>';
				}
				else {
					echo '<td> <input type="text" style="border:hidden;" name="FT_review_4"
					 value='.$FT_review_4.' readonly></td>';
				}

				if ($privilege['review_5']) {
					echo '<td><input type="text" name="FT_review_5" value='.$FT_review_5.'></td>';
				}
				else {
					echo '<td> <input type="text" style="border:hidden;" name="FT_review_5"
					 value='.$FT_review_5.' readonly></td>';
				}

				if ($privilege['review_6']) {
					echo '<td><input type="text" name="FT_review_6" value='.$FT_review_6.'></td>';
				}
				else {
					echo '<td> <input type="text" style="border:hidden;" name="FT_review_6"
					 value='.$FT_review_6.' readonly></td>';
				} ?>
				<td></td>
			</tr>

			<tr class="even">
				<td>All PT PhD Scholars</td>
				<?php if ($privilege['review_1']) {
					echo '<td><input type="text" name="PT_review_1" value='.$PT_review_1.'></td>';
				}
				else {
					echo '<td> <input type="text" style="border:hidden;" name="PT_review_1"
					 value='.$PT_review_1.' readonly></td>';
				}

				if ($privilege['review_2']) {
					echo '<td><input type="text" name="PT_review_2" value='.$PT_review_2.'></td>';
				}
				else {
					echo '<td> <input type="text" style="border:hidden;" name="PT_review_2"
					 value='.$PT_review_2.' readonly></td>';
				}

				if ($privilege['review_3']) {
					echo '<td><input  type="text" name="PT_review_3" value='.$PT_review_3.' > </td>';
				}
				else {
					echo '<td> <input type="text" style="border:hidden;" name="PT_review_3"
					 value='.$PT_review_3.' readonly></td>';
				}

				if ($privilege['review_4']) {
					echo '<td><input  type="text" name="PT_review_4" value='.$PT_review_4.' > </td>';
				}
				else {
					echo '<td> <input type="text" style="border:hidden;" name="PT_review_4"
					 value='.$PT_review_4.' readonly></td>';
				}

				if ($privilege['review_5']) {
					echo '<td><input  type="text" name="PT_review_5" value='.$PT_review_5.' > </td>';
				}
				else {
					echo '<td> <input type="text" style="border:hidden;" name="PT_review_5"
					 value='.$PT_review_5.' readonly></td>';
				}

				if ($privilege['review_6']) {
					echo '<td><input  type="text" name="PT_review_6" value='.$PT_review_6.' > </td>';
				}
				else {
					echo '<td> <input type="text" style="border:hidden;"  name="PT_review_6"
					 value='.$PT_review_6.' readonly></td>';
				}
				?>
				<td></td>
			</tr>

			<tr class="odd">
				<td>SRM PT PhD Scholars</td>
				<?php if ($privilege['review_1']) {
					echo '<td><input  type="text" name="SRM_review_1" value='.$SRM_review_1.' > </td>';
				}
				else {
					echo '<td> <input type="text" style="border:hidden;" name="SRM_review_1"
					 value='.$SRM_review_1.' readonly></td>';
				}

				if ($privilege['review_2']) {
					echo '<td><input  type="text" name="SRM_review_2" value='.$SRM_review_2.' > </td>';
				}
				else {
					echo '<td> <input type="text" style="border:hidden;"name="SRM_review_2"
					 value='.$SRM_review_2.' readonly></td>';
				}

				if ($privilege['review_3']) {
					echo '<td><input  type="text" name="SRM_review_3" value='.$SRM_review_3.' > </td>';
				}
				else {
					echo '<td> <input type="text" style="border:hidden;"  name="SRM_review_3"
					 value='.$SRM_review_3.' readonly></td>';
				}

				if ($privilege['review_4']) {
					echo '<td><input  type="text" name="SRM_review_4" value='.$SRM_review_4.' > </td>';
				}
				else {
					echo '<td> <input type="text" style="border:hidden;" name="SRM_review_4"
					 value='.$SRM_review_4.' readonly></td>';
				}

				if ($privilege['review_5']) {
					echo '<td><input  type="text" name="SRM_review_5" value='.$SRM_review_5.' > </td>';
				}
				else {
					echo '<td> <input type="text" style="border:hidden;" name="SRM_review_5"
					 value='.$SRM_review_5.' readonly></td>';
				}

				if ($privilege['review_6']) {
					echo '<td><input  type="text" name="SRM_review_6" value='.$SRM_review_6.' > </td>';
				}
				else {
					echo '<td> <input type="text" style="border:hidden;" name="SRM_review_6"
					 value='.$SRM_review_6.' readonly></td>';
				} ?>
				<td></td>
			</tr>
		</table>

		<p align="center">
			<input class="btn btn-primary" type="submit" value="SUBMIT" name="submit">
		</p>
	</form>

	<?php if(isset($_POST['submit'])) {
		$enrolled_FT_30_06 = $_POST['enrolled_FT_30_06'];
    $enrolled_FT_19_20 = $_POST['enrolled_FT_19_20'];
		$enrolled_FT_20_21 = $_POST['enrolled_FT_20_21'];
		$enrolled_FT_21_22 = $_POST['enrolled_FT_21_22'];
		$targtFT = "UPDATE `$branch` SET `enrolled_on_30.06` = '$enrolled_FT_30_06',
		 `enrolled_on_19-20` = '$enrolled_FT_19_20', `enrolled_on_20-21` = '$enrolled_FT_20_21',
		 `enrolled_on_21-22` = '$enrolled_FT_21_22' WHERE `$branch`.`dept_name` = 'FT PhD'";
		$retval = mysqli_query($conn, $targtFT);

		$enrolled_PT_30_06 = $_POST['enrolled_PT_30_06'];
		$enrolled_PT_19_20 = $_POST['enrolled_PT_19_20'];
		$enrolled_PT_20_21 = $_POST['enrolled_PT_20_21'];
		$enrolled_PT_21_22 = $_POST['enrolled_PT_21_22'];
		$targtPT = "UPDATE `$branch` SET `enrolled_on_30.06` = '$enrolled_PT_30_06',
		 `enrolled_on_19-20` = '$enrolled_PT_19_20', `enrolled_on_20-21` = '$enrolled_PT_20_21',
		 `enrolled_on_21-22` = '$enrolled_PT_21_22' WHERE `$branch`.`dept_name` = 'PT PhD'";
		$retval1 = mysqli_query($conn, $targtPT);

		$enrolled_SRM_30_06 = $_POST['enrolled_SRM_30_06'];
		$enrolled_SRM_19_20 = $_POST['enrolled_SRM_19_20'];
		$enrolled_SRM_20_21 = $_POST['enrolled_SRM_20_21'];
		$enrolled_SRM_21_22 = $_POST['enrolled_SRM_21_22'];
		$targtSRMPT = "UPDATE `$branch` SET `enrolled_on_30.06` = '$enrolled_SRM_30_06',
		 `enrolled_on_19-20` = '$enrolled_SRM_19_20', `enrolled_on_20-21` = '$enrolled_SRM_20_21',
		 `enrolled_on_21-22` = '$enrolled_SRM_21_22' WHERE `$branch`.`dept_name` = 'SRM PT PhD'";
		$retval3 = mysqli_query($conn, $targtSRMPT);

		$FT_review_1 = $_POST['FT_review_1'];
		$FT_review_2 = $_POST['FT_review_2'];
		$FT_review_3 = $_POST['FT_review_3'];
		$FT_review_4 = $_POST['FT_review_4'];
		$FT_review_5 = $_POST['FT_review_5'];
		$FT_review_6 = $_POST['FT_review_6'];
		$FT_sum = $FT_review_1 + $FT_review_2 + $FT_review_3 + $FT_review_4 +
		 $FT_review_5 + $FT_review_6;
		$prgFT = "UPDATE `$branch` SET `review_1` = '$FT_review_1', `review_2` = '$FT_review_2',
		 `review_3` = '$FT_review_3', `review_4` = '$FT_review_4', `review_5` = '$FT_review_5',
		 `review_6` = '$FT_review_6', `sum` = '$FT_sum' WHERE `$branch`.`dept_name` = 'FT PhD'";
		$retval4 = mysqli_query($conn, $prgFT);

		$PT_review_1 = $_POST['PT_review_1'];
		$PT_review_2 = $_POST['PT_review_2'];
		$PT_review_3 = $_POST['PT_review_3'];
		$PT_review_4 = $_POST['PT_review_4'];
		$PT_review_5 = $_POST['PT_review_5'];
		$PT_review_6 = $_POST['PT_review_6'];
		$PT_sum = $PT_review_1 + $PT_review_2 + $PT_review_3 + $PT_review_4 +
		 $PT_review_5 + $PT_review_6;
		$prgPT = "UPDATE `$branch` SET `review_1` = '$PT_review_1', `review_2` = '$PT_review_2',
		 `review_3` = '$PT_review_3', `review_4` = '$PT_review_4', `review_5` = '$PT_review_5',
		 `review_6` = '$PT_review_6', `sum` = '$PT_sum' WHERE `$branch`.`dept_name` = 'PT PhD'";
		$retval5 = mysqli_query($conn, $prgPT);

		$SRM_review_1 = $_POST['SRM_review_1'];
		$SRM_review_2 = $_POST['SRM_review_2'];
		$SRM_review_3 = $_POST['SRM_review_3'];
		$SRM_review_4 = $_POST['SRM_review_4'];
		$SRM_review_5 = $_POST['SRM_review_5'];
		$SRM_review_6 = $_POST['SRM_review_6'];
		$SRM_sum = $SRM_review_1 + $SRM_review_2 + $SRM_review_3 + $SRM_review_4 +
		 $SRM_review_5 + $SRM_review_6;
		$prgSRMPT = "UPDATE `$branch` SET `review_1` = '$SRM_review_1', `review_2` = '$SRM_review_2',
		 `review_3` = '$SRM_review_3', `review_4` = '$SRM_review_4', `review_5` = '$SRM_review_5',
		 `review_6` = '$SRM_review_6', `sum` = '$SRM_sum' WHERE `$branch`.`dept_name` = 'SRM PT PhD'";
		$retval5 = mysqli_query($conn, $prgSRMPT);

		if ($targtFT && $targtPT && $targtSRMPT && $prgFT && $prgPT && $prgSRMPT) {
			echo "<script>alert('Data Insert Successful');
			document.location.href='displaytable.php?branch=$branch'</script>";
		}
		else {
			echo "<script>alert('Data Insert Failed');
			document.location.href='displaytable.php'</script>";
		}
	} ?>
</body>
</html>

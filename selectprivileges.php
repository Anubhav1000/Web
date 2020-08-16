<?php session_start();
include 'config.php';
if(!isset($_SESSION['username']) || ($_SESSION['role'] == 'user')) {
	header('location:logout.php');
}

$username = $_GET['user'];
$sql = "SELECT * FROM `privilege` WHERE `privilege`.`username` = '$username'";
$res = mysqli_query($conn ,$sql);
$retval = mysqli_fetch_assoc($res); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Select columns to give edit access</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href= "stylesheets/table.css">
</head>

<body>
	<form action="" method="post">
		<table style="width:auto;">
			<tr class="head">
				<td colspan="2">TARGETS Table</td>
			</tr>

      <tr class="head2">
				<td>Column Name</td>
        <td>Privilege</td>
      </tr>

      <tr class="odd">
        <td>2019-20 Total PhD scholars on roll as on 30.06.2020</td>
        <td><input type="hidden" name="privilege[enrolled_on_30.06]" value="0">
					 <input type="checkbox" name="privilege[enrolled_on_30.06]" value="1"
					 <?php echo ($retval['enrolled_on_30.06']) ? "checked":""; ?>></td>
      </tr>

      <tr class="even">
				<td>2019-20 (01.07.2019 - 30.06.2020) Enrolled only in 2019-2020</td>
        <td><input type="hidden" name="privilege[enrolled_on_19-20]" value="0">
					 <input type="checkbox" name="privilege[enrolled_on_19-20]" value="1"
					 <?php echo ($retval['enrolled_on_19-20']) ? "checked":""; ?>></td>
      </tr>

      <tr class="odd">
        <td>2020-21 (01.07.2020 - 30.06.2020) Enrolled only in 2020-2021</td>
        <td><input type="hidden" name="privilege[enrolled_on_20-21]" value="0">
					 <input type="checkbox" name="privilege[enrolled_on_20-21]" value="1"
					 <?php echo ($retval['enrolled_on_20-21']) ? "checked":""; ?>></td>
      </tr>

      <tr class="even">
        <td>2021-22 (01.07.2021 - 30.06.2022) Enrolled only in 2021-2022</td>
        <td><input type="hidden" name="privilege[enrolled_on_21-22]" value="0">
					 <input type="checkbox" name="privilege[enrolled_on_21-22]" value="1"
					 <?php echo ($retval['enrolled_on_21-22']) ? "checked":""; ?>></td>
      </tr>
		</table>

		<table style="width:auto;">
			<tr class="head">
				<td colspan="2">PROGRESS Table</td>
      </tr>
      <tr class="head2">
        <td>Column Name</td>
        <td>Privilege</td>
      </tr>

			<tr class="odd">
        <td>Progress between 01.07.2020 - 10.07.2020</td>
        <td><input type="hidden" name="privilege[review_1]" value="0">
					 <input type="checkbox" name="privilege[review_1]" value="1"
					 <?php echo ($retval['review_1']) ? "checked":""; ?>></td>
      </tr>

      <tr class="even">
        <td>Progress between 11.07.2020 - 31.07.2020</td>
        <td><input type="hidden" name="privilege[review_2]" value="0">
					 <input type="checkbox" name="privilege[review_2]" value="1"
					 <?php echo ($retval['review_2']) ? "checked":""; ?>></td>
      </tr>

		  <tr class="odd">
        <td>Progress between 01.08.2020 - 31.08.2020</td>
        <td><input type="hidden" name="privilege[review_3]" value="0">
					 <input type="checkbox" name="privilege[review_3]" value="1"
					 <?php echo ($retval['review_3']) ? "checked":""; ?>></td>
      </tr>

		  <tr class="even">
        <td>Progress between 01.09.2020 - 30.09.2020</td>
        <td><input type="hidden" name="privilege[review_4]" value="0">
					 <input type="checkbox" name="privilege[review_4]" value="1"
					 <?php echo ($retval['review_4']) ? "checked":""; ?>></td>
      </tr>

      <tr class="odd">
        <td>Progress between 01.10.2020 - 31.10.2020</td>
        <td><input type="hidden" name="privilege[review_5]" value="0">
					 <input type="checkbox" name="privilege[review_5]" value="1"
					 <?php echo ($retval['review_5']) ? "checked":""; ?>></td>
      </tr>

	    <tr class="even">
        <td>Progress between 01.11.2020 - 30.11.2020</td>
        <td><input type="hidden" name="privilege[review_6]" value="0">
					 <input type="checkbox" name="privilege[review_6]" value="1"
					 <?php echo ($retval['review_6']) ? "checked":""; ?>></td>
			</tr>
		</table>

		<input class="btn btn-primary" type="submit" value="SUBMIT" name="submit">
	</form>
</body>
</html>

<?php if (isset($_POST['submit'])) {

	if (!empty($_POST['privilege'])) {
		$sql = "UPDATE `admintable` SET `role` = 'editor' WHERE `admintable`.`username` = '$username'";
		$result = mysqli_query($conn, $sql);

		foreach ($_POST['privilege'] as $key => $value) {
			$sql = "UPDATE `privilege` SET `$key` = '$value' WHERE `privilege`.`username` = '$username'";
			$result = mysqli_query($conn ,$sql);
		}
	}
	echo "<script>alert('Privilege Edit Successful');
	document.location.href='usertable.php'</script>";
} ?>

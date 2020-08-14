<?php
session_start();
include 'config.php';
if(!isset($_SESSION['username']) || ($_SESSION['role'] == 'user')) {
	header('location:logout.php');
}

$user = $_GET['user'];
$sql = "SELECT * FROM `privilage` WHERE `privilage`.`name` = '$user'";
$res = mysqli_query($conn ,$sql);
$retval = mysqli_fetch_assoc($res);
?>

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
          <td><input type="hidden" name="privilege[enrolled_on_30.06]" value="0"><input type="checkbox" name="privilege[enrolled_on_30.06]" value="1" <?php echo ($retval['enrolled_on_30.06']) ? "checked":""; ?>></td>
        </tr>
        <tr class="even">
          <td>2019-20 (01.07.2019 - 30.06.2020) Enrolled only in 2019-2020</td>
          <td><input type="hidden" name="privilege[enrolled_on_19-20]" value="0"><input type="checkbox" name="privilege[enrolled_on_19-20]" value="1" <?php echo ($retval['enrolled_on_19-20']) ? "checked":""; ?>></td>
        </tr>
        <tr class="odd">
          <td>2020-21 (01.07.2020 - 30.06.2020) Enrolled only in 2020-2021</td>
          <td><input type="hidden" name="privilege[enrolled_on_20-21]" value="0"><input type="checkbox" name="privilege[enrolled_on_20-21]" value="1" <?php echo ($retval['enrolled_on_20-21']) ? "checked":""; ?>></td>
        </tr>
        <tr class="even">
          <td>2021-22 (01.07.2021 - 30.06.2022) Enrolled only in 2021-2022</td>
          <td><input type="hidden" name="privilege[enrolled _on_21-22]" value="0"><input type="checkbox" name="privilege[enrolled _on_21-22]" value="1" <?php echo ($retval['enrolled _on_21-22']) ? "checked":""; ?>></td>
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
          <td><input type="hidden" name="privilege[R1]" value="0"><input type="checkbox" name="privilege[R1]" value="1" <?php echo ($retval['R1']) ? "checked":""; ?>></td>
        </tr>
        <tr class="even">
          <td>Progress between 11.07.2020 - 31.07.2020</td>
          <td><input type="hidden" name="privilege[R2]" value="0"><input type="checkbox" name="privilege[R2]" value="1" <?php echo ($retval['R2']) ? "checked":""; ?>></td>
        </tr>
        <tr class="odd">
          <td>Progress between 01.08.2020 - 31.08.2020</td>
          <td><input type="hidden" name="privilege[R3]" value="0"><input type="checkbox" name="privilege[R3]" value="1" <?php echo ($retval['R3']) ? "checked":""; ?>></td>
        </tr>
        <tr class="even">
          <td>Progress between 01.09.2020 - 30.09.2020</td>
          <td><input type="hidden" name="privilege[R4]" value="0"><input type="checkbox" name="privilege[R4]" value="1" <?php echo ($retval['R4']) ? "checked":""; ?>></td>
        </tr>
        <tr class="odd">
          <td>Progress between 01.10.2020 - 31.10.2020</td>
          <td><input type="hidden" name="privilege[R5]" value="0"><input type="checkbox" name="privilege[R5]" value="1" <?php echo ($retval['R5']) ? "checked":""; ?>></td>
        </tr>
        <tr class="even">
          <td>Progress between 01.11.2020 - 30.11.2020</td>
          <td><input type="hidden" name="privilege[R6]" value="0"><input type="checkbox" name="privilege[R6]" value="1" <?php echo ($retval['R6']) ? "checked":""; ?>></td>
      </table>
      <input class="btn btn-primary" type="submit" value="SUBMIT" name="submit">
    </form>
  </body>
</html>

<?php
if (isset($_POST['submit'])) {
	if (!empty($_POST['privilege'])) {
		$sql = "UPDATE `admintable` SET `role` = 'editor' WHERE `admintable`.`name` = '$user'";
		$result = mysqli_query($conn, $sql);
		foreach ($_POST['privilege'] as $key => $value) {
			$sql = "UPDATE `privilage` SET `$key` = '$value' WHERE `privilage`.`name` = '$user'";
			$result = mysqli_query($conn ,$sql);
		}
	}
	echo "<script>alert('Privilege Edit Successful');
	document.location.href='usertable.php'</script>";
}
?>

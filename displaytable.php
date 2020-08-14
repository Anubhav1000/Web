<!DOCTYPE html>

<?php

session_start();
if(!isset($_SESSION['username'])) {
	header('location:logout.php');
}

?>

<?php include 'config.php' ?>
<html>

   <head>
      <title>Your Table</title>
			<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href= "stylesheets/table.css">
   </head>

   <body>
		 <button class="btn btn-primary" onclick="document.location='logout.php'" id="logout">LOGOUT</button>
      <table>
         <tr class="head">
            <td rowspan="3">Name of Unit / Dept.</th>
            <td colspan="4">TARGETS</td>
            <td rowspan="3">Academic Year 1 July to 30 June</td>
         </tr>
         <tr class="head1">
           <td colspan="4">PhD scholars enrolled / likely to be enrolled in that year only (Not cumulative)</td>
         </tr>
         <tr class="head2">
            <td>2019-20 <br> Total PhD scholars on roll <br> as on 30.06.2020</td>
            <td>2019-20 <br> (01.07.2019 - 30.06.2020) <br> Enrolled only in 2019-2020</td>
            <td>2020-21 <br> (01.07.2020 - 30.06.2020) <br> Enrolled only in 2020-2021</td>
            <td>2021-22 <br> (01.07.2021 - 30.06.2022) <br> Enrolled only in 2021-2022</td>
         </tr>
         <tr class="odd">
           <td>FT PhD Scholars</td>
           <?php
           $sql = "SELECT *  FROM `targets` WHERE `dept_name` = 'FT PhD'";
           $retval = mysqli_query($conn, $sql);
           $row=mysqli_fetch_assoc($retval);
           echo '<td>'.$row['enrolled_on_30.06'].'</td>';
           echo '<td>'.$row['enrolled_on_19-20'].'</td>';
           echo '<td>'.$row['enrolled_on_20-21'].'</td>';
           echo '<td>'.$row['enrolled _on_21-22'].'</td>';
            ?>
						<td></td>
         </tr>
         <tr class="even">
           <td>All PT PhD Scholars</td>
           <?php
           $sql = "SELECT *  FROM `targets` WHERE `dept_name` = 'PT PhD'";
           $retval = mysqli_query($conn, $sql);
           $row=mysqli_fetch_assoc($retval);
           echo '<td>'.$row['enrolled_on_30.06'].'</td>';
           echo '<td>'.$row['enrolled_on_19-20'].'</td>';
           echo '<td>'.$row['enrolled_on_20-21'].'</td>';
           echo '<td>'.$row['enrolled _on_21-22'].'</td>';
            ?>
						<td></td>
         </tr>
         <tr class="odd">
           <td>SRM PT PhD Scholars</td>
           <?php
           $sql = "SELECT *  FROM `targets` WHERE `dept_name` = 'SRM PT PhD'";
           $retval = mysqli_query($conn, $sql);
           $row=mysqli_fetch_assoc($retval);
           echo '<td>'.$row['enrolled_on_30.06'].'</td>';
           echo '<td>'.$row['enrolled_on_19-20'].'</td>';
           echo '<td>'.$row['enrolled_on_20-21'].'</td>';
           echo '<td>'.$row['enrolled _on_21-22'].'</td>';
            ?>
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
          <td>R1</td>
          <td>R2</td>
          <td>R3</td>
          <td>R4</td>
          <td>R5</td>
          <td>R6</td>
				</tr>
        <tr class="odd">
          <td>FT PhD Scholars</td>
          <?php
          $sql = "SELECT * FROM `progress` WHERE `Dept Name` = 'FT PhD'";
          $retval = mysqli_query($conn, $sql);
          $row=mysqli_fetch_assoc($retval);
          echo '<td>'.$row['R1'].'</td>';
          echo '<td>'.$row['R2'].'</td>';
          echo '<td>'.$row['R3'].'</td>';
          echo '<td>'.$row['R4'].'</td>';
          echo '<td>'.$row['R5'].'</td>';
          echo '<td>'.$row['R6'].'</td>';
          echo '<td>'.$row['sum'].'</td>';
           ?>
        </tr>
        <tr class="even">
          <td>All PT PhD Scholars</td>
          <?php
          $sql = "SELECT * FROM `progress` WHERE `Dept Name` = 'PT PhD'";
          $retval = mysqli_query($conn, $sql);
          $row=mysqli_fetch_assoc($retval);
          echo '<td>'.$row['R1'].'</td>';
          echo '<td>'.$row['R2'].'</td>';
          echo '<td>'.$row['R3'].'</td>';
          echo '<td>'.$row['R4'].'</td>';
          echo '<td>'.$row['R5'].'</td>';
          echo '<td>'.$row['R6'].'</td>';
          echo '<td>'.$row['sum'].'</td>';
           ?>
        </tr>
        <tr class="odd">
          <td>SRM PT PhD Scholars</td>
          <?php
          $sql = "SELECT * FROM `progress` WHERE `Dept Name` = 'SRM PT PhD'";
          $retval = mysqli_query($conn, $sql);
          $row=mysqli_fetch_assoc($retval);
          echo '<td>'.$row['R1'].'</td>';
          echo '<td>'.$row['R2'].'</td>';
          echo '<td>'.$row['R3'].'</td>';
          echo '<td>'.$row['R4'].'</td>';
          echo '<td>'.$row['R5'].'</td>';
          echo '<td>'.$row['R6'].'</td>';
          echo '<td>'.$row['sum'].'</td>';
           ?>
        </tr>
      </table>
			<?php if ($_SESSION['role'] == 'admin') {
				echo "<p align='center'><a href='edittable.php' class='btn btn-primary'>EDIT / INSERT</a></p>";
			} ?>
   </body>
</html>

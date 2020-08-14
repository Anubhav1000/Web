<!DOCTYPE html>

<?php

session_start();
if(!isset($_SESSION['username']) || ($_SESSION['role'] == 'user')) {
	header('location:logout.php');
}

?>

<?php include 'config.php';
$sql = "SELECT *  FROM `targets` WHERE `dept_name` = 'FT PhD'";
          $retval = mysqli_query($conn, $sql);
          $row=mysqli_fetch_assoc($retval);

          $enrolled301a=$row['enrolled_on_30.06'];
          $enrolled191a=$row['enrolled_on_19-20'];
          $enrolled201a=$row['enrolled_on_20-21'];
          $enrolled211a=$row['enrolled _on_21-22'];

$sql = "SELECT *  FROM `targets` WHERE `dept_name` = 'PT PhD'";
          $retval = mysqli_query($conn, $sql);
          $row=mysqli_fetch_assoc($retval);
          $enrolled302b=$row['enrolled_on_30.06'];
          $enrolled192b=$row['enrolled_on_19-20'];
          $enrolled202b=$row['enrolled_on_20-21'];
          $enrolled212b=$row['enrolled _on_21-22'];

$sql = "SELECT *  FROM `targets` WHERE `dept_name` = 'SRM PT PhD'";
          $retval = mysqli_query($conn, $sql);
          $row=mysqli_fetch_assoc($retval);
          $enrolled303c=$row['enrolled_on_30.06'];
          $enrolled193c=$row['enrolled_on_19-20'];
          $enrolled203c=$row['enrolled_on_20-21'];
          $enrolled213c=$row['enrolled _on_21-22'];

$sql = "SELECT * FROM `progress` WHERE `Dept Name` = 'FT PhD'";
         $retval = mysqli_query($conn, $sql);
         $row=mysqli_fetch_assoc($retval);
         $R11a=$row['R1'];
         $R21a=$row['R2'];
         $R31a=$row['R3'];
         $R41a=$row['R4'];
         $R51a=$row['R5'];
         $R61a=$row['R6'];
         $R14a=$row['sum'];

$sql = "SELECT * FROM `progress` WHERE `Dept Name` = 'PT PhD'";
         $retval = mysqli_query($conn, $sql);
         $row=mysqli_fetch_assoc($retval);
         $R12b=$row['R1'];
         $R22b=$row['R2'];
         $R32b=$row['R3'];
         $R42b=$row['R4'];
         $R52b=$row['R5'];
         $R62b=$row['R6'];
         $R24b=$row['sum'];

$sql = "SELECT * FROM `progress` WHERE `Dept Name` = 'SRM PT PhD'";
         $retval = mysqli_query($conn, $sql);
         $row=mysqli_fetch_assoc($retval);
         $R13c=$row['R1'];
         $R23c=$row['R2'];
         $R33c=$row['R3'];
         $R43c=$row['R4'];
         $R53c=$row['R5'];
         $R63c=$row['R6'];
         $R34c=$row['sum']; ?>


<html>

   <head>
      <title>Edit Table Values</title>
			<link rel ="stylesheet" type= "text/css" href= "stylesheets/table.css">
			<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
   </head>

   <body>
     <form action="" method="post">
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
            <td><input type="text" name="enrolled30F" value="<?php echo $enrolled301a; ?>"></td>
            <td><input type="text" name="enrolled19F" value="<?php echo $enrolled191a; ?>"></td>
            <td><input type="text" name="enrolled20F" value="<?php echo $enrolled201a; ?>"></td>
            <td><input type="text" name="enrolled21F" value="<?php echo $enrolled211a; ?>"></td>
            <td></td>
          </tr>
          <tr class="even">
            <td>All PT PhD Scholars</td>
            <td><input type="text" name="enrolled30P"value="<?php echo $enrolled302b; ?>"></td>
            <td><input type="text" name="enrolled19P"value="<?php echo $enrolled192b; ?>"></td>
            <td><input type="text" name="enrolled20P"value="<?php echo $enrolled202b; ?>"></td>
            <td><input type="text" name="enrolled21P"value="<?php echo $enrolled212b; ?>"></td>
            <td></td>
          </tr>
          <tr class="odd">
            <td>SRM PT PhD Scholars</td>
            <td><input type="text" name="enrolled30S"value="<?php echo $enrolled303c; ?>"></td>
            <td><input type="text" name="enrolled19S"value="<?php echo $enrolled193c; ?>"></td>
            <td><input type="text" name="enrolled20S"value="<?php echo $enrolled203c; ?>"></td>
            <td><input type="text" name="enrolled21S"value="<?php echo $enrolled213c; ?>"></td>
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
            <td class="odd">FT PhD Scholars</td>
            <td><input type="text" name="R1F"value="<?php echo $R11a; ?>"></td>
            <td><input type="text" name="R2F"value="<?php echo $R21a; ?>"></td>
            <td><input type="text" name="R3F"value="<?php echo $R31a; ?>"></td>
            <td><input type="text" name="R4F"value="<?php echo $R41a; ?>"></td>
            <td><input type="text" name="R5F"value="<?php echo $R51a; ?>"></td>
            <td><input type="text" name="R6F"value="<?php echo $R61a; ?>"></td>
            <td></td>
          </tr>
          <tr class="even">
            <td>All PT PhD Scholars</td>
            <td><input type="text" name="R1P"value="<?php echo $R12b; ?>"></td>
            <td><input type="text" name="R2P"value="<?php echo $R22b; ?>"></td>
            <td><input type="text" name="R3P"value="<?php echo $R32b; ?>"></td>
            <td><input type="text" name="R4P"value="<?php echo $R42b; ?>"></td>
            <td><input type="text" name="R5P"value="<?php echo $R52b; ?>"></td>
            <td><input type="text" name="R6P"value="<?php echo $R62b; ?>"></td>
            <td></td>
          </tr>
          <tr class="odd">
            <td>SRM PT PhD Scholars</td>
            <td><input type="text" name="R1S" value="<?php echo $R13c; ?>"></td>
            <td><input type="text" name="R2S" value="<?php echo $R23c; ?>"></td>
            <td><input type="text" name="R3S" value="<?php echo $R33c; ?>"></td>
            <td><input type="text" name="R4S" value="<?php echo $R43c; ?>"></td>
            <td><input type="text" name="R5S" value="<?php echo $R53c; ?>"></td>
            <td><input type="text" name="R6S" value="<?php echo $R63c; ?>"></td>
            <td></td>
          </tr>
        </table>

				<p align="center">
          <a href="displaytable.php" class="btn btn-primary">CANCEL</a>
        <input class="btn btn-primary" type="submit" value="SUBMIT" name="submit">
				</p>
     </form>

     <?php if(isset($_POST['submit']))
     {
         $enrolled301=$_POST['enrolled30F'];
         $enrolled302=$_POST['enrolled30P'];
         $enrolled303=$_POST['enrolled30S'];
         $enrolled191=$_POST['enrolled19F'];
         $enrolled192=$_POST['enrolled19P'];
         $enrolled193=$_POST['enrolled19S'];
         $enrolled201=$_POST['enrolled20F'];
         $enrolled202=$_POST['enrolled20P'];
         $enrolled203=$_POST['enrolled20S'];
         $enrolled211=$_POST['enrolled21F'];
         $enrolled212=$_POST['enrolled21P'];
         $enrolled213=$_POST['enrolled21S'];

         $R11=$_POST['R1F'];
         $R12=$_POST['R1P'];
         $R13=$_POST['R1S'];
         $R21=$_POST['R2F'];
         $R22=$_POST['R2P'];
         $R23=$_POST['R2S'];
         $R31=$_POST['R3F'];
         $R32=$_POST['R3P'];
         $R33=$_POST['R3S'];
         $R41=$_POST['R4F'];
         $R42=$_POST['R4P'];
         $R43=$_POST['R4S'];
         $R51=$_POST['R5F'];
         $R52=$_POST['R5P'];
         $R53=$_POST['R5S'];
         $R61=$_POST['R6F'];
         $R62=$_POST['R6P'];
         $R63=$_POST['R6S'];

         $R14 = $R11 + $R21 + $R31 + $R41 + $R51 + $R61;
         $R24 = $R12 + $R22 + $R32 + $R42 + $R52 + $R62;
         $R34 = $R13 + $R23 + $R33 + $R43 + $R53 + $R63;

         $targtFT = "UPDATE `targets` SET `enrolled_on_30.06` = '$enrolled301', `enrolled_on_19-20` = '$enrolled191', `enrolled_on_20-21` = '$enrolled201', `enrolled _on_21-22` = '$enrolled211' WHERE `targets`.`dept_name` = 'FT PhD'";
         $retval = mysqli_query($conn, $targtFT);

         $targtPT = "UPDATE `targets` SET `enrolled_on_30.06` = '$enrolled302', `enrolled_on_19-20` = '$enrolled192', `enrolled_on_20-21` = '$enrolled202', `enrolled _on_21-22` = '$enrolled212' WHERE `targets`.`dept_name` = 'PT PhD'";
         $retval1 = mysqli_query($conn, $targtPT);

         $targtSRMPT = "UPDATE `targets` SET `enrolled_on_30.06` = '$enrolled303', `enrolled_on_19-20` = '$enrolled193', `enrolled_on_20-21` = '$enrolled203', `enrolled _on_21-22` = '$enrolled213' WHERE `targets`.`dept_name` = 'SRM PT PhD'";
         $retval3 = mysqli_query($conn, $targtSRMPT);


         $prgFT = "UPDATE `progress` SET `R1` = '$R11', `R2` = '$R21', `R3` = '$R31', `R4` = '$R41', `R5` = '$R51', `R6` = '$R61', `sum` = '$R14' WHERE `progress`.`Dept Name` = 'FT PhD'";
         $retval4 = mysqli_query($conn, $prgFT);

         $prgPT = "UPDATE `progress` SET `R1` = '$R12', `R2` = '$R22', `R3` = '$R32', `R4` = '$R42', `R5` = '$R52', `R6` = '$R62', `sum` = '$R24' WHERE `progress`.`Dept Name` = 'PT PhD'";
         $retval5 = mysqli_query($conn, $prgPT);

         $prgSRMPT = "UPDATE `progress` SET `R1` = '$R13', `R2` = '$R23', `R3` = '$R33', `R4` = '$R43', `R5` = '$R53', `R6` = '$R63', `sum` = '$R34' WHERE `progress`.`Dept Name` = 'SRM PT PhD'";
         $retval5 = mysqli_query($conn, $prgSRMPT);

     		if ($targtFT && $targtPT && $targtSRMPT && $prgFT && $prgPT && $prgSRMPT)
     		{
     			echo "<script>alert('Data Insert Successful');
     			document.location.href='displaytable.php'</script>";
     		}


     		else
     		{
     			echo "<script>alert('Data Insert Failed');
					document.location.href='displaytable.php'</script>";
     		}


     } ?>

   </body>
</html>

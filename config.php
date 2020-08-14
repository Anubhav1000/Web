<?php

   $dbhost = '127.0.0.1';
   $dbuser = 'root';
   $dbpass = '';
   $dbname = 'record';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
?>

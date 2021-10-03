<?php

   $host = "localhost";
   $user = "Aditya66";
   $pass = "Github@123456";
   $db = "id13776182_blooddb";

   $con = mysqli_connect($host, $user, $pass, $db);


   if ($con) {
       echo "Connected to Database";
   } else {
       echo "Failed to connect".mysqli_connect_error();
   }

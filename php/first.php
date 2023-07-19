<?php

   $serverName = "localhost";
   $userName = "root";
   $password = "";
   $dataBaseName = "corvit-cit";

   $con = new mysqli($serverName, $userName, $password, $dataBaseName);

   // $sql = "UPDATE `std-marks ` SET password = '1267' WHERE id = 1";
   // if ($con->query($sql) == TRUE) {
   //    echo "Data updated successfully";
   // }else{
   //    echo "Something wrong with the query";
   // }

   $sql = "INSERT INTO students (`name`, `email`, `password`) VALUES ('Ahsan Zaheer', 'zaheerahsan775@gmail.com', 'demon143')";
   if ($con->query($sql) == TRUE) {
      echo "Data Inserted";
   }else{
      echo "An Error Occurred!";
   }
?> 
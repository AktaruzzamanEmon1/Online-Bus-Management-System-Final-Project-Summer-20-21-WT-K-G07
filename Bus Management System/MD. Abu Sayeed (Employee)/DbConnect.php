<?php

    $conn = new mysqli("localhost","ask","123456789","employee");
      var_dump($conn);

      echo "<br>";

      if($conn->connect_errno) {
      	 die("Database connection failed ..." . $conn->connect_err);

      }
       echo "Database connected successfully";
?>
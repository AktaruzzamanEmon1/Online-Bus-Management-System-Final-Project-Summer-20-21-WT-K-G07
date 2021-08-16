<?php

   require 'model/DbConnect.php';
    
    $conn = connect();
     $sql = $conn->prepare("INSERT INTO `manager registration form` (fullname, address, phone, username, password) VALUES (?, ?, ?, ?, ?)");
    $sql->bind_param("ssiss", $fullname, $address, $phone, $username, $password);
   
     $fullname = " MD. Aktaruzzaman Emon";
     $address = "Dinajpur";
     $phone  = " 01796790193";
     $username = "Emon";
     $password = "1234";
     $res = $sql->execute();
     var_dump($res);


?>
<?php

   require 'model/DbConnect.php';
     function register( $Complain){
    $conn = connect();
     $sql = $conn->prepare("INSERT INTO `report` (Complain) VALUES (?)");
    $sql->bind_param("s", $Complain);
   
     
     
     $res = $sql->execute();
     
}

?>
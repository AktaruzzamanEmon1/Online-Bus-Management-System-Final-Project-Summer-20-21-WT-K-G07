<?php

    require 'model/DbConnect.php';
    function register( $fullname, $address, $phone, $username, $password){
    $conn = connect();
     $sql = $conn->prepare("INSERT INTO `customer registration form` (fullname, address, phone, username, password) VALUES (?, ?, ?, ?, ?)");
    $sql->bind_param("ssiss", $fullname, $address, $phone, $username, $password);
    return $sql->execute();
    
}

?>
<?php

    
    function removeUser( $uid, $username){
    $conn = connect();
     $sql = $conn->prepare("DELETE FROM `employee registration form` WHERE id = ? and username = ?");
    $sql->bind_param("is", $uid, $username);
    return $sql->execute();
    
}

?>
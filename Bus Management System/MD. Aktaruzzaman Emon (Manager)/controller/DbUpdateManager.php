<?php

require 'model/DbConnect.php';
function changePassword($username, $password){
$conn = connect();
$sql = $conn->prepare("UPDATE `manager registration form` SET password = ? where username = ?");
$sql->bind_param("ss", $password, $username);

return $sql->execute();


}
?>
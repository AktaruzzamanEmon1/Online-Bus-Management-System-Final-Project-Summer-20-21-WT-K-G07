<?php

require 'model/DbConnect.php';
function updatesalary($username, $salary){
$conn = connect();
$sql = $conn->prepare("INSERT INTO `salaryupdate` SET salary = ? where username = ?");
$sql->bind_param("ss", $salary, $username);

return $sql->execute();


}
?>
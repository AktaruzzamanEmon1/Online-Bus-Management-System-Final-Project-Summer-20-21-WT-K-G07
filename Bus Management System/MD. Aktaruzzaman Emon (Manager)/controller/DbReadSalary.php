<?php

require 'model/DbConnect.php';
require 'DbUpdateSalary.php';



function getAllUsers() {
$conn = connect();
$sql = $conn->prepare("SELECT id, fullname, phone, username,salary FROM `salaryupdate` ");
$sql->execute();
$res = $sql->get_result();
return $res->fetch_all(MYSQLI_ASSOC);

}


?>
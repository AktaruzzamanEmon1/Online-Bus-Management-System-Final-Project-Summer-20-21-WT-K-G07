<?php

require 'model/DbConnect.php';
function login ($username, $password){
$conn = connect();
$sql = $conn->prepare("SELECT * FROM `customer registration form` WHERE username = ? and password = ?");
$sql->bind_param("ss", $username, $password);

$sql->execute();
$res = $sql->get_result();
return $res->num_rows === 1;

}


function getAllUsers() {
$conn = connect();
$sql = $conn->prepare("SELECT id, fullname, address, phone, username FROM `customer registration form` ");
$sql->execute();
$res = $sql->get_result();
return $res->fetch_all(MYSQLI_ASSOC);

}


function getUser($username) {
$conn = connect();
$sql = $conn->prepare("SELECT id, fullname, address, phone, username FROM `customer registration form` WHERE username = ?");
$sql->bind_param("s", $username);
$sql->execute();
$res = $sql->get_result();
return $res->fetch_all(MYSQLI_ASSOC);

}



?>
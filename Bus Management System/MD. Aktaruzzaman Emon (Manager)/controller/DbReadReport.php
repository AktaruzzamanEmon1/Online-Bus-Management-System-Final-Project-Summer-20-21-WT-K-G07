
<?php
require 'model/DbConnect.php';
function getAllUsers() {
$conn = connect();
$sql = $conn->prepare("SELECT * FROM `report` ");
$sql->execute();
$res = $sql->get_result();
return $res->fetch_all(MYSQLI_ASSOC);

}

?>
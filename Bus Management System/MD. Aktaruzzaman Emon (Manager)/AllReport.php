<?php 

  require 'controller/DbReadReport.php';
  require 'controller/DbDeleteReport.php';
  
  $userList = getAllUsers();

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet"  href="view/MyCSS.css">
</head>
<body>
	<h2 align="center"> All Reports </h2>

	<?php
	
			echo "<table align='center'>";
            echo "<th>ID</th>";
			echo "<th>Complain</th>";
			
			
			for($i = 0; $i < count($userList); $i++) {
				
				echo "<tr>";
				echo "<td>" . $userList[$i]["id"] . "</td>";
				echo "<td>" . $userList[$i]["Complain"] . "</td>";
				
				
				
				echo "</tr>";
			   }
			echo "</table>";
	?>

</body>
</html>


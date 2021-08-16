<?php 
  require 'controller/DbReadEmployee.php';
 
  
  $userList = getAllUsers();
  		
include "view/config.php"; 

	
?>
<!DOCTYPE html>
<html>
<head>
	<body style="background-color:#CCCCFF;">
	<link rel="stylesheet"  href="view/MyCSS.css">
	<?php include 'Title.php'; ?>
</head>
<body>
<h1><?php include 'Top_Heading.php'; ?> </h1>
	<h2>Manage Salary</h2> 
	<br>
	
	<fieldset>
		<button style="background-color:  #ffb3ff"><a href="Manager.php">Back</a></button>
		<button style="background-color:  #ffb3ff"><a href="Home_page.php">Home</a></button>
	<button style="background-color:  #ffb3ff"><a href="SalaryUpdate.php">Salary Update</a></button>
	
	
</fieldset>
<br>

	<?php 
		
			echo "<table border=>";
            echo "<th>ID</th>";
			echo "<th>Full Name</th>";
			
			echo "<th>Phone Number</th>";
			echo "<th>User Name</th>";
			echo "<th>Salary</th></tr>";
			for($i = 0; $i < count($userList); $i++) {
				
				echo "<tr>";
				echo "<td>" . $userList[$i]["id"] . "</td>";
				echo "<td>" . $userList[$i]["fullname"] . "</td>";
				
				echo "<td>" . $userList[$i]["phone"] . "</td>";
				echo "<td>" . $userList[$i]["username"] . "</td>";
				
				echo "</tr>";
			   }
			echo "</table>";
		

	?>


</body>
</html>
<?php 
  require 'controller/DbReadEmployee.php';
  require 'controller/DbDeleteEmployee.php';
 $successfulMessage = $errorMessage = "";

  $username = empty($_GET['username']) ? "" : $_GET['username'];
  if (empty($_GET['search']) or empty($username) ){
  	 $userList = getAllUsers();
  }
  else{
  	  $userList = getUser($username);  
  }
  if(!empty($_GET['uid']) and !empty($_GET['uname'])){
  	$response = removeUser($_GET['uid'], $_GET['uname']);
  	if($response){
  		$userList = getAllUsers();
  		$successfulMessage = "Successfully Deleted an User";

  	}
  	else {
  		$errorMessage = "Error While Deleting an User";
  	}
  }
 
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
	<h2>Employee List</h2> 
	<br>
	
	<fieldset>
		<button style="background-color:  #ffb3ff"><a href="Manager.php">Back</a></button>
		<button style="background-color:  #ffb3ff"><a href="Home_page.php">Home</a></button>
	
</fieldset>
<br>
<hr>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
	<input type="text" name="username" value ="<?php echo $username; ?>">
	<input type="submit" name="search" value="Search">
	</form>
<br>
	<?php 
		if(count($userList) > 0)
		{
			echo "<table border=>";

            echo "<th>ID</th>";
			echo "<th>Full Name</th>";
			echo "<th>Address</th>";
			echo "<th>Phone Number</th>";
			echo "<th>User Name</th>";
			echo "<th>Action</th></tr>";
			for($i = 0; $i < count($userList); $i++) {
				
				echo "<tr>";
				echo "<td>" . $userList[$i]["id"] . "</td>";
				echo "<td>" . $userList[$i]["fullname"] . "</td>";
				echo "<td>" . $userList[$i]["address"] . "</td>";
				echo "<td>" . $userList[$i]["phone"] . "</td>";
				echo "<td>" . $userList[$i]["username"] . "</td>";
				echo "<td> <a href='" . $_SERVER['PHP_SELF'] . "?uid= " . $userList[$i]["id"]. "&uname=" .  $userList[$i]["username"] . "'>Delete</a></td>";
				echo "</tr>";
			   }
			echo "</table>";
		}
		else
		{
			echo "<h3> No Records Found</h3>";
		}

	?>
	<br>
		<span style="color: green;"><?php echo $successfulMessage; ?></span>
		<span style="color: red;"><?php echo $errorMessage; ?></span>

</body>
</html>
<?php
   
   
   require 'controller/DbUpdateSalary.php';
   include "view/config.php";

   session_start();
   
	$username = $_SESSION['username'];
	$salary = "";
	$isValid = true;
	$usernameErr = $salaryErr = "";
	$successfulMessage = $errorMessage = "";
	
	

if($_SERVER['REQUEST_METHOD'] === "POST") {
	$username = $_POST['username'];
		$salary = $_POST['salary'];
		if(empty($username)) {
			$usernameErr = "User name can not be empty!";
			$isValid = false;
		}
		if(empty($salary)) {
			$salaryErr = "Salary can not be empty!";
			$isValid = false;
		}
		
		 if($isValid) 
		 {

			if(strlen($username) > 6) {
				$usernameErr = "Username max size 6!";
			    $isValid = false;

			}
			
			 if($isValid) {
            
			$username = test_input($username);
			$salary = test_input($salary);

			
			$response = updatesalary($salary, $username); 
			if($response) {
				$successfulMessage = " Salary Added";
			}
			else {
				$errorMessage = "Error while Added Salary";
			}
				
			
				
				  }
          }
	}
	function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
	}

	
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
<fieldset>
	<legend>Salary Form</legend>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		

			<label for="username">Username:</label>
			<input type="text" name="username" id="username" >
			<span style="color:red"><?php echo $usernameErr; ?></span>

			<br><br>

			<label for="salary">Salary:</label>
			<input type="text" name="salary" id="salary" >
			<span style="color:red"><?php echo $salaryErr; ?></span>

			<br><br>

			<input type="submit" name="submit" value="Add Salary">
		</fieldset>
	</form>

	<p style="color:green;"><?php echo $successfulMessage; ?></p>
	<p style="color:red;"><?php echo $errorMessage; ?></p>

	<br>

	<button style="background-color:  #ffb3ff"><a href="Manage_Salary.php"> Back</a></button>

</body>
</html>
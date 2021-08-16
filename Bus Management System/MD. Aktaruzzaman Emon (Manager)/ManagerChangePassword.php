<?php
   
   require 'controller/DbUpdateManager.php';
   include "view/config.php";

   session_start();
   
	$username = $_SESSION['username'];
	$password = "";
	$isValid = true;
	$usernameErr = $passwordErr = "";
	$successfulMessage = $errorMessage = "";
	
	

if($_SERVER['REQUEST_METHOD'] === "POST") {
		$password = $_POST['password'];
		if(empty($username)) {
			$usernameErr = "User name can not be empty!";
			$isValid = false;
		}
		if(empty($password)) {
			$passwordErr = "Password can not be empty!";
			$isValid = false;
		}
		
		 if($isValid) 
		 {

			if(strlen($username) > 6) {
				$usernameErr = "Username max size 6!";
			    $isValid = false;

			}
			if(strlen($password) > 8) {
				$passwordErr = "Password max size 8!";
			     $isValid = false;
			 }
			 if($isValid) {
            
			$username = test_input($username);
			$password = test_input($password);

			
			$response =changePassword($username, $password); 
			if($response) {
				$successfulMessage = " Password Changed";
			}
			else {
				$errorMessage = "Error while Changing Password";
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
	<legend>Change Password Form</legend>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		

			<label for="username">Username:</label>
			<input type="text" name="username" id="username" value = " <?php echo $username; ?>" disabled>
			<span style="color:red"><?php echo $usernameErr; ?></span>

			<br><br>

			<label for="password">Password:</label>
			<input type="password" name="password" id="password" >
			<span style="color:red"><?php echo $passwordErr; ?></span>

			<br><br>

			<input type="submit" name="submit" value="Change Password">
		</fieldset>
	</form>

	<p style="color:green;"><?php echo $successfulMessage; ?></p>
	<p style="color:red;"><?php echo $errorMessage; ?></p>

	<br>

	<p>Back to<a href="Login.php">Login</a></p>

</body>
</html>
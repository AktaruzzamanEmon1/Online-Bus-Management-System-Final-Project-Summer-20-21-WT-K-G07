<?php
   require 'controller/DbReadManager.php';
   include "view/config.php";
   
	
	$username = $password = "";
	$isValid = true;
	$usernameErr = $passwordErr = "";
	$uid = "";
	$successfulMessage = $errorMessage = "";
	if(isset($_COOKIE['uid'])) {
		$uid = $_COOKIE['uid'];
	}
	
	

if($_SERVER['REQUEST_METHOD'] === "POST") {
		$username = $_POST['username'];
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
				   $response = login($username, $password);
				if( $response) {
					if(isset($_POST['rememberme'])) {
					setcookie("uid", $username, time() + 60*2*1*1);
				}
					session_start();
					$_SESSION['uid'] = $username;
					header("Location: Manager.php");
				}
				else{
					$errorMessage = "Login Failed";
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
<body>
<h1><?php include 'Top_Heading.php'; ?> </h1>
	

	<form action="<?php echo $_SERVER['PHP_SELF'] ?>"  method="POST" name="loginForm" onsubmit="return isvalid()">
		<fieldset align="center">
			<legend>Login Form</legend>

			<label for="username">Username:</label>
			<input type="text" name="username" id="username" ><br>
			<span style="color:red" id="usernameErr"><?php echo $usernameErr; ?></span>

			<br><br>
			

			<label for="password">Password:</label>
			<input type="password" name="password" id="password"><br>
			<span style="color:red" id="passwordErr"><?php echo $passwordErr; ?></span>           
			<br><br>
			<input type="checkbox" name="rememberme" id="rememberme">
			<label for="rememberme">Remember Me:</label>

			<br><br>


			<button style="background-color:  #ffb3ff"><a href="Home_page.php"> Back</a></button>

			<input type="submit" name="submit" value="Login">
			 <h3 align="center" style="color:red"> <?php echo  $errorMessage ;?> </h3>

		</fieldset>
	</form>
	<script>
	function isvalid(){
    var flag = true;
    var usernameErr = document.getElementById("usernameErr");
    var passwordErr = document.getElementById("passwordErr");
    var username = document.forms["loginForm"]["username"].value;
    var password = document.forms["loginForm"]["password"].value;
    usernameErr.innerHTML = "";
    passwordErr.innerHTML = "";
     if (username === ""){
    	flag = false;
    	 usernameErr.innerHTML = " Please fillup the user name";

    }
     if (password === ""){
    	flag = false;
    	 passwordErr.innerHTML = " Please fillup the password";

    }
    return flag;


	}
</script>

</body>
</html>
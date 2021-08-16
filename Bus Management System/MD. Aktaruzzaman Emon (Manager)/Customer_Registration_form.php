<?php 
 	require 'controller/DbInsertCustomer.php';
 	include "view/config.php"; 

	$fullnameErr  = $addressErr =   $phoneErr = $usernameErr = $passwordErr = "";
	$successfulMessage = $errorMessage = "";
	if($_SERVER['REQUEST_METHOD'] === "POST") {
		$fullname = $_POST['fullname'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$isValid = true;
		if(empty($fullname)) {
			$fullnameErr = " Please fillup the Full name";
			$isValid = false;
		}
		
		
		if(empty($address)) {
			$addressErr = " Please fillup the Address";
			$isValid = false;
		}
		if(empty($phone)) {
			$phoneErr = "Please fillup the phonenumber";
			$isValid = false;
		}
		
		if(empty($username)) {
			$usernameErr = "Please fillup the user name";
			$isValid = false;
         }
		if(empty($password)) {
			$passwordErr = " Please fillup the password";
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

			
			
			$response =register($fullname, $address, $phone, $username, $password); 
			if($response) {
				$successfulMessage = "Successfully saved.";
			}
			else {
				$errorMessage = "Error while saving.";
			}
		}
		}
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
	<legend> Customer Registration Form</legend>

	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" name="registrationForm" onsubmit="return isvalid()">

			<label for="fullname">Full Name:</label>
			<input type="text" name="fullname" id="fullname">
			<span style="color:red" id="fullnameErr"><?php echo $fullnameErr; ?></span>

			<br><br>
            <label for="address">Address:</label>
			<input type="text" name="address" id="address">
			<span style="color:red" id="addressErr"><?php echo $addressErr; ?></span>

			<br><br>
			<label for="phone">Phone Number:</label>
			<input type="tel" name="phone" id="phone">
			<span style="color:red" id="phoneErr"><?php echo $phoneErr; ?></span>

			<br><br>

			<label for="username">Username:</label>
			<input type="text" name="username" id="username" >
			<span style="color:red" id="usernameErr"><?php echo $usernameErr; ?></span>

			<br><br>

			<label for="password">Password:</label>
			<input type="password" name="password" id="password" >
			<span style="color:red" id="passwordErr"><?php echo $passwordErr; ?></span>

			<br><br>

			<input type="submit" name="submit" value="Register">
		</fieldset>
	</form> <br>

	<p>Back to<a href="Home_page.php">Login</a></p>


	<p style="color:green;"><?php echo $successfulMessage; ?></p>
	<p style="color:red;"><?php echo $errorMessage; ?></p>


<script>
	function isvalid(){
  
     var flag = true;
     var fullnameErr = document.getElementById("fullnameErr"); 
    var addressErr = document.getElementById("addressErr");
    var phoneErr = document.getElementById("phoneErr");
    var usernameErr = document.getElementById("usernameErr");
    var passwordErr = document.getElementById("passwordErr");

    var fullname = document.forms["registrationForm"]["fullname"].value;
    var address = document.forms["registrationForm"]["address"].value;
     var phone = document.forms["registrationForm"]["phone"].value;
    var username = document.forms["registrationForm"]["username"].value;
    var password = document.forms["registrationForm"]["password"].value;
   
    fullnameErr.innerHTML = "";
    addressErr.innerHTML = "";
    phoneErr.innerHTML = "";
    usernameErr.innerHTML = "";
    passwordErr.innerHTML = "";
   

    if (fullname === "" ){
    	flag = false;
    	fullnameErr.innerHTML = "Please fillup the Full name";
    	
    }
    if (address === "" ){
    	flag = false;
    	addressErr.innerHTML = " Please fillup the Address";
    	
    }
    if (phone === "" ){
    	flag = false;
    	phoneErr.innerHTML = "Please fillup the phonenumber";
    	
    }
    if (username === "" ){
    	flag = false;
    	usernameErr.innerHTML = "Please fillup the user name";
    	
    }
    if (password === "" ){
    	flag = false;
    	 passwordErr.innerHTML = "Please fillup the password";
    	
    }
    return flag;
	}
</script>
<button style="background-color:  #ffb3ff"><a href="Home_page.php"> Back</a></button>
	

</body>
</html>
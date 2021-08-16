
<?php 
	session_start();
	$userId = isset($_SESSION['uid']) ? $_SESSION['uid'] : ""; 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<center> <h1> Online Bus Managment System </h1></center>
	<title> Home Page </title>
</head>
<body>
        <fieldset>
	       <legend> <h3> Employee FORM: </h3>  </legend>
                               
	<h1>Welcome, <?php echo $userId; ?></h1>
	        
		<p>     <a href="Dashboard.php"<span style="color: green ;">  Dashboard   </a></p>	
			

	<p>     <a href="Profile.php"<span style="color: green ;">  Profile  </a></p>
	
	       
			<a href="Check Working Schedule.php"><span style="color: green ;"> Check Working Schedule </span>: </a><br><br>
			
			<a href="Check Salary.php"><span style="color: green ;"> Check Salary </span>: </a><br><br>
			
			
			<a href="Feedback.php" > <span style="color: green;"> Feedback </span>: </a><br><br>
			
			
			<a href="Extra Working Details.php" > <span style="color: green ;">Extra Working Details </span>: </a><br><br>
			
			
			<a href="Manager Contract Number.php"><span style="color: green ;">Manager Contract Number  </span>: </a><br><br>
			
            <p> <a href="logout.php"><span style="color:red ;">Logout</a></p>
			
			</fieldset>

</body>
</html>

<?php include 'admin_footer.php';?>
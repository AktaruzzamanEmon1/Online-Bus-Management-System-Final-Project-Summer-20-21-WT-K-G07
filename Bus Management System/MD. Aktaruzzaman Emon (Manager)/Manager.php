<?php
include "view/config.php"; 
	session_start();
	$userId = isset($_SESSION['uid']) ? $_SESSION['uid'] : ""; 
?>
<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet"  href="view/MyCSS.css">
	 <body style="background-color:#CCCCFF;">
<?php include 'Title.php'; ?>
</head>

<body>
<form>
	<table>

<h1><?php include 'Top_Heading.php'; ?> </h1>


<h2>Welcome, <?php 
             if(isset($_SESSION['username'])) {
             	echo $_SESSION['username'];
             }
             else{
             	header("Location: Logout.php");
             }
 ?></h2>


	<button style="background-color:  #ffb3ff"><a href="Login.php"> Back</a></button>
	<button style="background-color:  #ffb3ff"><a href="Manager_Profile.php"> View Profile	</a></button>
	<button style="background-color:  #ffb3ff"><a href="Logout.php">Logout</a></button>		

		<h2 align="center"> Chooose an Option:</h2>
		<table align="center">
		<tr>		
			<td><button style="background-color:  #ffb3ff"><a href="Employee_Registration_form.php"> Add Employee</a></button></td>		
		</tr>
		<tr>
	<td><button style="background-color:  #ffb3ff"><a href="View_Report.php"> View report</a></button></td>		
		</tr>
		
		<tr>
			
			<td><button style="background-color:  #ffb3ff"><a href="Employee_data.php"> Employee List</a></button></td>		
		</tr>
		<tr>
			
			
			<td><button style="background-color:  #ffb3ff"><a href="user.php"> Customer List</a></button></td>		
		</tr>
		<tr>
			
			<td><button style="background-color:  #ffb3ff"><a href="Manage_Salary.php"> Manage Salary</a></button></td>		
            	
           
		</tr>
		<tr>
			
			
			<td><button style="background-color:  #ffb3ff"><a href="Bus_Booking_Record.php"> Bus Booking Record</a></button></td>	
		</tr>
		
	
</form>
</body>
</html>
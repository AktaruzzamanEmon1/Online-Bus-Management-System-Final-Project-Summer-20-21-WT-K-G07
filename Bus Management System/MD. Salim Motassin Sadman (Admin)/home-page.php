
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
	       <legend> <h3> ADMIN FORM: </h3>  </legend>
                               
	<h1>Welcome, <?php echo $userId; ?></h1>
	
	<p>     <a href="users-list.php"<span style="color: green ;">  Dashboard   </a></p>

	<p>     <a href="profile.php"<span style="color: blue ;">  Profile  </a></p>
	
	       
			<a href="manager_information.php"><span style="color: green ;">Manager Information</span>: </a><br><br>
			<a href="customer_information.php"><span style="color: blue ;">Customer Information</span>: </a><br><br>
			<a href="employe_information.php" > <span style="color: green;">Employe Information</span>: </a><br><br>
			<a href="customer_feedback.php" > <span style="color: blue ;">Customer Feedback</span>: </a><br><br>
			<a href="add_packase.php"><span style="color: green ;">Add Packages </span>: </a><br><br>
			<a href="add_employe.php" ><span style="color: blue;">Add Employee</span>: </a><br><br>
			<a href="add_manager.php" > <span style="color: green;">Add Manager</span>: </a><br><br>
		    
		    <a href="add_customer.php"><span style="color: blue;">Add Customer</span>: </a><br><br>
			
            <p> <a href="logout.php"><span style="color:red ;">Logout</a></p>
			
			</fieldset>

</body>
</html>

<?php include 'admin_footer.php';?>
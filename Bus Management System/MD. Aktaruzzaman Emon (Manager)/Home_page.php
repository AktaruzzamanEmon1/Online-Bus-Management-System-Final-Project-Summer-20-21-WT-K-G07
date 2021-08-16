<?php
include "view/config.php"; 
?>
<!DOCTYPE html>
<html>

<head>
	 <body style="background-color:#CCCCFF;">
<?php include 'Title.php'; ?>
<link rel="stylesheet"  href="view/MyCSS.css">

</head>

<body>
	
<form>
	
  <fieldset>
<h1><?php include 'Top_Heading.php'; ?> </h1>
<h2>Login As</h2>

	
	<button style="background-color:  #ffb3ff"><a href=""> Customer</a></button><br><br>

	
	<button style="background-color:  #ffb3ff"><a href="">Employee</a></button><br><br>
	
	<button style="background-color:  #ffb3ff"><a href="Login.php">Manager</a></button><br><br>
	<button style="background-color:  #ffb3ff"><a href="">Admin</a></button><br><br>
	
			
		<table align="center">
			<tr>			
			<td><button style="background-color:  #ffb3ff"><a href="Bus_Schedule.php">  Check Bus Schedule</a></button></td>
			
			</tr>
				<tr>			
			<td><button style="background-color:  #ffb3ff"><a href="Report.php">  Report Submit</a></button></td>
			
			</tr>
					
		
	<p>New user? <a href="Customer_Registration_form.php"> Click here</a> for registration.</p>


</fieldset>  

</form>
</body>
</html>
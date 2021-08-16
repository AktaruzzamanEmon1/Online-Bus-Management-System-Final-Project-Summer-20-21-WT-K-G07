<?php 
 	require 'controller/DbInsertReport.php';
 	include "view/config.php"; 
	$report = "";
	$isValid = true;
	$reportErr = "";
	$successfulMessage = $errorMessage = "";
	if($_SERVER['REQUEST_METHOD'] === "POST") {
		$report = $_POST['report'];
		
		if(empty($report)) {
			$reportErr = "Complain can not be empty!";
			$isValid = false;
		}
		        
         if($isValid) {
			$report = test_input($report);
			$response =register($report);
			if($response) {
				
			}
			else {
				
				$successfulMessage = "Successfully saved.";
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
	<legend> Report Form</legend>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="POST" name="reportForm" onsubmit="return isvalid()">
		
			

			<label for="report">Enter Complain:</label>
			<input type="text" name="report" id="report">
			<span style="color:red" id="reportErr"><?php echo $reportErr; ?></span>

			<br><br>

			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>

	<p style="color:green;"><?php echo $successfulMessage; ?></p>
	<p style="color:red;"><?php echo $errorMessage; ?></p>

	<br>

	<button style="background-color:  #ffb3ff"><a href="Home_page.php"> Back</a></button>
	<script>
	function isvalid(){
	var flag = true;
	var reportErr = document.getElementById("reportErr"); 
    var report = document.forms["reportForm"]["report"].value;
    reportErr.innerHTML = "";
        if (report === "" ){
    	flag = false;
    	reportErr.innerHTML = "Complain can not be empty!";
    	
    }
    return flag;
	}
</script>

</body>
</html>
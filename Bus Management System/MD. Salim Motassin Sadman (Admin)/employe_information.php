
<?php $db=mysqli_connect("localhost","root","","ccrud");?>


<html>
<head>
<h1> Employe Information <h1>
</head>
<body>

			</body>
		
			
				
<table style="width: 80%" border="1">
<tr>
    <th>Sl#</th>
   <th>Name</th>
	<th>Username</th>
	<th>password</th>
	<th>Gmail</th>
	<th>phone</th>

	</tr>
	<?php 
	$i =0;
	$qry="select * from rag";
	$run=$db -> query($qry);
	if($run -> num_rows >0){
		while($row = $run -> fetch_assoc()){
		$id=$row['id'];	
		?>	
	<tr>
	<td><?php echo $i++;?></td>
	<td><?php echo $row['name']; ?></td>
	<td><?php echo $row['uname']; ?></td>
	<td><?php echo $row['pass']; ?></td>
	<td><?php echo $row['gmail']; ?></td>
	<td><?php echo $row['phone']; ?></td>
	<td>

</tr>
<?php
		}
	}
	?>

</table>
<p>Click here to <a href="home-page.php">Home</a></p>
	<p>Click here to <a href="logout.php">Logout</a></p>

</body>
</html>


<?php
if(isset($_POST['submit'])){
	 $name=$_POST['name'];	
	$uname=$_POST['uname'];
	$pass=$_POST['pass'];
	$gmail=$_POST['gmail'];
	$phone=$_POST['phone'];
	$qry="insert into rag values(null,'$name','$uname','$pass','$gmail','$phone')";
	if(mysqli_query($db,$qry)){
		//echo '<script>alert("Sumitted successfully")</script>';
		header('location:add_employe.php');
	}else{
		echo mysqli_error($db);
	}
	}
?>

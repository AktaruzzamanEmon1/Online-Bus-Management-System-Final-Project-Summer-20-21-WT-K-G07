<?php
 $db=mysqli_connect("localhost","root","","ccrud");
 if(!$db){
	 die('error in db' . mysqli_error($db));
	 }
 $id=$_GET['id'];
 $qry="delete from rag where id=$id";
 if(mysqli_query($db,$qry)){
	 header('location:add_employe.php');
	 }else{
		echo mysqli_error($db); 
		 
	 }
 
 
 
 
 ?>

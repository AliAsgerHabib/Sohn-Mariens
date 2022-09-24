<?php
	include '../database_connect.php';
	$x=$_REQUEST["a"];
	$r=mysqli_query($con,"update patients set status='Completed' where id=$x");
	if($r)
	{
		header("location:appointment_details.php");	
	} 
?>
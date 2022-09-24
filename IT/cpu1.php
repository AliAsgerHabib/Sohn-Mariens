<?php
	$id=$_REQUEST['a'];
	$pass=$_POST["pass"];
	echo $id,$pass;
	include '../database_connect.php';
	$r=mysqli_query($con,"update login_users set password='$pass' where eid='$id'");
	if($r)
		header("location:dashboard.php");
?>
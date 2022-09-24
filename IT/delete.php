<?php

	$id=$_REQUEST["a"];
	include("../database_connect.php");
	$d1=mysqli_query($con,"delete from login_users where eid='$id'");
	if($d1)
	{
		$d2=mysqli_query($con,"update employee set hasAccount=0 where id='$id'");
		header('location:delete_user.php');
	}
	else echo mysqli_error($con);
?>
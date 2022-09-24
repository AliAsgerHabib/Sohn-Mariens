<?php
	include("../database_connect.php");
	$uname=$_REQUEST["user_name"];
	$r=mysqli_query($con,"select username from login_users where username='$uname'");
	if($rowp=mysqli_fetch_array($r))
	{
		echo "true";
	}
		else echo "false";
?>
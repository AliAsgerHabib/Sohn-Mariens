<?php
		include '../database_connect.php';
		if(isset($_REQUEST["del"]))
		{
			if(!isset($_POST["chk"]))
				header('location:delete_user.php');
			$arr=$_POST["chk"];
			for($i=0;$i<count($arr);$i++)
			{
				$r=mysqli_query($con,"delete from login_users where eid='$arr[$i]'");

				if($r) 
				{
					$d2=mysqli_query($con,"update employee set hasAccount=0 where id='$arr[$i]'");
					header('location:delete_user.php');
				}	
				else echo mysqli_error($con);
			}
		}
	?>
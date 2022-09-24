<?php
	if($_REQUEST["ward"]=='')
		echo "<span class='error1'>* Select a ward first *</span>";	
	else
		{
			$ward=$_REQUEST["ward"];
			$bed=$_REQUEST["bed"];
			include("../database_connect.php");
			$check=mysqli_query($con,"select * from admit where ward='$ward' and bno='$bed' and isadmit=1");
			if($row=mysqli_fetch_array($check))
			{
				echo "true";
			}
			else echo "false";
}
?>
<?php
	include("../database_connect.php");

	$pname=mysqli_real_escape_string($con,$_POST["pname"]);
	$fname=mysqli_real_escape_string($con,$_POST["fname"]);
	$age=mysqli_real_escape_string($con,$_POST["age"]);
	$gender=mysqli_real_escape_string($con,$_POST["gender"]);
	$weight=mysqli_real_escape_string($con,$_POST["weight"]);
	$height=mysqli_real_escape_string($con,$_POST["height"]);
	$dept=mysqli_real_escape_string($con,$_POST["dept"]);
	$doc=mysqli_real_escape_string($con,$_POST["doc"]);
	$ap_date=mysqli_real_escape_string($con,$_POST["ap_date"]);
	$ap_time=mysqli_real_escape_string($con,$_POST["ap_time"]);
	$phno=mysqli_real_escape_string($con,$_POST["phno"]);
	$mail=mysqli_real_escape_string($con,$_POST["mail"]);
	$amt=mysqli_real_escape_string($con,$_POST["amount"]);
	$aadno=mysqli_real_escape_string($con,$_POST["aadno"]);
	$pmc="";
	
	if(isset($_POST["ds"]))
	{
		$x=$_POST["ds"];
		for($i=0;$i<sizeof($x);$i++)
		$pmc=$pmc.$x[$i]."::";
	}	
	$det="";
	$paymode=mysqli_real_escape_string($con,$_POST["pay_mode"]);
	if($paymode=="Cheque")
		$det=mysqli_real_escape_string($con,$_POST["chq_no"]);
	else if($paymode=="Credit / Debit Card")
		$det=mysqli_real_escape_string($con,$_POST["acc_name"]);
	else if($paymode=="UPI Transfer")
		$det=mysqli_real_escape_string($con,$_POST["upi"]);

	$r=mysqli_query($con,"insert into patients (Name,fname,age,gender,weight,height,pmc,department,doc_name,App_Date,App_Time,PhNo,EID,Amount,Status,aadno,pay_mode,pay_det) values('$pname','$fname','$age','$gender','$weight','$height','$pmc','$dept','$doc','$ap_date','$ap_time','$phno','$mail','$amt','Active','$aadno','$paymode','$det')");
	if($r)
		header("location:appointment_slip.php?a=$pname&b=$fname&c=$ap_date&d=$ap_time");
	else
		echo mysqli_error($con);
?>

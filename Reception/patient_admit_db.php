<?php
	include("../database_connect.php");
	$patid=mysqli_real_escape_string($con,$_POST["pid"]);
  $pname=mysqli_real_escape_string($con,$_POST["pname"]);
  $age=mysqli_real_escape_string($con,$_POST["age"]);
  $gender=mysqli_real_escape_string($con,$_POST["gender"]);
  $ad_date=mysqli_real_escape_string($con,$_POST["ad_date"]);
  $ad_time=mysqli_real_escape_string($con,$_POST["ad_time"]);
  $dept=mysqli_real_escape_string($con,$_POST["dept"]);
  $doc=mysqli_real_escape_string($con,$_POST["doc"]);
  $cname=mysqli_real_escape_string($con,$_POST["cname"]);
  $rel=mysqli_real_escape_string($con,$_POST["rel"]);
  $phno=mysqli_real_escape_string($con,$_POST["phno"]);
  $mail=mysqli_real_escape_string($con,$_POST["mail"]);
  $wno=mysqli_real_escape_string($con,$_POST["wno"]);
  $bno=mysqli_real_escape_string($con,$_POST["bno"]);
  $r=mysqli_query($con,"insert into admit (patid,pname,age,gender,Ad_Date,Ad_Time,department,doc_name,cname,rel,PhNo,mail,ward,bno,isadmit) values('$patid','$pname','$age','$gender','$ad_date','$ad_time','$dept','$doc','$cname','$rel','$phno','$mail','$wno','$bno',1)");

  if($r)
		header("location:admission_slip.php?a=$pname&b=$ad_date&c=$ad_time&d=$wno&e=$bno");
	else
		echo mysqli_error($con);
?>
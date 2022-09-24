<?php

include("../database_connect.php");
//Personal details

$id=$_REQUEST['a'];
$nm=mysqli_real_escape_string($con,$_POST["nm"]);
$fnm=mysqli_real_escape_string($con,$_POST["fnm"]);
$mnm=mysqli_real_escape_string($con,$_POST["mnm"]);
$gen=mysqli_real_escape_string($con,$_POST["r1"]);
$dob=mysqli_real_escape_string($con,$_POST["dob"]);
$no=mysqli_real_escape_string($con,$_POST["no"]);
$no1=mysqli_real_escape_string($con,$_POST["no1"]);
$enm=mysqli_real_escape_string($con,$_POST["enm"]);
$r_add=mysqli_real_escape_string($con,$_POST["r_add"]);
$p_add=mysqli_real_escape_string($con,$_POST["p_add"]);
$aad=mysqli_real_escape_string($con,$_POST["aad"]);

$pan=mysqli_real_escape_string($con,$_POST["pan"]);
$bname=mysqli_real_escape_string($con,$_POST["bname"]);
$acno=mysqli_real_escape_string($con,$_POST["acno"]);
$ifsc=mysqli_real_escape_string($con,$_POST["ifsc"]);

$board=mysqli_real_escape_string($con,$_POST["board"]);
$sname=mysqli_real_escape_string($con,$_POST["sname"]);
$percent=mysqli_real_escape_string($con,$_POST["percent"]);

if(is_uploaded_file($_FILES['photo']['tmp_name']))
{
	$photo=move_uploaded_file($_FILES['photo']['tmp_name'],"../upload/".time().$_FILES['photo']['name']);
	$photo=mysqli_real_escape_string($con,time().$_FILES['photo']['name']);
	$q1=mysqli_query($con,"update employee set photo='$photo' where ID='$id'");
}

if(is_uploaded_file($_FILES['marks']['tmp_name']))
{
	$marksheet=move_uploaded_file($_FILES['marks']['tmp_name'],"../upload/".time().$_FILES['marks']['name']);
	$marks=mysqli_real_escape_string($con,time().$_FILES['marks']['name']);
	$q1=mysqli_query($con,"update employee set marksheet='$marks' where ID='$id'");
}

$diploma=mysqli_real_escape_string($con,$_POST["diploma"]);
if(is_uploaded_file($_FILES['dip']['tmp_name']))
{
	$dp=move_uploaded_file($_FILES['dip']['tmp_name'],"../upload/".time().$_FILES['dip']['name']);
	$dip=mysqli_real_escape_string($con,time().$_FILES['dip']['name']);
	$q1=mysqli_query($con,"update employee set dip_file='$dip' where ID='$id'");
}

if(is_uploaded_file($_FILES['bac_deg']['tmp_name']))
{
	$g=move_uploaded_file($_FILES['bac_deg']['tmp_name'],"../upload/".time().$_FILES['bac_deg']['name']);
	$bac_deg=mysqli_real_escape_string($con,time().$_FILES['bac_deg']['name']);
	$q1=mysqli_query($con,"update employee set bac_deg_file='$bac_deg' where ID='$id'");
}
$bac_clg=mysqli_real_escape_string($con,$_POST["bac_clg"]);
$bac_deg_name=mysqli_real_escape_string($con,$_POST["bac_deg_name"]);

if(is_uploaded_file($_FILES['mas_deg']['tmp_name']))
{
	$p=move_uploaded_file($_FILES['mas_deg']['tmp_name'],"../upload/".time().$_FILES['mas_deg']['name']);
	$mas_deg=mysqli_real_escape_string($con,time().$_FILES['mas_deg']['name']);
	$q1=mysqli_query($con,"update employee set mas_deg_file='$mas_deg' where ID='$id'");
}
$mas_clg=mysqli_real_escape_string($con,$_POST["mas_clg"]);
$mas_deg_name=mysqli_real_escape_string($con,$_POST["mas_deg_name"]);

if(is_uploaded_file($_FILES['doc']['tmp_name']))
{
	$q=move_uploaded_file($_FILES['doc']['tmp_name'],"../upload/".time().$_FILES['doc']['name']);
	$doc=mysqli_real_escape_string($con,time().$_FILES['doc']['name']);
	$q1=mysqli_query($con,"update employee set doc_file='$doc' where ID='$id'");
}
$doc_clg=mysqli_real_escape_string($con,$_POST["doc_clg"]);
$spl=mysqli_real_escape_string($con,$_POST["spl"]);

$dept=mysqli_real_escape_string($con,$_POST["dept"]);
$pos=mysqli_real_escape_string($con,$_POST["pos"]);
$jd=mysqli_real_escape_string($con,$_POST["jd"]);
$salary=mysqli_real_escape_string($con,$_POST["salary"]);

$exp=mysqli_real_escape_string($con,$_POST["exp"]);
$lj_pos=mysqli_real_escape_string($con,$_POST["lj_pos"]);
$hname=mysqli_real_escape_string($con,$_POST["hname"]);

$r=mysqli_query($con,"update employee set 
	name='$nm',
	fname='$fnm',
	mname='$mnm',
	gender='$gen',
	dob='$dob',
	mob='$no',
	mobb='$no1',
	email='$enm',
	r_address='$r_add',
	p_address='$p_add',
	board='$board',
	school='$sname',
	xiipercent='$percent',
	diploma='$diploma',
	bac_clg='$bac_clg',
	bac_deg_name='$bac_deg_name',
	mas_clg='$mas_clg',
	mas_deg_name='$mas_deg_name',
	doc_clg='$doc_clg',
	spl='$spl',
	dept_id='$dept',
	position='$pos',
	j_date='$jd',
	salary='$salary',
	exp='$exp',
	aadhar='$aad',
	pan='$pan',
	bname='$bname',
	acno='$acno',
	ifsc='$ifsc',
	lastjob='$lj_pos',
	oname='$hname'
	 where ID='$id'");

if($r)
	header("location:employee_details.php");
else 
 echo mysqli_error($con);
?>
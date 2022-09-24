<?php

include("../database_connect.php");
//Personal details


$nm=mysqli_real_escape_string($con,$_POST["nm"]);
$fnm=mysqli_real_escape_string($con,$_POST["fnm"]);
$mnm=mysqli_real_escape_string($con,$_POST["mnm"]);
$gen=mysqli_real_escape_string($con,$_POST["r1"]);
$dob=mysqli_real_escape_string($con,$_POST["dob"]);
$aad=mysqli_real_escape_string($con,$_POST["aad"]);

$ph=move_uploaded_file($_FILES['photo']['tmp_name'],"../upload/".time().$_FILES['photo']['name']);
$pname=mysqli_real_escape_string($con,time().$_FILES['photo']['name']);
$no=mysqli_real_escape_string($con,$_POST["no"]);
$no1=mysqli_real_escape_string($con,$_POST["no1"]);
$enm=mysqli_real_escape_string($con,$_POST["enm"]);
$r_add=mysqli_real_escape_string($con,$_POST["r_add"]);
$p_add=mysqli_real_escape_string($con,$_POST["p_add"]);


$board=mysqli_real_escape_string($con,$_POST["board"]);
$sname=mysqli_real_escape_string($con,$_POST["sname"]);
$percent=mysqli_real_escape_string($con,$_POST["percent"]);
if(is_uploaded_file($_FILES['marks']['tmp_name']))
{
	$marksheet=move_uploaded_file($_FILES['marks']['tmp_name'],"../upload/".time().$_FILES['marks']['name']);
	$marks=mysqli_real_escape_string($con,time().$_FILES['marks']['name']);
}
	
$diploma=mysqli_real_escape_string($con,$_POST["diploma"]);
if(is_uploaded_file($_FILES['dip']['tmp_name']))
{
	$dp=move_uploaded_file($_FILES['dip']['tmp_name'],"../upload/".time().$_FILES['dip']['name']);
	$dip=mysqli_real_escape_string($con,time().$_FILES['dip']['name']);
}

if(is_uploaded_file($_FILES['bac_deg']['tmp_name']))
{
	$g=move_uploaded_file($_FILES['bac_deg']['tmp_name'],"../upload/".time().$_FILES['bac_deg']['name']);
	$bac_deg=mysqli_real_escape_string($con,time().$_FILES['bac_deg']['name']);
}
$bac_clg=mysqli_real_escape_string($con,$_POST["bac_clg"]);
$bac_deg_name=mysqli_real_escape_string($con,$_POST["bac_deg_name"]);

if(is_uploaded_file($_FILES['mas_deg']['tmp_name']))
{
	$p=move_uploaded_file($_FILES['mas_deg']['tmp_name'],"../upload/".time().$_FILES['mas_deg']['name']);
	$mas_deg=mysqli_real_escape_string($con,time().$_FILES['mas_deg']['name']);	
}
$mas_clg=mysqli_real_escape_string($con,$_POST["mas_clg"]);
$mas_deg_name=mysqli_real_escape_string($con,$_POST["mas_deg_name"]);

if(is_uploaded_file($_FILES['doc']['tmp_name']))
{
	$q=move_uploaded_file($_FILES['doc']['tmp_name'],"../upload/".time().$_FILES['doc']['name']);
	$doc=mysqli_real_escape_string($con,time().$_FILES['doc']['name']);
}
$doc_clg=mysqli_real_escape_string($con,$_POST["doc_clg"]);
$spl=mysqli_real_escape_string($con,$_POST["spl"]);

$dept=mysqli_real_escape_string($con,$_POST["dept"]);
$pos=mysqli_real_escape_string($con,$_POST["pos"]);
$jd=mysqli_real_escape_string($con,$_POST["jd"]);
$salary=mysqli_real_escape_string($con,$_POST["salary"]);

$pan=mysqli_real_escape_string($con,$_POST["pan"]);
$bname=mysqli_real_escape_string($con,$_POST["bname"]);
$acno=mysqli_real_escape_string($con,$_POST["acno"]);
$ifsc=mysqli_real_escape_string($con,$_POST["ifsc"]);

$exp=mysqli_real_escape_string($con,$_POST["exp"]);
$lj_pos=mysqli_real_escape_string($con,$_POST["lj_pos"]);
$hname=mysqli_real_escape_string($con,$_POST["hname"]);

$r=mysqli_query($con,"insert into employee(name,fname,mname,gender,dob,aadhar,photo,mob,mobb,email,r_address,p_address,
board,school,xiipercent,marksheet,diploma,dip_file,bac_deg_file,bac_clg,bac_deg_name,mas_deg_file,mas_clg,mas_deg_name,doc_file,doc_clg,spl,dept_id,position,j_date,salary,pan,bname,acno,ifsc,exp,lastjob,oname)
values('$nm','$fnm','$mnm','$gen','$dob','$aad','$pname','$no','$no1','$enm','$r_add','$p_add','$board','$sname',
'$percent','$marks','$diploma','$dip','$bac_deg','$bac_clg','$bac_deg_name','$mas_deg','$mas_clg','$mas_deg_name','$doc','$doc_clg','$spl','$dept','$pos','$jd','$salary','$pan','$bname','$acno','$ifsc','$exp','$lj_pos','$hname')");

$r1=mysqli_query($con,"select ID from employee where name='$nm'");
if($row=mysqli_fetch_array($r1))
{
	$eid=$row[0];
}
echo $eid;

$q1=mysqli_query($con,"select * from departments where dept_id='$dept' and isDoctor='1'");
if($row=mysqli_fetch_array($q1))
	$q2=mysqli_query($con,"insert into duties(eid,Mon,Tues,Wed,Thurs,Fri,Sat,Sun) values('$eid','Day Off','Day Off','Day Off','Day Off','Day Off','Day Off','Day Off')");
header("location:employee_details.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Employee Registration</title>
  <link rel="shortcut icon" href="../images/fav2.png">
  <?php
    include ('../head.php');
    include ('../bootstrap.php');
    include ('../database_connect.php');

  ?>
  <link rel="stylesheet" type="text/css" href="../styles/employee_form.css">
  <script src="../js/Validation.js"></script>

  <script>
    function myfunction()
    {
      var checkbox=document.getElementById("same");
      if(checkbox.checked==true) 
      {
        document.getElementById("pa").readOnly=true;
        document.getElementById("pa").value=document.getElementById("ra").value;
      }
      else 
        document.getElementById("pa").readOnly=false;
    } 
  </script>

</head>



<body>
	<header>
		<?php include 'header.php';?>
	</header>
	<style type="text/css">
  .heading
    {
      border-top-right-radius: 00px;
      border-top-left-radius: 0px;
    }
</style>
<main>
		<div class="container">
			<div class="row">
				<div class="col-11 col-sm-12 col-md-12 col-lg-9 col-xl-9 box-body">
					<form action="employee_form_db.php" method="post" enctype='multipart/form-data'>

						<div class="row">
            	<div class="main-heading col-sm-12">
              	<h1 style="font-size: 55px;font-family: for_heading;"><img src="../images/job1.jpg" style="width: 100px;height: 100px;"> Employee Registration</h1>
            	</div>
          	</div>
          	<div id="per">
              <div class="row">
            <div class="heading col-sm-12">
              <h1>&nbsp;Personal Details</h1>
            </div>
          </div>
          	<div class="row">
            	<div class="col-5 col-sm-4 col-md-3 col-lg-3 form-group">
            		<label class="control-label label1" for="nm">Name :</label>
            	</div>
            	<div class="col-7 col-sm-6 col-md-5 col-lg-5 col-xl-4 form-group">
            		<input type="text" name="nm" class="form-control w3-input w3-hover-light-gray w3-animate-input" style="width:97%"required placeholder="Enter name here">
            	</div>
            </div>

          <div class="row">
          	<div class="col-5 col-sm-4 col-md-3 col-lg-3 form-group">
          		<label class="control-label label1" for="fnm">Father's Name :</label>
          	</div>
          	<div class="col-7 col-sm-6 col-md-5 col-lg-5 col-xl-4 form-group">
          		<input type="text" name="fnm" class="form-control w3-input w3-hover-light-gray  w3-animate-input" style="width:97%" required placeholder="Enter name here">
          	</div>
          </div>

          <div class="row">
            <div class="col-5 col-sm-4 col-md-3 col-lg-3 form-group" >
              <label class="control-label label1" for="mnm">Mother's Name: </label>
            </div>
            <div class="col-7 col-sm-6 col-md-5  col-lg-5 col-xl-4 form-group">
              <input type="text" name="mnm" class="form-control w3-input w3-hover-light-gray  w3-animate-input"   style="width:97%" required placeholder="Enter name here">
            </div>
          </div>

          <div class="row">
          	<div class="col-5 col-sm-4 col-md-3 col-lg-3 form-group">
          		<label class="control-label label1" for="r1">Gender :</label>
          	</div>
          	<div class="col-7 col-sm-8">
          		<input type="radio" class="w3-radio w3-hover-light-gray" value="Male" name="r1" checked required>
          		<label class="control-label" for="r1">Male</label>
              <input type="radio" class="w3-radio"value="Female" name="r1">
              <label class="control-label" for="r1">Female</label>
              <input type="radio" class="w3-radio" value="Other" name="r1">
              <label class="control-label" for="r1">Others</label>
          	</div>
          </div>

          <div class="row">
          	<div class="col-5 col-sm-4 col-md-3 col-lg-3 form-group">
          		<label class="control-label label1" for="dob">Date of Birth :</label>
          	</div>
          	<div class="col-6 col-sm-5 col-md-4 col-lg-4 col-xl-3">
          		<input type="date" name="dob" id="dob" class="form-control  w3-hover-light-gray" required>
          	</div>
          </div>

          <div class="row">
          	<div class="col-5 col-sm-4 col-md-3 col-lg-3 form-group">
          		<label class="control-label label1" for="photo">Photo :</label>
          	</div>
          	<div class="col-7 col-sm-8 col-md-8 col-lg-5 col-xl-4">
          		<input type="file" class="form-control-file" name="photo" id="photo" accept="image/*" onchange="return picValidation(this,'IP')" required style="border:none;">
          	</div>
          	<div class="col-sm-8 col-md-8 col-lg-3">
          		<span style="margin-left: 0px;" id="IP"></span>
          	</div>
          </div>
          
          <div class="row">
            <div class="col-5 col-sm-4 col-md-3 col-lg-3 form-group" >
              <label class="control-label label1" for="aad">Aadhar Card No: </label>
            </div>
            <div class="col-7 col-sm-6 col-md-5  col-lg-4 col-xl-4 form-group">
              <input type="text" name="aad" class="form-control w3-input w3-hover-light-gray  w3-animate-input"   style="width:97%" required placeholder="Enter Aadhar No" minlength=12 maxlength=12>
            </div>
          </div>

          <div class="row">
          	<div class="next-back col-12 col-sm-12 col-md-12 col-lg-12" style="text-align:right;">
          		<button type="button" class="btn btn-primary" onclick="gotocon();">Save and Next <i class="fas fa-arrow-circle-right"></i></button>
          	</div>
          </div>

        </div>

        <div id="con">
        <div class="row">
            <div class="heading col-sm-12">
              <h1>&nbsp;Contact Details</h1>
            </div>
          </div>
          
          <div class="row">
            <div class="col-4 col-sm-4 col-md-4 col-lg-3 form-group">
              <label class="control-label label1" for="no">Mobile No :</label>
            </div>
            <div class="col-7 col-sm-6 col-md-4 col-lg-4 form-group">
              <input type="number" name="no" class="form-control w3-input w3-hover-light-gray  w3-animate-input" placeholder="0123-456-789" required>
            </div>
          </div>

          <div class="row">
            <div class="col-4 col-sm-4 col-md-4 col-lg-3 form-group">
              <label class="control-label label1" for="no1">Alternate No :</label>
            </div>
            <div class="col-7 col-sm-6 col-md-4 col-lg-4 form-group">
              <input type="number" name="no1" class="form-control w3-input w3-hover-light-gray  w3-animate-input" placeholder="0123-456-789">
            </div>
          </div>
          
          <div class="row">
            <div class="col-4 col-sm-4 col-md-4 col-lg-3 form-group" >
              <label class="control-label label1" for="enm">Email ID :</label>
            </div>
            <div class="col-7 col-sm-6 col-md-4 col-lg-4 form-group">
              <input type="email" name="enm" class="form-control w3-input w3-hover-light-gray  w3-animate-input" placeholder="abc@gmail.com">
            </div>
          </div>

          <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-4 form-group">
              <label class="control-label label1" for="ra">Residential Address :</label>
            </div>
            <div class="col-sm-7 col-md-8 col-lg-4 form-group">
              <textarea name="r_add" id="ra" class="form-control w3-hover-light-gray" required></textarea>
            </div>
          </div>

          <div class="row"> 
            <div class="col-sm-4 col-md-4 col-lg-4 form-group">
              <label class="control-label label1" for="pa">Permanent Address :</label>
            </div>
            <div class="col-sm-7 col-md-8 col-lg-4 form-group">
              <textarea name="p_add" id="pa" class="form-control w3-hover-light-gray" required></textarea>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 form-group" >
              <input type="checkbox" name="same" id="same"  onclick="myfunction()" >
              <label for="same" class="form-check-label"><i style="color:indigo;">Permanent Address same as the residential address</i></label>
            </div>
          </div>  
            <div class="row">
              <div class="next-back col-4 col-sm-4 col-md-3 col-lg-3 col-xl-2" >
                <button type="button" class="btn btn-secondary" onclick="gotoper();"><i class="fas fa-arrow-circle-left"></i> Go back</button>
              </div>
              <div class="next-back col-3 col-sm-3 col-md-4 col-lg-5 col-xl-6" style="text-align:right"></div>    
              <div class="next-back col-5 col-sm-5 col-md-5 col-lg-4" style="text-align:right;">
                <button type="button" class="btn btn-primary" onclick="gotoqual();">Save and Next <i class="fas fa-arrow-circle-right"></i></button>
              </div>
            </div>
        </div>

        <div id="qual">
          <div class="row">
            <div class="heading col-sm-12">
              <h1>Education Details</h1>
            </div>
          </div>
          
          <div class="row">
            <div class="heading1 col-sm-12">
              <h3 class="">High School Education (12<sup>th</sup> Standard)</h3>
            </div>
          </div>
          
          <div class="row">
            <div class="col-4 col-sm-4 col-md-3 col-lg-3 form-group" >
              <label class="control-label label1" for="board">Board :</label>
            </div>
            <div class="form-group col-7 col-sm-6 col-md-5  col-lg-4">
              <input type="text" name="board" class="form-control w3-input w3-hover-light-gray  w3-animate-input" style="width:97%" placeholder="Board Name">
            </div>
          </div>

          <div class="row">
            <div class="col-4 col-sm-4 col-md-3 col-lg-3 form-group" >
              <label class="control-label label1" for="sname">School Name :</label>
            </div>
            <div class="col-7 col-sm-6 col-md-5 col-lg-4 form-group">
              <input type="text" name="sname" class="form-control w3-input w3-hover-light-gray  w3-animate-input" style="width:97%" placeholder="St. John's School">
            </div>
          </div>

          <div class="row">
            <div class="col-4 col-sm-4 col-md-3 col-lg-3 form-group" >
              <label class="control-label label1" for="percent">Percentage :</label>
            </div>
            <div class="col-7 col-sm-4 form-group">
              <input type="number" max="100" min="0" name="percent" step="any" class="form-control w3-input w3-hover-light-gray  w3-animate-input" style="width:97%" placeholder="99.9%">
            </div>
          </div>

          <div class="row">
            <div class="col-4 col-sm-4 col-md-3 col-lg-3 form-group" >
              <label class="control-label label1" for="marks">Marksheet :</label>
            </div>
            <div class="col-7 col-sm-6 col-md-5 col-lg-5 form-group">
              <input type="file" name="marks" class="form-control-file" onchange="return fileValidation(this)"style="border:none;">
            </div>
          </div>
          
          <div class="row">
            <div class="heading1 col-sm-12">
              <h3 class="col-sm-12">Diploma</h3>
            </div>
          </div>
          
          <div class="row">
            <div class="col-5 col-sm-5 col-md-3 col-lg-3 form-group" >
              <label class="control-label label1" for="diploma">Diploma(If Any) :</label>
            </div>
            <div class="col-7 col-sm-7 col-md-5 col-lg-5 form-group">
             <input type="text" name="diploma" id="diploma" class="form-control w3-input w3-hover-light-gray  w3-animate-input" placeholder="Diploma Name" style="width: 97%"> 
            </div>
          </div>
          
          <div class="row">
            <div class="col-5 col-sm-5 col-md-3 col-lg-3 form-group" >
              <label class="control-label label1" for="Upload Diploma">Upload Diploma :</label>
            </div>
            <div class="col-7 col-sm-6 col-md-5 col-lg-4 form-group">
              <input type="file" name="dip" onchange="return fileValidation(this)"style="border:none;">
            </div>
          </div>
          
          <div class="row">
            <div class="heading1 col-sm-12">
              <h3 class=" col-sm-12">Bachelors</h3>
            </div>
          </div>
          
          
          <div class="row">
            <div class="col-5 col-sm-5 col-md-3 col-lg-3 form-group" >
              <label class="control-label label1" for="bac_clg">University Name: </label>
            </div>
            <div class="col-7 col-sm-7 col-md-5 col-lg-5 form-group">
             <input type="text" name="bac_clg" class="form-control w3-input w3-hover-light-gray  w3-animate-input" style="width:97%" placeholder="University Name">
            </div>
          </div>
          <div class="row">
            <div class="col-5 col-sm-5 col-md-3 col-lg-3 form-group" >
              <label class="control-label label1" for="bac_deg_name">Degree Name:</label>
            </div>
            <div class="col-7 col-sm-7 col-md-5 col-lg-5 form-group">
               <input type="text" name="bac_deg_name" class="form-control w3-input w3-hover-light-gray  w3-animate-input"style="width:97%"placeholder="Degree Name">
            </div>
          </div>
          
          <div class="row">
            <div class="col-5 col-sm-5 col-md-3 col-lg-3  form-group" >
              <label class="control-label label1" for="Upload Degree:">Upload Degree:</label>
            </div>
            <div class="col-7 col-sm-6 col-md-5 col-lg-5 form-group">
             <input type="file" name="bac_deg" class="form-control-file" onchange="return fileValidation(this)"style="border:none;">
            </div>
          </div>

          <div class="row">
            <div class="heading1 col-sm-12">
              <h3 class=" col-sm-12">Masters</h3>
            </div>
          </div>
          
          <div class="row">
            <div class="col-5 col-sm-5 col-md-3 col-lg-3 form-group" >
              <label class="control-label label1" for="mas_clg">University Name:</label>
            </div>
            <div class="col-7 col-sm-7 col-md-5 col-lg-5 form-group">
             <input type="text" name="mas_clg" class="form-control w3-input w3-hover-light-gray  w3-animate-input" style="width:97%" placeholder="University Name">
            </div>
          </div>
          <div class="row">
            <div class="col-5 col-sm-5 col-md-3 col-lg-3 form-group" >
              <label class="control-label label1" for="mas_deg_name">Degree Name:</label>
            </div>
            <div class="col-7 col-sm-7 col-md-5 col-lg-5 form-group">
               <input type="text" name="mas_deg_name" placeholder="Degree Name"class="form-control w3-input w3-hover-light-gray  w3-animate-input"style="width:97%">
            </div>
          </div>
          
          <div class="row">
            <div class="col-5 col-sm-5 col-md-3 col-lg-3 form-group" >
              <label class="control-label label1" for="Upload Degree:">Upload Degree:</label>
            </div>
            <div class="col-7 col-sm-7 col-md-5 col-lg-5 form-group">
             <input type="file" name="mas_deg" class="form-control-file" onchange="return fileValidation(this)"style="border:none;">
            </div>
          </div>

          <div class="row">
            <div class="heading1 col-sm-12">
              <h3 class=" col-sm-12">Doctrate</h3>
            </div>
          </div>
          
          <div class="row">
            <div class="col-5 col-sm-5 col-md-3 col-lg-3 form-group" >
              <label class="control-label label1" for="doc_clg">University Name: </label>
            </div>
            <div class="col-7 col-sm-7 col-md-5 col-lg-5 form-group">
             <input type="text" name="doc_clg" placeholder="University Name" class="w3-animate-input w3-input w3-hover-light-gray form-control"   style="width:97%">
            </div>
          </div>
          
          <div class="row">
            <div class="col-5 col-sm-5 col-md-3 col-lg-3 form-group" >
              <label class="control-label label1" for="spl">Specialization:</label>
            </div>
            <div class="col-7 col-sm-7 col-md-5 col-lg-5 form-group">
               <input type="text" name="spl" placeholder="Specialization Topic" class="form-control w3-input w3-hover-light-gray  w3-animate-input"style="width:97%">
            </div>
          </div>
          
          <div class="row">
            <div class="col-5 col-sm-5 col-md-3 col-lg-3 form-group" >
              <label class="control-label label1" for="doc">Upload Degree:</label>
            </div>
            <div class="col-7 col-sm-7 form-group">
             <input type="file" name="doc" class="form-control-file" onchange="return fileValidation(this)"style="border:none;">
            </div>
          </div>
          <div class="row">
              <div class="next-back col-4 col-sm-4 col-md-3 col-lg-3 col-xl-2" >
                <button type="button" class="btn btn-secondary" onclick="gotocon();"><i class="fas fa-arrow-circle-left"></i> Go back</button>
              </div>
              <div class="next-back col-3 col-sm-3 col-md-4 col-lg-5 col-xl-6" style="text-align:right"></div>    
              <div class="next-back col-5 col-sm-5 col-md-5 col-lg-4" style="text-align:right;">
                <button type="button" class="btn btn-primary" onclick="gotoexper();">Save and Next <i class="fas fa-arrow-circle-right"></i></button>
              </div>
            </div>
        </div>

        <div id="exper">
          <div class="row">
            <div class="heading col-sm-12">
              <h1>Experience Details</h1>
            </div>
          </div>
          
          <div class="row">
            <div class="col-6 col-sm-5 col-md-4 col-lg-4 form-group">
              <label class="control-label label1" for="Experience:">Experience:</label>
            </div>
            <div class="col-6 col-sm-6 col-md-5 col-lg-4 col-xl-4 form-group">
              <select name="exp" id="exp" class="form-control" required >
                <option value="">Select Experience</option>
                <option value="0-5">0-5 years</option>
                <option value="5-10">5-10 years</option>
                <option value="10-20">10-20 years</option>
                <option value="20-30">20-30 years</option>
                <option value="More than 30 years">30 years or more</option>
              </select>
            </div>
          </div>
         
          <div class="row">
            <div class="col-6 col-sm-5 col-md-4 col-lg-4 form-group">
              <label class="control-label label1" for="lj_pos">Last Job's Position:</label>
            </div>
            <div class="col-6 col-sm-6 col-md-5 col-lg-4 form-group">
              <input type="text" name="lj_pos" class="form-control w3-input w3-hover-light-gray  w3-animate-input" style="width:97%" required placeholder="Surgeon">
            </div>
          </div>

          <div class="row">
            <div class="col-6 col-sm-5 col-md-4 col-lg-4 form-group">
              <label class="control-label label1" for="hname">Organization Name:</label>
            </div>
            <div class="col-6 col-sm-6 col-md-5 col-lg-4 form-group">
             <input type="text" name="hname" id="hname" class="form-control w3-input w3-hover-light-gray  w3-animate-input" style="width:97%" required placeholder="Organization Name">
            </div>
          </div>
          <div class="row">
              <div class="next-back col-4 col-sm-4 col-md-3 col-lg-3 col-xl-2" >
                <button type="button" class="btn btn-secondary" onclick="gotoqual();"><i class="fas fa-arrow-circle-left"></i> Go back</button>
              </div>
              <div class="next-back col-3 col-sm-3 col-md-4 col-lg-5 col-xl-6" style="text-align:right"></div>    
              <div class="next-back col-5 col-sm-5 col-md-5 col-lg-4" style="text-align:right;">
                <button type="button" class="btn btn-primary" onclick="gotobank();">Save and Next <i class="fas fa-arrow-circle-right"></i></button>
              </div>
            </div>
        </div>
        
        <div id="banking">
          
          <div class="row">
            <div class="heading col-sm-12">
              <h1>Bank Account Details</h1>
            </div>
          </div>
          
          <div class="row">
            <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 form-group" >
              <label class="control-label label1" for="aad">PAN Card Number: </label>
            </div>
            <div class="col-7 col-sm-6 col-md-5 col-lg-4 form-group">
              <input type="text" name="pan" class="form-control w3-input w3-hover-light-gray  w3-animate-input"   style="width:97%" required placeholder="Enter PAN" maxlength="10" minlength="10">
            </div>
          </div>

          <div class="row">
            <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 form-group">
              <label class="control-label label1" for="bname">Bank Name:</label>
            </div>
            <div class="col-7 col-sm-6 col-md-5 col-lg-4 form-group">
              <select name="bname" id="bname" class="form-control" required >
                <option value="">Select Bank Name</option>
                <option value="Bank of Baroda">Bank of Baroda</option>
                <option value="Canara Bank">Canara Bank</option>
                <option value="HDFC Bank">HDFC Bank</option>
                <option value="ICICI Bank">ICICI Bank</option>
                <option value="IDBI Bank">IDBI Bank</option>
                <option value="State Bank of India">State Bank of India</option>
                <option value="Punjab National Bank">Punjab National Bank</option>
                <option value="State Bank of India">State Bank of India</option>
                <option value="UCO Bank">UCO Bank</option>
                <option value="Union Bank of India">Union Bank of India</option>
              </select>
            </div>
          </div>
         
          <div class="row">
            <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 form-group">
              <label class="control-label label1" for="acno">Account Number:</label>
            </div>
            <div class="col-7 col-sm-6 col-md-5 col-lg-4 form-group">
              <input type="number" name="acno" class="form-control w3-input w3-hover-light-gray  w3-animate-input" style="width:98%" required placeholder="Enter Acc. Number">
            </div>
          </div>

          <div class="row">
            <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 form-group">
              <label class="control-label label1" for="IFSC code">IFSC Code:</label>
            </div>
            <div class="col-7 col-sm-6 col-md-5 col-lg-4 form-group">
             <input type="text" name="ifsc" id="ifsc" class="form-control w3-input w3-hover-light-gray  w3-animate-input" style="width:97%" required placeholder="Enter IFSC Code" maxlength="11" minlength="11">
            </div>
          </div>
          <div class="row">
              <div class="next-back col-4 col-sm-4 col-md-3 col-lg-3 col-xl-2" >
                <button type="button" class="btn btn-secondary" onclick="gotoexper();"><i class="fas fa-arrow-circle-left"></i> Go back</button>
              </div>
              <div class="next-back col-3 col-sm-3 col-md-4 col-lg-5 col-xl-6" style="text-align:right"></div>    
              <div class="next-back col-5 col-sm-5 col-md-5 col-lg-4" style="text-align:right;">
                <button type="button" class="btn btn-primary" onclick="gotoposi();">Save and Next <i class="fas fa-arrow-circle-right"></i></button>
              </div>
            </div>
        </div>

        <div id="posi">
          <div class="row">
            <div class="heading col-sm-12">
              <h1>Position Details</h1>
            </div>
          </div>

          <div class="row">
            <div class="col-5 col-sm-5 col-md-4 col-lg-4 form-group">
              <label class="control-label label1" for="Department">Department Name:</label>
            </div>
            <div class="col-7 col-sm-6 col-md-4 col-lg-4 form-group">
                <select id='dept' name="dept" class="form-control" required>
                  <option value="">Select Department</option>
                  <?php
                  $r=mysqli_query($con,"select dept_id,Name from departments");
                  while($row=mysqli_fetch_array($r))
                  {
                    echo "<option value='$row[0]'>$row[1]</option>";
                  }
                  ?>
                </select> 
            </div>
          </div>

          <div class="row">
            <div class="col-5 col-sm-5 col-md-4 col-lg-4 form-group">
              <label class="control-label label1" for="Position">Position:</label>
            </div>
            <div class="col-7 col-sm-6 col-md-4 col-lg-4 form-group">
               <input type="text" name="pos" id="pos" class="form-control w3-input w3-hover-light-gray  w3-animate-input" style="width:97%" required placeholder="Position">
            </div>
          </div>

          <div class="row">
            <div class="col-5 col-sm-5 col-md-4 col-lg-4 form-group">
              <label class="control-label label1" for="Joining Date">Joining Date:</label>
            </div>
            <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-3 form-group">
              <input type="date" name="jd" class="form-control w3-input w3-hover-light-gray" required>
            </div>
          </div>

          <div class="row">
            <div class="col-5 col-sm-5 col-md-4 col-lg-4 form-group">
              <label class="control-label label1" for="Salary">Salary:</label>
            </div>
            <div class="col-7 col-sm-5 col-md-3  col-lg-4 col-xl-3 form-group">
               <input type="number" name="salary" id="salary" class="form-control w3-input w3-hover-light-gray   w3-animate-input" placeholder="0.0 Rs" style="width:97%" required>
            </div>
          </div>
          
            <div class="row">
              <div class="next-back col-4 col-sm-4 col-md-3 col-lg-3 col-xl-2" >
                <button type="button" class="btn btn-secondary" onclick="gotobank();"><i class="fas fa-arrow-circle-left"></i> Go back</button>
              </div>
              <div class="next-back col-1 col-sm-1 col-md-1 col-lg-2 col-xl-3" style="text-align:right"></div>    
              <div class="next-back col-5 col-sm-5 col-md-5 col-lg-3" style="text-align: center">
                &nbsp;&nbsp;<input type="Submit" id="bttn" value="Create Employee" name="submit-btn" id="submit-btn" class="btn btn-primary btn-lg">
              </div>
            </div>
          </div>
					</form>	
				</div>
			</div>
		</div>
	</main>
	

	<footer>
		Copyright &copy; <script type="text/javascript">document.write(new Date().getFullYear());</script>    <a> Sohn Mariens Hospital and Labs</a>
	</footer>
</body>
</html>
<?php include '../mydetails.php';?>

<script type="text/javascript">
	function gotoper()
  {
    document.getElementById("per").style.display="block";
    document.getElementById("con").style.display="none";
    document.getElementById("qual").style.display="none";
    document.getElementById("exper").style.display="none";
    document.getElementById("banking").style.display="none";
    document.getElementById("posi").style.display="none";
  }
  function gotocon()
  {
    document.getElementById("per").style.display="none";
    document.getElementById("con").style.display="block";
    document.getElementById("qual").style.display="none";
    document.getElementById("exper").style.display="none";
    document.getElementById("banking").style.display="none";
    document.getElementById("posi").style.display="none";
  }
  function gotoqual()
  {
    document.getElementById("per").style.display="none";
    document.getElementById("con").style.display="none";
    document.getElementById("qual").style.display="block";
    document.getElementById("exper").style.display="none";
    document.getElementById("banking").style.display="none";
    document.getElementById("posi").style.display="none";
  }
  function gotoexper()
  {
    document.getElementById("per").style.display="none";
    document.getElementById("con").style.display="none";
    document.getElementById("qual").style.display="none";
    document.getElementById("exper").style.display="block";
    document.getElementById("banking").style.display="none";
    document.getElementById("posi").style.display="none";
  }
  function gotobank()
  {
    document.getElementById("per").style.display="none";
    document.getElementById("con").style.display="none";
    document.getElementById("qual").style.display="none";
    document.getElementById("exper").style.display="none";
    document.getElementById("banking").style.display="block";
    document.getElementById("posi").style.display="none";
  }
  
  function gotoposi()
  {
    document.getElementById("per").style.display="none";
    document.getElementById("con").style.display="none";
    document.getElementById("qual").style.display="none";
    document.getElementById("exper").style.display="none";
    document.getElementById("banking").style.display="none";
    document.getElementById("posi").style.display="block";
  }
</script>
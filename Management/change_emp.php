<!DOCTYPE html>
<html>
<head>
	  <title>Employee Details Update</title>
	  <link rel="shortcut icon" href="../images/fav2.png">
  <?php
    $x=$_REQUEST["a"];
    include ('../head.php');
    include ('../bootstrap.php');
    include ('../database_connect.php');
    $r=mysqli_query($con,"select * from employee where ID='$x'");
    if($row12=mysqli_fetch_array($r))
    {
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
  <style type="text/css">
  #back
  {
    padding-top: 10px;
    padding-left: 10px;
    font-family: for_body;
  }

</style>
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
		<div id="back">
      <a href="employee_details.php" class='btn btn-secondary'><i class="fas fa-arrow-circle-left"></i> Return to Employee Database</a>
      </div>
  	
  	<div class="container">
			<div class="row">
				<div class="col-11 col-sm-12 col-md-12 col-lg-9 box-body">
					<?php echo "<form action='change_emp_db.php?a=$row12[0]' method=post enctype='multipart/form-data'>"?>
						<div class="row">
            	<div class="main-heading col-sm-12">
              	<h1 style="font-size: 55px;font-family: for_heading;"><img src="../images/job1.jpg" style="width: 100px;height: 100px;"> Change Details</h1>
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
          		<label class="control-label label1" for="nm">Employee ID:</label>
          	</div>
          	<div class="col-7 col-sm-7 col-md-5 col-lg-5 form-group">
          		<?php echo "<span style='font-size:20px;'>$row12[0]</span>"; ?>
          	</div>
          </div>

          	<div class="row">
            	<div class="col-5 col-sm-4 col-md-3 col-lg-3 form-group">
            		<label class="control-label label1" for="nm">Name :</label>
            	</div>
            	<div class="col-7 col-sm-6 col-md-5 col-lg-5 col-xl-4 form-group">
            		<?php echo "<input type='text' name='nm' value='$row12[1]'";?> class="form-control w3-input w3-hover-light-gray w3-animate-input" style="width:98%"required placeholder="Enter name here">
            	</div>
            </div>

          <div class="row">
            <div class="col-5 col-sm-4 col-md-3 col-lg-3 form-group" >
              <label class="control-label label1" for="aad">Aadhar Card No: </label>
            </div>
            <div class="col-7 col-sm-6 col-md-5  col-lg-5 col-xl-4 form-group">
              <input type="text" name="aad" <?php echo "value='$row12[6]'";?> class="form-control w3-input w3-hover-light-gray  w3-animate-input"   style="width:98%" required placeholder="Enter Aadhar No" minlength=12 maxlength=12>
            </div>
          </div>

          <div class="row">
          	<div class="col-5 col-sm-4 col-md-3 col-lg-3 form-group">
          		<label class="control-label label1" for="fnm">Father's Name :</label>
          	</div>
          	<div class="col-7 col-sm-6 col-md-5 col-lg-5 col-xl-4 form-group">
          		<input type="text" name="fnm" <?php echo "value='$row12[2]'";?> class="form-control w3-input w3-hover-light-gray  w3-animate-input" style="width:98%" required placeholder="Enter name here">
          	</div>
          </div>

          <div class="row">
            <div class="col-5 col-sm-4 col-md-3 col-lg-3 form-group" >
              <label class="control-label label1" for="mnm">Mother's Name: </label>
            </div>
            <div class="col-7 col-sm-6 col-md-5  col-lg-5 col-xl-4  form-group">
              <input type="text" name="mnm" <?php echo "value='$row12[3]'";?> class="form-control w3-input w3-hover-light-gray  w3-animate-input"   style="width:98%" required placeholder="Enter name here">
            </div>
          </div>

          <div class="row">
          	<div class="col-5 col-sm-4 col-md-3 col-lg-3 form-group">
          		<label class="control-label label1" for="r1">Gender :</label>
          	</div>
          	<div class="col-7 col-sm-8">
          		<input type="radio" <?php if($row12[4]=="Male") echo "checked";?> class="w3-radio w3-hover-light-gray" value="Male" name="r1" required>
          		<label class="control-label" for="r1">Male</label>
              <input type="radio"  <?php if($row12[4]=="Female") echo "checked";?> class="w3-radio"value="Female" name="r1">
              <label class="control-label" for="r1">Female</label>
              <input type="radio" <?php if($row12[4]=="Other") echo "checked";?> class="w3-radio" value="Other" name="r1">
              <label class="control-label" for="r1">Others</label>
          	</div>
          </div>

          <div class="row">
          	<div class="col-5 col-sm-4 col-md-3 col-lg-3 form-group">
          		<label class="control-label label1" for="dob">Date of Birth :</label>
          	</div>
          	<div class="col-6 col-sm-5 col-md-4 col-lg-4 col-xl-3">
          		<input type="date" <?php echo "value='$row12[5]'";?> name="dob" id="dob" class="form-control  w3-hover-light-gray" required>
          	</div>
          </div>

          
          

          <div class="row">
          	<div class="col-5 col-sm-4 col-md-3 col-lg-3 form-group">
          		<label class="control-label label1" for="nm">Photo:</label>
          	</div>
          	<div class="col-7 col-sm-7 col-md-5 col-lg-5 col-xl-4 form-group">
          		<div id="IP" style="margin-bottom:5px;"><?php echo "<img src='../upload/$row12[7]' style='width:120px;border:2px solid black;'>"; ?></div>
          	<input type="file" class="form-control-file" name="photo" id="photo" accept="image/*" onchange="return picValidation(this,'IP')" style="border:none;">
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
            <div class="col-7 col-sm-6 col-md-4 col-lg-4 col-sm-3 form-group">
          		<input type="number" <?php echo "value='$row12[8]'";?> name="no" class="form-control w3-input w3-hover-light-gray  w3-animate-input" placeholder="0123-456-789" required>
          	</div>
          </div>

          <div class="row">
            <div class="col-4 col-sm-4 col-md-4 col-lg-3 form-group">
              <label class="control-label label1" for="no1">Alternate No :</label>
            </div>
            <div class="col-7 col-sm-6 col-md-4 col-lg-4 form-group">
              <input type="number" <?php echo "value='$row12[9]'";?> name="no1" class="form-control w3-input w3-hover-light-gray  w3-animate-input" placeholder="0123-456-789">
            </div>
          </div>
          
          <div class="row">
            <div class="col-4 col-sm-4 col-md-4 col-lg-3 form-group" >
              <label class="control-label label1" for="enm">Email ID :</label>
            </div>
            <div class="col-7 col-sm-6 col-md-4 col-lg-4 col-sm-3 form-group">
              <input type="email" <?php echo "value='$row12[10]'";?> name="enm" class="form-control w3-input w3-hover-light-gray  w3-animate-input" placeholder="abc@gmail.com">
          	</div>
          </div>

          <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-4 form-group">
              <label class="control-label label1" for="ra">Residential Address :</label>
            </div>
            <div class="col-sm-7 col-md-8 col-lg-4 form-group">
              <textarea name="r_add" id="ra" class="form-control w3-hover-light-gray" required><?php echo $row12[11];?></textarea>
            </div>
          </div>

          <div class="row"> 
            <div class="col-sm-4 col-md-4 col-lg-4 form-group">
              <label class="control-label label1" for="pa">Permanent Address :</label>
            </div>
            <div class="col-sm-7 col-md-8 col-lg-4 form-group">
              <textarea name="p_add" id="pa" class="form-control w3-hover-light-gray" required><?php echo $row12[12];?></textarea>
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
            <div class="form-group  col-7 col-sm-6 col-md-5  col-lg-4">
              <input type="text" <?php echo "value='$row12[13]'";?> name="board" class="form-control w3-input w3-hover-light-gray  w3-animate-input" style="width:97%" placeholder="Board Name">
            </div>
          </div>

          <div class="row">
            <div class="col-4 col-sm-4 col-md-3 col-lg-3 form-group" >
              <label class="control-label label1" for="sname">School Name :</label>
            </div>
            <div class="col-7 col-sm-6 col-md-5 col-lg-4 form-group">
              <input type="text" <?php echo "value='$row12[14]'";?> name="sname" class="form-control w3-input w3-hover-light-gray  w3-animate-input" style="width:97%" placeholder="St. John's School">
            </div>
          </div>

          <div class="row">
            <div class="col-4 col-sm-4 col-md-3 col-lg-3 form-group" >
              <label class="control-label label1" for="percent">Percentage :</label>
            </div>
            <div class="col-4 col-sm-3 col-md-2 col-lg-2 form-group">
              <input type="number" <?php echo "value='$row12[15]'";?> name="percent" step="any" class="form-control w3-input w3-hover-light-gray  w3-animate-input" style="width:97%" placeholder="99.9%">
            </div>
          </div>

          <div class="row">
            <div class="col-4 col-sm-4 col-md-3 col-lg-3 form-group" >
              <label class="control-label label1" for="marks">Marksheet :</label>
            </div>
            <div class="col-7 col-sm-6 col-md-5 col-lg-5 form-group">
              <input type="file" name="marks"  class="form-control-file" onchange="return fileValidation(this)"style="border:none;">
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
             <input type="text"  <?php echo "value='$row12[17]'";?> name="diploma" id="diploma" class="form-control w3-input w3-hover-light-gray  w3-animate-input" placeholder="Diploma Name" style="width: 97%">  
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
             			       <input type="text" name="bac_clg"  <?php echo "value='$row12[20]'";?> class="form-control w3-input w3-hover-light-gray  w3-animate-input" style="width:97%" placeholder="University Name">
            </div>
          </div>
          <div class="row">
            <div class="col-5 col-sm-5 col-md-3 col-lg-3 form-group" >
              <label class="control-label label1" for="bac_deg_name">Degree Name:</label>
            </div>
            <div class="col-7 col-sm-7 col-md-5 col-lg-5 form-group">
               <input type="text"  <?php echo "value='$row12[21]'";?> name="bac_deg_name" class="form-control w3-input w3-hover-light-gray  w3-animate-input"style="width:97%"placeholder="Degree Name">
            </div>
          </div>
          
          <div class="row">
            <div class="col-5 col-sm-5 col-md-3 col-lg-3 form-group" >
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
             <input type="text"  <?php echo "value='$row12[23]'";?> name="mas_clg" class="form-control w3-input w3-hover-light-gray  w3-animate-input" style="width:97%" placeholder="University Name">
            </div>
          </div>
          <div class="row">
            <div class="col-5 col-sm-5 col-md-3 col-lg-3 form-group" >
              <label class="control-label label1" for="mas_deg_name">Degree Name:</label>
            </div>
            <div class="col-7 col-sm-7 col-md-5 col-lg-5 form-group">
               <input type="text"  <?php echo "value='$row12[24]'";?> name="mas_deg_name" placeholder="Degree Name"class="form-control w3-input w3-hover-light-gray  w3-animate-input"style="width:97%">
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
             <input type="text"  <?php echo "value='$row12[26]'";?> name="doc_clg" placeholder="University Name" class="w3-animate-input w3-input w3-hover-light-gray form-control"   style="width:97%">
            </div>
          </div>
          
          <div class="row">
            <div class="col-5 col-sm-5 col-md-3 col-lg-3  form-group" >
              <label class="control-label label1" for="spl">Specialization:</label>
            </div>
            <div class="col-7 col-sm-7 col-md-5 col-lg-5 form-group">
               <input type="text"  <?php echo "value='$row12[27]'";?> name="spl" placeholder="Specialization Topic" class="form-control w3-input w3-hover-light-gray  w3-animate-input"style="width:97%">
            </div>
          </div>
          
          <div class="row">
            <div class="col-5 col-sm-5 col-md-3 col-lg-3 form-group" >
              <label class="control-label label1" for="doc">Upload Degree:</label>
            </div>
            <div class="col-7 col-sm-7  form-group">
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
              <select name="exp" id="exp" class="form-control" required style="height: 100%">
                <option value="">Select Experience</option>
                <option <?php if($row12[28]=="0-5") echo "selected";?> value="0-5">0-5 years</option>
                <option <?php if($row12[28]=="5-10") echo "selected";?> value="5-10">5-10 years</option>
                <option <?php if($row12[28]=="10-20") echo "selected";?> value="10-20">10-20 years</option>
                <option <?php if($row12[28]=="20-30") echo "selected";?> value="20-30">20-30 years</option>
                <option <?php if($row12[28]=="More than 30 years") echo "selected";?> value="More than 30 years">30 years or more</option>
              </select>
            </div>
          </div>
         
          <div class="row">
            <div class="col-6 col-sm-5 col-md-4 col-lg-4 form-group">
              <label class="control-label label1" for="lj_pos">Last Job's Position:</label>
            </div>
            <div class="col-6 col-sm-6 col-md-5 col-lg-4 form-group">
              <input type="text"  <?php echo "value='$row12[29]'";?> name="lj_pos" class="form-control w3-input w3-hover-light-gray  w3-animate-input" style="width:97%" required placeholder="Surgeon">
            </div>
          </div>

          <div class="row">
            <div class="col-6 col-sm-5 col-md-4 col-lg-4 form-group">
              <label class="control-label label1" for="hname">Organization Name:</label>
            </div>
            <div class="col-6 col-sm-6 col-md-5 col-lg-4 form-group">
             <input type="text"  <?php echo "value='$row12[30]'";?> name="hname" id="hname" class="form-control w3-input w3-hover-light-gray  w3-animate-input" style="width:97%" required placeholder="Organization Name">
            </div>
          </div>
          <div class="row">
              <div class="next-back col-4 col-sm-4 col-md-3 col-lg-3 col-xl-2" >
                <button type="button" class="btn btn-secondary" onclick="gotoqual();"><i class="fas fa-arrow-circle-left"></i> Go back</button>
              </div>
              <div class="next-back col-3 col-sm-3 col-md-4 col-lg-5 col-xl-6" style="text-align:right"></div>    
              <div class="next-back  col-5 col-sm-5 col-md-5 col-lg-4" style="text-align:right;">
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
              <label class="control-label label1" for="aad">PAN Card No: </label>
            </div>
            <div class="col-7 col-sm-6 col-md-5 col-lg-4 form-group">
              <input type="text" name="pan" <?php echo "value='$row12[31]'";?> class="form-control w3-input w3-hover-light-gray  w3-animate-input"   style="width:98%" required placeholder="Enter PAN" maxlength="10" minlength="10">
            </div>
          </div>

          <div class="row">
            <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 form-group">
              <label class="control-label label1" for="bname">Bank Name:</label>
            </div>
            <div class="col-7 col-sm-6 col-md-5 col-lg-4 form-group">
              <select name="bname" id="bname" class="form-control" required >
                <option value="">Select Bank Name</option>
                <option value="Bank of Baroda" <?php if($row12[32]=="Bank of Baroda") echo "selected";?> >Bank of Baroda</option>
                <option value="Canara Bank" <?php if($row12[32]=="Canara Bank") echo "selected";?> >Canara Bank</option>
                <option value="HDFC Bank" <?php if($row12[32]=="HDFC Bank") echo "selected";?> >HDFC Bank</option>
                <option value="ICICI Bank" <?php if($row12[32]=="ICICI Bank") echo "selected";?> > ICICI Bank</option>
                <option value="IDBI Bank" <?php if($row12[32]=="IDBI Bank") echo "selected";?> >IDBI Bank</option>
                <option value="State Bank of India" <?php if($row12[32]=="State Bank of India") echo "selected";?> >State Bank of India</option>
                <option value="Punjab National Bank" <?php if($row12[32]=="Punjab National Bank") echo "selected";?> >Punjab National Bank</option>
                <option value="State Bank of India" <?php if($row12[32]=="State Bank of India") echo "selected";?> >State Bank of India</option>
                <option value="UCO Bank" <?php if($row12[32]=="UCO Bank") echo "selected";?> >UCO Bank</option>
                <option value="Union Bank of India" <?php if($row12[32]=="Union Bank of India") echo "selected";?> >Union Bank of India</option>
              </select>
            </div>
          </div>
         
          <div class="row">
            <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 form-group">
              <label class="control-label label1" for="acno">Account No:</label>
            </div>
            <div class="col-7 col-sm-6 col-md-5 col-lg-4 form-group">
              <input type="number" <?php echo "value='$row12[33]'";?> name="acno" class="form-control w3-input w3-hover-light-gray  w3-animate-input" style="width:98%" required placeholder="Enter Acc. Number">
            </div>
          </div>

          <div class="row">
            <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 form-group">
              <label class="control-label label1" for="IFSC code">IFSC Code:</label>
            </div>
            <div class="col-7 col-sm-6 col-md-5 col-lg-4 form-group">
             <input type="text" name="ifsc" id="ifsc" <?php echo "value='$row12[34]'";?> class="form-control w3-input w3-hover-light-gray  w3-animate-input" style="width:97%" required placeholder="Enter IFSC Code" maxlength="11" minlength="11">
            </div>
          </div>
          <div class="row">
              <div class="next-back  col-4 col-sm-4 col-md-3 col-lg-3 col-xl-2" >
                <button type="button" class="btn btn-secondary" onclick="gotoexper();"><i class="fas fa-arrow-circle-left"></i> Go back</button>
              </div>
              <div class="next-back  col-3 col-sm-3 col-md-4 col-lg-5 col-xl-6" style="text-align:right"></div>    
              <div class="next-back  col-5 col-sm-5 col-md-5 col-lg-4" style="text-align:right;">
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
              <label class="control-label label1" for="Department">Department:</label>
            </div>
            <div class="col-7 col-sm-6 col-md-4 col-lg-4 form-group">
                <select id='dept' name="dept" class="form-control"  style="height: 100%" required>
                  <option value="">Select Department</option>
                  <?php
                  $r=mysqli_query($con,"select dept_id,Name from departments");
                  while($row1=mysqli_fetch_array($r))
                  {
                    echo "<option value='$row1[0]'";
                    if($row12[35]=="$row1[0]") echo "selected";
                    echo">$row1[1]</option>";
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
               <input type="text"  <?php echo "value='$row12[36]'";?> name="pos" id="pos" class="form-control w3-input w3-hover-light-gray  w3-animate-input" style="width:97%" required placeholder="Position">
            </div>
          </div>

          <div class="row">
            <div class="col-5 col-sm-5 col-md-4 col-lg-4 form-group">
              <label class="control-label label1" for="Joining Date">Joining Date:</label>
            </div>
            <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-3 form-group">
              <input type="date"  <?php echo "value='$row12[37]'";?> name="jd" class="form-control w3-input w3-hover-light-gray" required>
            </div>
          </div>

          <div class="row">
            <div class="col-5 col-sm-5 col-md-4 col-lg-4 form-group">
              <label class="control-label label1" for="Salary">Salary:</label>
            </div>
            <div class="col-7 col-sm-5 col-md-3 col-lg-4 col-xl-3 form-group">
               <input type="number"  <?php echo "value='$row12[38]'";?> name="salary" id="salary" class="form-control w3-input w3-hover-light-gray   w3-animate-input" placeholder="0.0 Rs" style="width:97%" required>
            </div>
          </div>
          
            <div class="row">
              <div class="next-back col-4 col-sm-4 col-md-3 col-lg-3 col-xl-2" >
                <button type="button" class="btn btn-secondary" onclick="gotobank();"><i class="fas fa-arrow-circle-left"></i> Go back</button>
              </div>
              <div class="next-back col-1 col-sm-1 col-md-1 col-lg-2 col-xl-3" style="text-align:right"></div>    
              <div class="next-back col-5 col-sm-5 col-md-5 col-lg-3" style="text-align: center">
                &nbsp;&nbsp;<input type="Submit" id="bttn" value="Update Details" name="submit-btn" id="submit-btn" class="btn btn-primary btn-lg">
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
<?php include '../mydetails.php'; ?>
<?php } ?>

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
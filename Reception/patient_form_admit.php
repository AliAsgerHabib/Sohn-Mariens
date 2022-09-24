<!DOCTYPE html>
<html>
<head>
	<title>Admit Patient</title>
  <link rel="shortcut icon" href="../images/fav2.png">
  <?php
    include ('../head.php');
    include ('../bootstrap.php');
    include ('../database_connect.php');
  ?>
  <link rel="stylesheet" type="text/css" href="../styles/patient_form_admit.css">
  
</head>
<body>
	<header>
		<?php include 'header.php';?>
	</header>
	<script src="../js/patient_form_admit.js"></script>
  <style type="text/css">
    .heading
    {
      border-top-right-radius: 0px;
      border-top-left-radius: 0px;
    }
    @media (max-width: 576px) {
    .container{
        max-width: 92vw;
      }
      #area
      {
        overflow-x: scroll!important;
      }
      #area table
      {
        width: 250%!important;
      }
    }

  </style>
	<main>
		<div class="container">
			<div class="row">
				<div class="col-xs-7 col-sm-12 col-md-12 col-lg-9 box-body">
					<form action="patient_admit_db.php" method="post">

					<div class="row">
          	<div class="mheading col-sm-12">
            	<h1 style="font-size: 55px!important;"><img src="../images/admit.jpg" style="width: 100px;height: 100px;">Admit Patient</h1>
          	</div>
        	</div>

        	<div class="row">
	          <div class="col-4 col-sm-4 col-md-3 col-lg-3 form-group">
	            <label class="control-label label1 " for="pname">Patient ID:</label>
	          </div>  
	          <div class="col-4 col-sm-6 col-md-4 col-lg-3 col-xl-2 form-group">
	            <input type="text" maxlength="25" name="pid" id="pid" placeholder="Enter ID" class="form-control w3-input w3-hover-light-gray w3-animate-input" style="width:97%">
	          </div>
       	 	</div>

       	 	<div id="det">
						
						<div class="row">
            	<div class="col-4 col-sm-4 col-md-3 col-lg-3 form-group">
              	<label class="control-label label1 " for="pname">Name:</label>
            	</div>  
            	<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-3 form-group">
              	<input type="text" maxlength="25" name="pname" id="pname" placeholder="Enter name here" required class="form-control w3-input w3-hover-light-gray w3-animate-input" style="width:97%;text-align: left!important;">
            	</div>
        		</div>

        		<div class="row"> 
            <div class="col-4 col-sm-4 col-md-3 col-lg-3 form-group">
              <label class="control-label label1" for="Age">Age:</label>
            </div>
            <div class="col-6 col-sm-3 col-md-4 col-lg-2 form-group"> 
              <input type="number" step="any" min=0 name="age" placeholder="0 yrs" required class="form-control w3-hover-light-gray w3-animate-input" style="width:97%">
            </div>
          </div>

          <div class="row">    
            <div class="col-4 col-sm-4 col-md-3 col-lg-3 form-group">
              <label class="control-label label1" for="GENDER">Gender:</label>
            </div>
            <div class="col-7 col-sm-8 form-group">
                <input type="radio" class="w3-radio" name="gender" value="Male" required> Male
                <input type="radio" class="w3-radio" name="gender" value="Female"> Female
                <input type="radio" name="gender" class="w3-radio" value="Others"> Others
            </div>
          </div>
       	 	</div>

       	 	<div class="row" style="margin-top: 15px;">
            <div class="heading col-sm-12">
              <h1> Admit Details</h1>
            </div>
          </div>
          
          <div class="row">
	          <div class="col-4 col-sm-5 col-md-4 col-lg-3 form-group">
	            <label class="control-label label1" for="Admit Date">Admit Date:</label>
	          </div>
	          <div class="col-6 col-sm-5 col-md-4 col-xl-3 col-lg-4 form-group"> 
	            <input type="date" name="ad_date" id="ad_date" required class="form-control w3-hover-light-gray w3-animate-input" style="width:97%">
	          </div>
          </div>

          <div class="row">
            <div class="col-4 col-sm-5 col-md-4 col-lg-3 form-group"> 
              <label class="control-label label1" for="Admit Time">Admit Time:</label>
            </div>
            <div class="col-6 col-sm-3 col-md-3 col-xl-2 col-lg-3 form-group"> 
              <input type="time" name="ad_time" id="ad_time" required class="form-control w3-hover-light-gray w3-animate-input" style="width:97%">
            </div>  
          </div>

          <div class="row">
	          <div class="col-4 col-sm-5 col-md-4 col-lg-3 form-group">
	            <label class="control-label label1" for="Department">Department: </label>
	          </div>
	          <div class="col-6 col-sm-5 col-md-4 col-lg-4 form-group">
	            <select id='dept' name="dept" class="form-control w3-hover-light-gray w3-animate-input" style="width:97%" required> 
	            <?php
	              $r=mysqli_query($con,"select dept_id,Name from departments where isDoctor='1'");
	              echo "<option>Department</option>";
	              while($row=mysqli_fetch_array($r))
	              {
	                echo "<option value='$row[0]'>$row[1]</option>";
	              }
	            ?>
	            </select>
	          </div> 
          </div>

          <div class="row">
          <div class="col-4 col-sm-5 col-md-4 col-lg-3 form-group">
            <label class="control-label label1" for="Doctor's Name">Doctor On Case:</label>
          </div>
          <div class="col-6 col-sm-5 col-md-4 col-lg-4 form-group" id="dname">  
            <span id="dname"></span>
          </div>
          </div>

          <div class="row" style="margin-top: 15px;">
            <div class="heading col-sm-12">
              <h1>Companion Details</h1>
            </div>
          </div>

          <div class="row">
          	<div class="col-5 col-sm-5 col-md-4 col-xl-3 col-lg-4 form-group">
            	<label class="control-label label1" for="phone no">Companion Name:</label>
            </div>
          	<div class="col-7 col-sm-5 col-md-4 col-xl-4 col-lg-5 form-group">
            	<input type="text" name="cname" placeholder="Enter companion name" required class="form-control w3-hover-light-gray w3-animate-input" style="width:97%">
         		</div>  
          </div>

          <div class="row">
          <div class="col-5 col-sm-5 col-md-4 col-xl-3 col-lg-4 form-group">
            <label class="control-label label1" for="phone no">Relation to patient:</label>
                    </div>
          <div class="col-7 col-sm-5 col-md-4 col-xl-4 col-lg-5 form-group">
            <input type="text" name="rel" placeholder="Enter relation here" required class="form-control w3-hover-light-gray w3-animate-input" style="width:97%">
          </div>  
          </div>

          <div class="row">
          	<div class="col-5 col-sm-5 col-md-4 col-xl-3  col-lg-4 form-group">
            	<label class="control-label label1" for="phone no">Phone No:</label>
            </div>
          	<div class="col-7 col-sm-5 col-md-4 col-xl-4  col-lg-5 form-group">
            	<input type="tel" name="phno" placeholder="1234-567-890" required class="form-control w3-hover-light-gray w3-animate-input" style="width:97%">
          	</div>  
          </div>

          <div class="row">
          	<div class="col-5 col-sm-5 col-md-4 col-xl-3 col-lg-4">
            	<label class="control-label label1" for="email">Email ID:</span>
          	</div>
          	<div class="col-7 col-sm-5 col-md-4 col-xl-4 col-lg-5"> 
            	<input type="email" name="mail" placeholder="abc@xyz.com" class="form-control w3-hover-light-gray w3-animate-input" style="width:97%">
          	</div>
          </div>


          <div class="row" style="margin-top: 15px;">
            <div class="heading col-sm-12">
              <h1>Ward Details</h1>
            </div>
          </div>          
          
          <div class="row">
          	<div class="col-4 col-sm-3 col-md-3 col-lg-3 form-group ">
              <label class="label-control label1" for="wno">Ward No :</label>
            </div>
            <div class="col-6 col-sm-5 col-md-4 col-lg-3 form-group">
              <select name="wno" id="wno" class="form-control w3-hover-light-gray" required style="height: 100%">
                <option value="">Select Ward No</option>
                <option value="Ward 1">Ward 1</option>
                <option value="Ward 2">Ward 2</option>
                <option value="Ward 3">Ward 3</option>
                <option value="Ward 4">Ward 4</option>
                <option value="Cottage Wards">Cottage Ward</option>
              </select>
            </div>
        	</div>

        	<div class="row">
            <div class="col-4 col-sm-3 col-md-3 col-lg-3 form-group">
              <label class="control-label label1" for="Discount Category">Bed No:</label>
            </div>
            <div class="col-6 col-sm-5 col-md-4 col-lg-3 form-group"> 
              <input type="number" step="any" min="1" max="20" name="bno" id="bno" placeholder="Enter bed no" required class="form-control w3-hover-light-gray w3-animate-input" style="width:97%">
            </div>
            <div class="col-12 col-sm-4 col-md-5 col-lg-5 col-xl-4 form-group error1" id="msg" style="vertical-align: middle;">
            </div> 
          </div>

          <div class="row" style="margin-top: 25px;margin-bottom: 25px">
            <div class="col-sm-12" style="text-align: center">
              <input type="Submit" id="bttn" name="submit-btn" class="btn btn-primary btn-lg">
              <input type="reset" id="btt2" value="Cancel" name="submit-btn" class="btn btn-primary btn-sm">
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
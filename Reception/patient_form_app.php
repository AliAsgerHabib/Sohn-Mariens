<!DOCTYPE html>
<html>
<head>
	<title>Book Appointment</title>
  <link rel="shortcut icon" href="../images/fav2.png">
  <?php
    include ('../head.php');
    include ('../bootstrap.php');
    include ('../database_connect.php');
  ?>
  <link rel="stylesheet" type="text/css" href="../styles/patient_form_app.css">

</head>
<body>
	<header>
		<?php include 'header.php';?>
	</header>

	<script src="../js/patient_form_app.js"></script>
  <style type="text/css">
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
.heading
    {
      border-top-right-radius: 0px;
      border-top-left-radius: 0px;
    }
  </style>
	<main>
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-9 box-body">
					<form action="patient_form_db.php" method="post">
						
						<div class="row">
	          	<div class="mheading col-sm-12">
	            	<h1 style="font-size: 55px!important;"><img src="../images/app.jpg" style="width: 100px;height: 100px;"> Book Appointment</h1>
	          	</div>
        		</div>

        	<div class="row">
	          <div class="col-5 col-sm-4 col-md-3 col-lg-3 form-group">
	            <label class="control-label label1 " for="pname">Identification No:</label>
	          </div>  
	          <div class="col-6 col-sm-6 col-md-4 col-xl-3 col-lg-4 form-group">
	            <input type="text" maxlength="12" minlength="12" name="aadno" id="aadno" placeholder="Enter Aadhar No" required class="form-control w3-input w3-hover-light-gray w3-animate-input" style="width:97%">
	          </div>
        	</div>

        	<div id="det">
        		
        		<div class="row">
            <div class="col-5 col-sm-4 col-md-3 col-lg-3 form-group">
              <label class="control-label label1 " for="pname">Name:</label>
            </div>  
            <div class="col-6 col-sm-6 col-md-4 col-lg-5 form-group">
              <input type="text" maxlength="25" name="pname" id="pname" placeholder="Enter name here" required class="form-control w3-input w3-hover-light-gray w3-animate-input" style="width:97%">
            </div>
          	</div>

          	<div class="row">
	          <div class="col-5 col-sm-4 col-md-3 col-lg-3  form-group">
	             <label class="control-label label1" for="fname">Father's Name:</label>
	          </div>
	          <div class="col-6 col-sm-6 col-md-4 col-lg-5  form-group">  
	            <input type="text" maxlength="25" name="fname" placeholder="Enter name here" required class="form-control w3-animate-input w3-hover-light-gray" style="width:97%">
	          </div>
        		</div>


        		<div class="row"> 
            <div class="col-5 col-sm-4 col-md-3 col-lg-3 form-group">
              <label class="control-label label1" for="Age">Age:</label>
            </div>
            <div class="col-6 col-sm-3 col-md-4 col-lg-2 form-group"> 
              <input type="number" step="any" min=0 name="age" placeholder="0 yrs" required class="form-control w3-hover-light-gray w3-animate-input" style="width:97%">
            </div>
         		</div>

         		<div class="row">    
            <div class="col-5 col-sm-4 col-md-3 col-lg-3 form-group">
              <label class="control-label label1" for="GENDER">Gender:</label>
            </div>
            <div class="col-7 col-sm-8 form-group">
                <input type="radio" class="w3-radio" name="gender" value="Male" required> Male
                <input type="radio" class="w3-radio" name="gender" value="Female"> Female
                <input type="radio" name="gender" class="w3-radio" value="Others"> Others
            </div>
         		</div>

         		<div class="row">  
            <div class="col-5 col-sm-4 col-md-3 col-lg-3 form-group">
              <label class="control-label label1" for="Weight">Weight:</label>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 form-group">   
              <input type="number" step="any" name="weight" placeholder='0.0 kg' required class="form-control w3-hover-light-gray w3-animate-input" style="width:97%">
            </div>  
            <div class="col-5 col-sm-5 col-md-3 col-lg-3 form-group text-right">
              <label class="control-label label1" for="Height">Height:</label>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-3 col-xl-2 from-control"> 
              <input type="number" step="any" name="height" placeholder='0.0 cm' required class="form-control w3-hover-light-gray w3-animate-input" style="width:97%">
            </div>
          	</div>
        	</div>

        	<div class="row" style="margin-top: 15px;">
            <div class="heading col-sm-12">
              <h1>Prior Medical Conditions</h1>
            </div>
          </div>

        	<div class="row">
        		<div class="col-sm-12 form-inline">
        			<table style="width: 100%;">
        				<tr>
	                <td><input type="checkbox" name="ds[]" value="Pregnancy">&nbspPregnancy&nbsp&nbsp</td>
	                <td><input type="checkbox" name="ds[]" value="Asthma">&nbspAsthma&nbsp&nbsp</td>
	                <td><input type="checkbox" name="ds[]" value="Diabetes">&nbspDiabetes&nbsp&nbsp</td>
              	</tr>

              	<tr>
                <td><input type="checkbox" name="ds[]" value="High Blood Pressure">&nbspHigh Blood Pressure&nbsp&nbsp</td>
                <td><input type="checkbox" name="ds[]" value="Low Blood Pressure">&nbspLow Blood Pressure&nbsp&nbsp</td>
                <td><input type="checkbox" name="ds[]" value="Thyroid">&nbspThyroid&nbsp&nbsp</td>
              	</tr>

              	<tr>
                <td><input type="checkbox" name="ds[]" value="Allergy">&nbspAllergy</td>
                <td>  <input type="checkbox" name="ds[]" value="Cancer">&nbspCancer</td>
              	</tr>
        			</table>
        		</div>
        	</div>

        	<div class="row" style="margin-top: 15px;">
            <div class="heading col-sm-12">
              <h1>Appointment Details</h1>
            </div>
          </div>

          <div class="row">
	          <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-3 form-group">
	            <label class="control-label label1" for="Appointment Date">Appointment Date:</label>
	          </div>
	          <div class="col-6 col-sm-5 col-md-4 col-lg-4 col-xl-3 form-group"> 
	            <input type="date" name="ap_date" id="ap_date" required class="form-control w3-hover-light-gray w3-animate-input" style="width:97%">
	          </div>
          </div>

          <div class="row">
	          <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-3 form-group">
	            <label class="control-label label1" for="Department">Department: </label>
	          </div>
	          <div class="col-6 col-sm-5 col-md-4 col-lg-4 col-xl-3 form-group">
	            <select id='dept' name="dept" class="form-control w3-hover-light-gray w3-animate-input" style="width:97%" required> 
	            <?php
	              $r=mysqli_query($con, "select dept_id,Name from departments where isDoctor='1'");
	              echo "<option>Select Department</option>";
	              while ($row=mysqli_fetch_array($r)) {
	                  echo "<option value='$row[0]'>$row[1]</option>";
	              }
	            ?>
	            </select>
          	</div> 
          </div>

          <div class="row">
          <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-3 form-group">
            <label class="control-label label1" for="Doctor's Name">Doctor's Name:</label>
          </div>
          <div class="col-6 col-sm-5 col-md-4 col-lg-4 col-xl-3 form-group">  
            <span id="dname"></span>
          </div>
          </div>

          <div class="row">
            <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-3 form-group"> 
              <label class="control-label label1" for="Appointment Time">Appointment Time:</label>
            </div>
            <div class="col-4 col-sm-3 col-md-3 col-lg-3 col-xl-3 form-group "> 
              <span id="time"></span>
            </div>   
          </div>

          <div class="row" style="margin-top: 15px;">
            <div class="heading col-sm-12">
              <h1>Contact Details</h1>
            </div>
          </div>

          <div class="row">
          <div class="col-5 col-sm-3 col-md-4 col-lg-3 form-group">
            <label class="control-label label1" for="phone no">Phone No:</label>
          </div>
          <div class="col-6 col-sm-5 col-md-4 col-lg-4 form-group">
            <input type="tel" name="phno" placeholder="1234-567-890" required class="form-control w3-hover-light-gray w3-animate-input" style="width:97%">
          </div>  
          </div>

          <div class="row">
          <div class="col-5 col-sm-3 col-md-4 col-lg-3 ">
            <label class="control-label label1" for="email">Email ID:</span>
          </div>
          <div class="col-6 col-sm-5 col-md-4 col-lg-4 "> 
            <input type="email" name="mail" placeholder="abc@xyz.com" class="form-control w3-hover-light-gray w3-animate-input" style="width:97%">
          </div>
          </div>
          
          <div class="row" style="margin-top: 15px;">
            <div class="heading col-sm-12">
              <h1>Payment Details</h1>
            </div>
          </div>          
          
          <div class="row">
          <div class="col-6 col-sm-5 col-md-4 col-xl-3 col-lg-4 form-group">
            <label class="control-label label1" for="Consultation Fees">Consultation Fees:</span>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-3 form-group"> 
            <input type="number" step="any" id="fees" name="fees" placeholder=" Rs. 0" class="form-control w3-hover-light-gray w3-animate-input" style="width:97%" required>
          </div>
          </div>

          <div class="row">
          <div class="col-6 col-sm-5 col-md-4 col-xl-3 col-lg-4 form-group">
            <label class="control-label label1" for="Discount Category">Discount Category:</label>
          </div>
          <div class="col-6 col-sm-5 col-md-4 col-lg-4 col-xl-3 form-group"> 
            <select onchange='discount_calc(this.value)' name="dis_cat" class="form-control w3-hover-light-gray w3-animate-input">
              <option value="0" seleted>None</option>
              <option value="1">Medical Personnel</option>
              <option value='2'>Staff</option>
              <option value="3">Govt. Employees</option>
              <option value="4">Soldiers</option>
              <option value="5">Others</option>
            </select>         
          </div>
          </div>

          <div class="row">
          <div class="col-6 col-sm-5 col-md-4 col-xl-3 col-lg-4 form-group">
          <label class="control-label label1" for="Discount Percentage">Discount Percentage:</label>
          </div>
          <div class="col-6 col-sm-5 col-md-4 col-lg-4 col-xl-3 form-group"> 
            <input type="number" step="any"  id='discountper' readOnly value="0" class="form-control w3-hover-light-gray w3-animate-input" style="width:97%">
          </div>
          </div>

          <div class="row">
          <div class="col-6 col-sm-5 col-md-4 col-xl-3 col-lg-4  form-group">
            <label class="control-label label1" for="Amount">Amount:
          </div>  
          <div class="col-6 col-sm-5 col-md-4 col-lg-4 col-xl-3  form-group">
            <input type="number" step="any" id="amount" name="amount" value="0" onfocus="amtcalc()" class="form-control w3-hover-light-gray w3-animate-input" style="width:97%" readonly>
          </div>
          </div>

          <div class="row">
          <div class="col-6 col-sm-5 col-md-4 col-xl-3 col-lg-4  form-group">
            <label class="control-label label1" for="Amount">Mode of Payment:
          </div>  
          <div class="col-6 col-sm-5 col-md-4 col-lg-8 form-group">
            <input type="radio" class="w3-radio" name="pay_mode" id="Cash" value="Cash" required> Cash
            <br/>
            <input type="radio" class="w3-radio" name="pay_mode" id="Cheque" value="Cheque"> Cheque
            <br/>
						<input type="radio" name="pay_mode" class="w3-radio" id="CD" value="Credit / Debit Card"> Credit / Debit Card
						<br/>
						<input type="radio" name="pay_mode" class="w3-radio" id="UPI" value="UPI Transfer"> UPI Transfer
          </div>
          </div>

          <div class="row">
          <div class="col-6 col-sm-5 col-md-4 col-xl-3 col-lg-4  form-group">
            <label class="control-label label1" for="Amount" id="lab">
          </div>  
          <div class="col-6 col-sm-5 col-md-4 col-lg-4 form-group" id="sect"></div>
          </div>


          <div class="row" style="margin-top: 25px;margin-bottom: 25px">
            <div class="col-sm-12" style="text-align: center">
              <input type="Submit" id="bttn" value="Save Appointment" name="submit-btn" id="submit-btn" class="btn btn-primary btn-lg">
              <input type="reset" id="btt2" value="Cancel" name="submit-btn" id="submit-btn" class="btn btn-primary btn-sm">
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
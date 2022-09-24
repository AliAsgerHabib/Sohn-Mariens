<!DOCTYPE html>
<html>
<head>
	<title>Employee File</title>
  <link rel="shortcut icon" href="../images/fav2.png">
  <?php
    $x=$_REQUEST["a"];
    include ('../head.php');
    include ('../bootstrap.php');
    include ('../database_connect.php');
    $r=mysqli_query($con,"select * from employee where id='$x'");
    
    if($rowx=mysqli_fetch_array($r))
    {

  ?>
  <style type="text/css">
  #back
  {
    padding-top: 10px;
    padding-left: 10px;
    font-family: for_body;
  }
</style>

  <link rel="stylesheet" type="text/css" href="../styles/emp_file.css">

</head>

<body>
	<header>
		<?php include 'header.php';?>
	</header>
	
  <main>
    <div id="back">
      <a href="employee_details.php" class='btn btn-secondary'><i class="fas fa-arrow-circle-left"></i> Return to Employee Database</a>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-11 col-sm-12 col-md-12 col-lg-9 box-body">

          <div class="row">
            <div class="heading col-sm-12" style="border-top: none;">
              <h1><img src="../images/logo.png" style="width: 120px;height: auto;"> SOHN MARIENS HOSPITAL AND LABS</h1>
            </div>
          </div>
          <div class="row">
            <div class="heading2 col-sm-12">
              <h2>Employee File </h2>
            </div>
          </div>
          <div class="row">
            <div class="heading1 col-sm-12">
              <h3 class="col-sm-12"> Personal Details</h3>
            </div>
          </div>

          <div class="row">
            <div class="col-11 col-sm-8 col-md-8 col-lg-8">
              <div class="row">
                <div class="col-6 col-sm-7 col-md-5 col-lg-5">
                  <b>Employee Name: </b>
                </div>
                <div class="col-6 col-sm-6 col-md-7 col-lg-6">
                  <?php echo $rowx[1];?>
                </div>
            <div class="col-6 col-sm-7 col-md-5 col-lg-5">
              <b>Employee ID: </b>
            </div>
            <div class="col-6 col-sm-3 col-md-7 col-lg-6">
              <?php echo $rowx[0];?>
            </div>
            <div class="col-6 col-sm-7 col-md-5 col-lg-5">
              <b>Aadhar Number: </b>
            </div>
            <div class="col-6 col-sm-3 col-md-7 col-lg-6">
              <?php echo $rowx[6];?>
            </div>
            <div class="col-6 col-sm-7 col-md-5 col-lg-5">
              <b>Date of Birth: </b>
            </div>
            <div class="col-6 col-sm-5 col-md-7 col-lg-6">
              <?php echo $rowx[5];?>
            </div>
            <div class="col-6 col-sm-6 col-md-5 col-lg-5">
              <b>Gender: </b>
            </div>
            <div class="col-6 col-sm-3 col-md-7 col-lg-3">
              <?php echo $rowx[4];?>
            </div>
          </div>
            </div>
            <div class="col-11 col-sm-3 col-md-3 col-lg-3">
              <?php echo "<img src='../upload/",$rowx[7],"' style='width:140px;height:140px;border:3.5px solid #004747'>";?>
            </div>
          </div>
          <br>
          
          <div class="row">
            <div class="col-6 col-sm-5 col-md-3 col-lg-3 ">
              <b>Mother's Name: </b>
            </div>
            <div class="col-6 col-sm-6 col-md-3 col-lg-3 ">
              <?php echo "$rowx[3]";?>
            </div>
            <div class="col-6 col-sm-5 col-md-3 col-lg-3 ">
              <b>Father's Name: </b>
            </div>
            <div class="col-6 col-sm-6 col-md-3 col-lg-3 ">
              <?php echo "$rowx[2]";?>
            </div>    
          </div>
          
          <div class="row">
            <div class="heading1 col-sm-12">
              <h3 class="col-sm-12"> Position Details</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-5 col-sm-5 col-md-3 col-lg-3 ">
              <b>Position: </b>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 ">
              <?php echo "$rowx[36]";?>
            </div>
          </div>

          <div class="row">
            <div class="col-5 col-sm-5 col-md-3 col-lg-3 ">
              <b>Department: </b>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 ">
              <?php $r=mysqli_query($con,"select name from departments where dept_id='$rowx[35]'");
              if($rowy=mysqli_fetch_array($r))
              echo "$rowy[0]";?>
            </div>
          </div>
          
          <div class="row">
            <div class="col-5 col-sm-5 col-md-3 col-lg-3 ">
              <b>Joining Date: </b>
            </div>
            <div class="col-6 col-sm-6 col-md-3 col-lg-6 ">
              <?php echo "$rowx[37]";?>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-5 col-sm-5 col-md-3 col-lg-3 ">
              <b>Salary: </b>
            </div>
            <div class="col-6 col-sm-3 col-md-3 col-lg-6 ">
              &#x20B9;<?php echo "$rowx[38]";?>/-
            </div>
          </div>


          <div class="row">
            <div class="heading1 col-sm-12">
              <h3 class="col-sm-12"> Qualification Details</h3>
            </div>
          </div>

          <div class="row">
            <div class="col-11 col-sm-6 col-md-6 col-lg-6 ">
              <b style="text-decoration: underline 2px; color: #008080;">12th Standard: </b>
            </div>
          </div>
          <div class="row">
            <div class="col-4 col-sm-6 col-md-2 col-lg-2 ">
              <b>Board: </b>
            </div>
            <div class="col-8 col-sm-6 col-md-3 col-lg-3 ">
              <?php echo $rowx[13]?>
            </div>
          </div>
          <div class="row">
            <div class="col-4 col-sm-6 col-md-2 col-lg-2 ">
              <b>School: </b>
            </div>
            <div class="col-8 col-sm-6 col-md-6 col-lg-10 ">
              <?php echo $rowx[14]?>
            </div>
          </div>

          <div class="row">
            <div class="col-4 col-sm-6 col-md-2 col-lg-2 ">
              <b>Marks: </b>
            </div>
            <div class="col-8 col-sm-6 col-md-6 col-lg-4 ">
              <?php echo $rowx[15]?> %
            </div>
          </div>

          <div class="row">
            <div class="col-11 col-sm-6 col-md-6 col-lg-6 ">
              <a <?php echo "href='../upload/",$rowx[16],"'"?> download target="blank" class="btn btn-primary btn-sm"><i class="fas fa-file-download"></i> Download Marksheet</a>
            </div>
          </div>
          <?php
            if($rowx[17]!="")
            {
          ?>
          <br>
          <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6 ">
              <b style="text-decoration: underline 2px; color: #008080;">Diploma (If Any): </b>
            </div>
          </div>

          <div class="row">
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 ">
              <b>Discipline Name: </b>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-9 ">
              <?php echo $rowx[17]?>
            </div>
          </div>

          <div class="row">
            <div class="col-11 col-sm-6 col-md-6 col-lg-4 ">
              <a <?php echo "href='../upload/",$rowx[18],"'"?> download target="blank" class="btn btn-primary btn-sm"><i class="fas fa-file-download"></i> Download Diploma</a>
            </div>
          </div>
        <?php } ?>
          <?php
            if($rowx[21]!="")
            {
          ?>
          <br>
          <div class="row">
            <div class="col-11 col-sm-6 col-md-6 col-lg-6 ">
              <b style="text-decoration: underline 2px; color: #008080;">Bachelors: </b>
            </div>
          </div>

          <div class="row">
            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-3">
              <b>University Name: </b>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 ">
              <?php echo $rowx[20]?>
            </div>
          </div>

          <div class="row">
            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-3 ">
              <b>Degree Name: </b>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-6">
              <?php echo $rowx[21]?>
            </div>
          </div>

          <div class="row">
            <div class="col-6 col-sm-6 col-md-6 col-lg-4 ">
              <a <?php echo "href='../upload/",$rowx[19],"'"?> download target="blank" class="btn btn-primary btn-sm"><i class="fas fa-file-download"></i> Download Degree</a>
            </div>
          </div>
          <?php } ?>
          <?php
            if($rowx[24]!="")
            {
          ?>
          <br>
          <div class="row">
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 ">
              <b style="text-decoration: underline 2px;  color: #008080;">Masters: </b>
            </div>
          </div>

          <div class="row">
            <div class="col-6 col-sm-6 col-md-4 col-lg-4  col-xl-3">
              <b>University Name: </b>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 ">
              <?php echo $rowx[23]?>
            </div>
          </div>

          <div class="row">
            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-3">
              <b>Degree Name: </b>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 ">
              <?php echo $rowx[24]?>
            </div>
          </div>

          <div class="row">
            <div class="col-6 col-sm-6 col-md-6 col-lg-4 ">
              <a <?php echo "href='../upload/",$rowx[22],"'"?> download target="blank" class="btn btn-primary btn-sm"><i class="fas fa-file-download"></i> Download Degree</a>
            </div>
          </div>
          <?php } ?>
          <?php
            if($rowx[27]!="")
            {
          ?>
          <br>
          <div class="row">
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 ">
              <b style="text-decoration: underline 2px; color: #008080;">Doctrate: </b>
            </div>
          </div>

          <div class="row">
            <div class="col-6 col-sm-6 col-md-4 col-lg-4  col-xl-3">
              <b>University Name: </b>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-4 ">
              <?php echo $rowx[26]?>
            </div>
          </div>

          <div class="row">
            <div class="col-6 col-sm-6 col-md-4 col-lg-4  col-xl-3">
              <b>Specialization: </b>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-4 ">
              <?php echo $rowx[27]?>
            </div>
          </div>

          <div class="row">
            <div class="col-11 col-sm-6 col-md-6 col-lg-4 ">
              <a <?php echo "href='../upload/",$rowx[25],"'"?> download target="blank" class="btn btn-primary btn-sm"><i class="fas fa-file-download"></i> Download Degree</a>
            </div>
          </div>
          <?php } ?>
           
          <div class="row">
            <div class="heading1 col-sm-12">
              <h3 class="col-sm-12"> Experience Details</h3>
            </div>
          </div>

          <div class="row">
            <div class="col-5 col-sm-6 col-md-5 col-lg-4 ">
              <b>Experience (in years): </b>
            </div>
            <div class="col-4 col-sm-6 col-md-6 col-lg-3 ">
              <?php echo "$rowx[28]";?>
            </div>    
          </div>

          <div class="row">
            <div class="col-5 col-sm-6 col-md-5 col-lg-4 ">
              <b>Worked At: </b>
            </div>
            <div class="col-4 col-sm-6 col-md-6 col-lg-6 ">
              <?php echo "$rowx[30]";?>
            </div>
          </div>

          <div class="row">
            <div class="col-5 col-sm-6 col-md-5 col-lg-4 ">
              <b>Position at Last Job: </b>
            </div>
            <div class="col-7 col-sm-6 col-md-6 col-lg-6 ">
              <?php echo "$rowx[29]";?>
            </div>
          </div>
          <div class="row">
            <div class="heading1 col-sm-12">
              <h3 class="col-sm-12"> Bank Account Details</h3>
            </div>
          </div>

          <div class="row">
            <div class="col-6 col-sm-5 col-md-5 col-lg-4 ">
              <b>PAN Card No: </b>
            </div>
            <div class="col-6 col-sm-5 col-md-6 col-lg-6 ">
              <?php echo "$rowx[31]";?>
            </div>
          </div>

          <div class="row">
            <div class="col-6 col-sm-5 col-md-5 col-lg-4 ">
              <b>Bank Name: </b>
            </div>
            <div class="col-6 col-sm-7 col-md-6 col-lg-6 ">
              <?php echo "$rowx[32]";?>
            </div>
          </div>

          <div class="row">
            <div class="col-6 col-sm-5 col-md-5 col-lg-4 ">
              <b>Account Number: </b>
            </div>
            <div class="col-6 col-sm-5 col-md-6 col-lg-6 ">
              <?php echo "$rowx[33]";?>
            </div>
          </div>

          <div class="row">
            <div class="col-6 col-sm-5 col-md-5 col-lg-4 ">
              <b>IFSC Code: </b>
            </div>
            <div class="col-6 col-sm-5 col-md-6 col-lg-6 ">
              <?php echo "$rowx[34]";?>
            </div>
          </div>
          <div class="row">
            <div class="heading1 col-sm-12">
              <h3 class="col-sm-12"> Contact Details</h3>
            </div>
          </div>
          
          <div class="row">
            <div class="col-5 col-sm-4 col-md-4 col-lg-3 ">
              <b>Contact No: </b>
            </div>
            <div class="col-6 col-sm-8 col-md-8 col-lg-9 ">
              <?php echo "$rowx[8]";?> <b>,</b>             
              <?php echo "$rowx[9]";?>
            </div>   
          </div>

          <div class="row">
            <div class="col-5 col-sm-4 col-md-4 col-lg-3 ">
              <b>Email Address: </b>
            </div>
            <div class="col-6 col-sm-8 col-md-8 col-lg-9 ">
              <?php echo "$rowx[10]";?>
            </div>   
          </div>
          <br>
          <div class="row">
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 ">
              <b>Residential Address: </b>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 ">
              <b>Permanent Address: </b>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 ">
              <?php echo "$rowx[11]";?>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 ">
              <?php echo "$rowx[12]";?>
            </div>  
          </div>
        </div>
      </div>
    </div>
    <div id="reprint">
      <button class='btn btn-primary btn-lg' onclick="window.print();" name="print" style="border:none;box-shadow: 2px 2px 2px gray;"><i class="fas fa-print"></i> Print</button>
      </div>
  </main>
	

  <footer>
		Copyright &copy; <script type="text/javascript">document.write(new Date().getFullYear());</script>    <a> Sohn Mariens Hospital and Labs</a>
	</footer>
</body>
</html>
<?php include '../mydetails.php';
  }
?>
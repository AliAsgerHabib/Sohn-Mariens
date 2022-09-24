<?php ?>
<html lang="en">
<head>
  <title>Appointment Slip</title>
  <link rel="shortcut icon" href="../images/fav2.png">
  <style type="text/css">
    body
    {
      font-size: 18px!important;
    }
  </style>
  <?php
    $pname=$_REQUEST["a"];
    $fname=$_REQUEST["b"];
    $ap_date=$_REQUEST["c"];
    $ap_time=$_REQUEST["d"];
    
    include '../bootstrap.php';
    include '../head.php';
    include '../database_connect.php';
    $r1=mysqli_query($con,"select id,doc_name,departments.name from patients inner join departments on patients.department=departments.dept_id where patients.name='$pname' and fname='$fname' and app_date='$ap_date' and app_time='$ap_time'");
    if($r1)
    {
      if($rowx=mysqli_fetch_array($r1))
      {
  ?>
  <link rel="stylesheet" type="text/css" href="../styles/tag_printer.css">
</head> 

<body>
<header>
  <?php include 'header.php';?>
</header>

<main>
  <div id="back">
    <a href="patient_form_app.php" class='btn btn-secondary'><i class="fas fa-arrow-circle-left"></i> Return to Appointment Form</a>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-xs-7 col-sm-12 col-md-12 col-lg-9 box-body">
        
        <div class="row">
          <div class="heading col-sm-12" style="border-top: none;">
            <h1><img src="../images/logo.png" style="width: 120px;height: auto;"> SOHN MARIENS HOSPITAL AND LABS</h1>
          </div>
        </div>

        <div class="row">
            <div class="heading1 col-sm-12">
              <h3>Appointment Slip </h3>
            </div>
        </div>

        <div class="row">
              <div class="col-sm-4 col-md-3 col-lg-3">
                <label for="name" class="control-label label1">Appointment ID:</label>
              </div>
              <div class="col-sm-7 col-md-6 col-lg-6" style="font-size:18.5px;">
               <?php  echo $rowx[0]; ?>
            </div>
          </div>
        
        <div class="row">
            <div class="col-sm-4 col-md-3 col-lg-3">
                <label for="name" class="control-label label1">Patient Name:</label>
              </div>
              <div class="col-sm-7 col-md-6 col-lg-6">
               <span style="font-size: 18.5px;"><?php  echo $pname; ?></span>
            </div>
          </div>

          <div class="row">
              <div class="col-sm-4 col-md-3 col-lg-3">
                <label for="name" class="control-label label1">Appt Date:</label>
              </div>
              <div class="col-sm-7 col-md-3 col-lg-3">
               <?php  echo $ap_date; ?>
              </div>

              <div class="col-sm-4 col-md-3 col-lg-3">
                <label for="name" class="control-label label1">Appt Time:</label>
              </div>
              <div class="col-sm-7 col-md-3 col-lg-3">
               <?php  echo $ap_time; ?>
              </div>
          </div>

          <div class="row">
              <div class="col-sm-4 col-md-3 col-lg-3">
                <label for="name" class="control-label label1">Department:</label>
              </div>
              <div class="col-sm-7 col-md-3 col-lg-3 form-group">
               <?php  echo $rowx[2]; ?>
              </div>

              <div class="col-sm-4 col-md-3 col-lg-3 form-group">
                <label for="name" class="control-label label1">Doctor Name:</label>
              </div>
              <div class="col-sm-7 col-md-3 col-lg-3">
               <?php  echo $rowx[1]; ?>
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

<?php
      }  
    }
    else echo mysqli_error($con);    
?> 
  
</html>
<?php include '../mydetails.php';?>
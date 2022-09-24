<?php ?>
<html lang="en">
<head>
  <title>Discharge Slip</title>
  <link rel="shortcut icon" href="../images/fav2.png">
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


    @media (min-width: 576px) {
    .container{
        max-width: 92vw;
      }
      #area
      {
        overflow-x: scroll!important;
      }
      #area table
      {
        width: 170%!important;
      }
    }

    @media (min-width: 768px) {
    .container{
        max-width: 92vw;
      }
      #area
      {
        overflow-x: scroll!important;
      }
      #area table
      {
        width: 120%!important;
      }
    }

    @media (min-width: 992px) {
    .container{
        max-width: 95vw;
      }
      #area
      {
        overflow-x: scroll!important;
      }
      #area table
      {
        width: 100%!important;
      }
    }
    #sig
    {
      border:none; 
    }

    #sig th
    {
      border:none;
      
      padding-top:100px;
      
    }

    #sig td
    {
      border:none;
      
      font-weight: bold;
      text-align: center;
      font-family: for_body;
      padding-top: none;
      padding-bottom: none;
    }

    body
    {
      font-size: 18px!important;
    }
  </style>
  <?php
    $id=$_REQUEST["a"];
    include '../bootstrap.php';
    include '../head.php';
    include '../database_connect.php';
    $r1=mysqli_query($con,"select pid,pname,age,gender,departments.name,doc_name,ad_date,ad_time,ward,bno,dis_date,dis_time from admit inner join departments on admit.department=departments.dept_id where pid='$id'");
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
    <a href="discharge.php" class='btn btn-secondary'><i class="fas fa-arrow-circle-left"></i> Return to Discharge Page</a>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-12 col-lg-9 box-body">
        
        <div class="row">
          <div class="heading col-sm-12" style="border-top: none;">
            <h1><img src="../images/logo.png" style="width: 120px;height: auto;"> SOHN MARIENS HOSPITAL AND LABS</h1>
          </div>
        </div>

        <div class="row">
            <div class="heading1 col-sm-12">
              <h3>Discharge Slip </h3>
            </div>
        </div>

        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <hr style="border:2px solid black" />
          </div>
        </div>

        <div class="row">
              <div class="col-5 col-sm-4 col-md-3 col-lg-3">
                <label for="name" class="control-label label1">Admit ID:</label>
              </div>
              <div class="col-6 col-sm-7 col-md-6 col-lg-6">
               <span style="font-size: 20px;"><?php  echo $rowx[0]; ?></span>
            </div>
          </div>

        <div class="row">
            <div class="col-5 col-sm-4 col-md-3 col-lg-3">
                <label for="name" class="control-label label1">Patient Name:</label>
              </div>
              <div class="col-5 col-sm-7 col-md-6 col-lg-6">
               <span style="font-size: 20px;"><?php  echo $rowx[1]; ?></span>
            </div>
          </div>

        <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12">
                <hr style="border:2px solid black" />
              </div>
          </div>

          <div class="row">
              <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                <label for="name" class="control-label label1">Age:</label>
              </div>
              <div class="col-3 col-sm-3 col-md-3 col-lg-3">
               <?php  echo $rowx[2]; ?>
            </div>
              
              <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                <label for="name" class="control-label label1">Gender:</label>
              </div>
              <div class="col-3 col-sm-3 col-md-3 col-lg-3">
               <?php  echo $rowx[3]; ?>
              </div>
          </div>

          <div class="row">
              <div class="col-4 col-sm-4 col-md-3 col-lg-3">
                <label for="name" class="control-label label1">Department:</label>
              </div>
              <div class="col-8 col-sm-7 col-md-3 col-lg-3">
               <?php  echo $rowx[4]; ?>
              </div>
              <div class="col-4 col-sm-4 col-md-3 col-lg-3">
                <label for="name" class="control-label label1">Attending:</label>
              </div>
              <div class="col-8 col-sm-7 col-md-3 col-lg-3">
               <?php  echo $rowx[5]; ?>
              </div>
          </div>

          <div class="row">
              <div class="col-4 col-sm-4 col-md-3 col-lg-3">
                <label for="name" class="control-label label1">Admit Date:</label>
              </div>
              <div class="col-8 col-sm-7 col-md-3 col-lg-3">
               <?php  echo $rowx[6]; ?>
              </div>

              <div class="col-4 col-sm-4 col-md-3 col-lg-3">
                <label for="name" class="control-label label1">Admit Time:</label>
              </div>
              <div class="col-8 col-sm-7 col-md-2 col-lg-3">
               <?php  echo $rowx[7]; ?>
              </div>
          </div>

          <div class="row">
              <div class="col-4 col-sm-4 col-md-3 col-lg-3">
                <label for="name" class="control-label label1">Ward:</label>
              </div>
              <div class="col-8 col-sm-7 col-md-3 col-lg-3">
               <?php  echo $rowx[8]; ?>
              </div>
              
              <div class="col-4 col-sm-4 col-md-3 col-lg-3">
                <label for="name" class="control-label label1">Bed No:</label>
              </div>
              <div class="col-8 col-sm-7 col-md-3 col-lg-3">
               <?php  echo $rowx[9]; ?>
              </div>
          </div>

          <div class="row">
              <div class="col-5 col-sm-5 col-md-3 col-lg-3">
                <label for="name" class="control-label label1">Discharge Date:</label>
              </div>
              <div class="col-7 col-sm-7 col-md-3 col-lg-3">
               <?php  echo $rowx[10]; ?>
              </div>

              <div class="col-5 col-sm-5 col-md-3 col-lg-3">
                <label for="name" class="control-label label1">Discharge Time:</label>
              </div>
              <div class="col-7 col-sm-7 col-md-2 col-lg-3">
               <?php  echo $rowx[11]; ?>
              </div>
          </div>

          <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 sdiv text-center">
              <table id="sig" class="table">
                <tr>
                  <th>_________________________</th>
                  <th style="width: 1000px;"></th>
                  <th>_________________________</th>
                </tr>
                <tr>
                  <td>Signature of Attending Doctor</td>
                  <td></td>
                  <td>Signature of Patient or Medical Proxy</td>
                </tr>
              </table>
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
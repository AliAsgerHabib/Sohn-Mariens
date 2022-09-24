<!DOCTYPE html>
<html>
<head>
	<title>Print Tags</title>
  <link rel="shortcut icon" href="../images/fav2.png">
  <?php
    include ('../head.php');
    include ('../bootstrap.php');
    include ('../database_connect.php');
     	$id=$_REQUEST["x"];
      $name=$_REQUEST["a"];
      $ward=$_REQUEST["b"];
      $bed=$_REQUEST["c"];
  ?>
  <link rel="stylesheet" type="text/css" href="../styles/tag_printer.css">
  <style type="text/css">
  	.box-body
  	{
  		font-size: 18px;
  	}
  </style>
</head>
<body>
	<header>
		<?php include 'header.php';?>
	</header>
	 <div id="back">
      <a href="visitor_tag_creation.php" class='btn btn-secondary'><i class="fas fa-arrow-circle-left"></i> Return to Tag Creater</a>
    </div>

      <main>
		<div class="container">
			<div class="row">
				<div class="col-xs-7 col-sm-12 col-md-12 col-lg-9 box-body" style="margin-bottom: 10px!important;">

					<div class="row">
            <div class="heading col-sm-12" style="border-top: none;">
              <h1><img src="../images/logo.png" style="width: 120px;height: auto;"> SOHN MARIENS HOSPITAL AND LABS</h1>
            </div>
          </div>

          <div class="row">
            <div class="heading1 col-sm-12">
              <h3>Visitor Tag 1 </h3>
            </div>
          </div>

          <div class="row">
              <div class="col-sm-4 col-md-2 col-lg-2">
                <label for="name" class="control-label label1">Admit ID:</label>
              </div>
              <div class="col-sm-7 col-md-3 col-lg-3">
               <?php  echo $id; ?>
            </div>
              <div class="col-sm-4 col-md-3 col-lg-3">
                <label for="name" class="control-label label1">Patient Name:</label>
              </div>
              <div class="col-sm-7 col-md-3 col-lg-3">
          	   <?php  echo $name; ?>
          	</div>
          </div>

          <div class="row">
              <div class="col-sm-4 col-md-2 col-lg-2">
                <label for="name" class="control-label label1">Ward no:</label>
              </div>
              <div class="col-sm-7 col-md-3 col-lg-3">
          	   <?php  echo $ward; ?>
          		</div>
              <div class="col-sm-4 col-md-3 col-lg-2">
                <label for="name" class="control-label label1">Bed no:</label>
              </div>
              <div class="col-sm-7 col-md-3 col-lg-3">
          	   <?php  echo $bed; ?>
          	  </div>
          </div>

          <div class="row">
              <div class="col-sm-4 col-md-2 col-lg-2">
                <label for="name" class="control-label label1">Issue Date:</label>
              </div>
              <div class="col-sm-7 col-md-5 col-lg-3">
               <?php  echo date("Y-m-d"); ?>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 message text-center" style="padding-top: 10px;">
            * This tag must be returned during the time of patient discharge *
            </div>  
          </div>  

				</div>
			</div>
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
              <h3>Visitor Tag 2 </h3>
            </div>
          </div>

          <div class="row">
              <div class="col-sm-4 col-md-2 col-lg-2">
                <label for="name" class="control-label label1">Admit ID:</label>
              </div>
              <div class="col-sm-7 col-md-3 col-lg-3">
               <?php  echo $id; ?>
            </div>
              <div class="col-sm-4 col-md-3 col-lg-3">
                <label for="name" class="control-label label1">Patient Name:</label>
              </div>
              <div class="col-sm-7 col-md-3 col-lg-3">
          	   <?php  echo $name; ?>
          	</div>
          </div>

          <div class="row">
              <div class="col-sm-4 col-md-2 col-lg-2">
                <label for="name" class="control-label label1">Ward no:</label>
              </div>
              <div class="col-sm-7 col-md-3 col-lg-3">
          	   <?php  echo $ward; ?>
          		</div>
              <div class="col-sm-4 col-md-3 col-lg-2">
                <label for="name" class="control-label label1">Bed no:</label>
              </div>
              <div class="col-sm-7 col-md-3 col-lg-3">
          	   <?php  echo $bed; ?>
          	  </div>
          </div>

          <div class="row">
              <div class="col-sm-4 col-md-2 col-lg-2">
                <label for="name" class="control-label label1">Issue Date:</label>
              </div>
              <div class="col-sm-7 col-md-5 col-lg-3">
               <?php  echo date("Y-m-d"); ?>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 message text-center"  style="padding-top: 10px;">
            * This tag must be returned during the time of patient discharge *
            </div>  
          </div>  

				</div>
			</div>
		</div>

		<form method="post"><div id="reprint">
      <button class='btn btn-primary btn-lg' onclick="window.print();" name="print" style="border:none;box-shadow: 2px 2px 2px gray;"><i class="fas fa-print"></i> Print</button>
      </div>
    </form>

	</main>
	<footer>
		Copyright &copy; <script type="text/javascript">document.write(new Date().getFullYear());</script>    <a> Sohn Mariens Hospital and Labs</a>
	</footer>
</body>
</html>
<?php
        if(isset($_POST["print"]))
          $r=mysqli_query($con,"update admit set vistag=1 where pid='$id'"); 
      ?>
<?php include '../mydetails.php';?>
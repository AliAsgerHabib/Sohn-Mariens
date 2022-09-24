<!DOCTYPE html>
<html>
<head>
	<title>Prescription</title>
  <link rel="shortcut icon" href="../images/fav2.png">
  <?php
    include ('../head.php');
    include ('../bootstrap.php');
    include ('../database_connect.php');
    $id=$_REQUEST['a'];
  ?>
  <link rel="stylesheet" type="text/css" href="../styles/Prescription.css">
  <script type="text/javascript" src="../js/Prescription.js"></script>
  <style type="text/css">
  	#dts_btn,#pres_btn 
    {
      -webkit-transition: 0.3s ease-in-out,-webkit-transform 0.3s ease-in-out;
      -moz-transition: 0.3s ease-in-out,-moz-transform 0.3s ease-in-out;
    }
    #dts_btn:hover,#pres_btn:hover
    {
      transform: scale(1.02);
    }

    
    li
    {
      float: left;
      display: inline-block;
      margin-right: 20px;
    }

  </style>
</head>
<body>
	<header>
		<?php include 'header.php';?>
	</header>
	<main>
		<div style="text-align: center;" id="dts_sec">
			<button type="button" class=" btn btn-secondary"  onclick="dts();" style="background-color: #008080;border:#008080" id="dts_btn"> Go to Diagnostic Test Slip <i class="fas fa-arrow-circle-right"></i></button>
		</div>
		<div style="text-align: center;"  id="pres_sec">
			<button type="button" class="btn btn-secondary" onclick="pres();" style="background-color: #008080;border:#008080" id="pres_btn"><i class="fas fa-arrow-circle-left"></i> Go to Prescription </button>
		</div>
		
		<?php echo "<form action='prescription_db.php?a=$id' method='post'>";?>
			<?php include 'prescription_part.php';?>
			<?php include 'pathology_part.php';?>	
		</form>
		

	</main>
	<footer>
		Copyright &copy; <script type="text/javascript">document.write(new Date().getFullYear());</script>    <a> Sohn Mariens Hospital and Labs</a>
	</footer>
</body>
</html>
<?php include '../mydetails.php';?>
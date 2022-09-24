<!DOCTYPE html>
<html>
<head>
	<title>Print Prescription</title>
  <link rel="shortcut icon" href="../images/fav2.png">
  <?php
    include ('../head.php');
    include ('../bootstrap.php');
    include ('../database_connect.php');
    $x=$_REQUEST['a'];
  ?>
  <link rel="stylesheet" type="text/css" href="../styles/prescription.css">
  <style type="text/css">
    @media print
    {
      #back,.hname,.sb,#reprint,footer,header,#bttn,button
      {
        display: none;
      }
      body
      {
        background: none!important;
      }
    }
    .box-body
    {
    	border: 2px solid black!important;
    }
  </style>
</head>
<body>
	<header>
		<?php include 'header.php';?>
	</header>
  <style type="text/css">
  .heading,.box-body
    {
      border-top-right-radius: 00px;
      border-top-left-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
    }
</style>
	<main>
		<div style="margin-top: 17px;text-align: center;">
			<button type="button" style="margin-right: 50px;" class="btn btn-secondary" onclick="window.print()"><i class="fas fa-print"></i> Print Prescription</button>
			<a <?php echo "href='complete_app.php?a=$x'" ?>class="btn btn-primary" id="bttn">Complete Appointment</a>
		</div>
		<?php
			include 'prescription_print.php';
			include 'pathology_print.php';
		?>

	</main>
	<footer>
		Copyright &copy; <script type="text/javascript">document.write(new Date().getFullYear());</script>    <a> Sohn Mariens Hospital and Labs</a>
	</footer>
</body>
</html>
<?php include '../mydetails.php';?>
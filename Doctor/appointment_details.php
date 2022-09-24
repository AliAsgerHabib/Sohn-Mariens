<!DOCTYPE html>
<html>
<head>
	<title>My Appointments</title>
	<link rel="shortcut icon" href="../images/fav2.png">
  <?php
    include ('../head.php');
    include ('../bootstrap.php');
    include ('../database_connect.php');
  ?>
  <link rel="stylesheet" type="text/css" href="../styles/appointment_details.css">
  <style type="text/css">
  	
  </style>
  <script type="text/javascript">
		$(document).ready(function() {
    	$('#example').DataTable(
    	{
    		 "order": [[ 3, "desc" ],[ 4, "asc" ]],
    		"bLengthChange": false,
    		'columnDefs': [ {
        'targets': [0,4,5], // column index (start from 0)
        'orderable': false, // set orderable false for selected columns
     }]
    	});
	});
	</script>
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
        width: 200%!important;
      }
    }

      
    @media (min-width: 576px) {
    .container{
        max-width: 94vw;
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
        max-width: 85vw;
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

    @media (min-width: 1200px) {
    .container{
        max-width: 1000px;
      }
      #area
      {
        overflow-x: hidden!important;
      }
      #area table
      {
        width: 100%!important;
      }
    }  

    td 
    {
    	text-align: center;
    }
    td:nth-child(2)
    {
    	text-align: left;
    }
	</style>
</head>
<body>
	<header>
		<?php include 'header.php';?>
	</header>
	<main>
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12 table-body">

					<div class="row">
						<div class="heading col-sm-12">
							<img src="../images/app1.png" style="width: 90px;height: auto;"> My Appointments
						</div>	
					</div>

					<div class="row">
					<div class="col-sm-12 col-lg-12">
						<div id="area">
							<?php
		$r=mysqli_query($con,"select id,patients.name,phno,app_date,app_time,status from patients inner join departments on department=dept_id where doc_name='$dname' order by app_date desc,app_time desc");
	
	if($r)
	{
?>
<table id="example" class="table table-striped">
<thead><tr>
	<th>ID</th>
	<th>Patient Name</th>
	<th>Contact No</th>
	<th>Date</th>
	<th>Time</th>
	<th>Status</th>	
</tr></thead>
<tbody><?php
	if($r)
	{
		while($row=mysqli_fetch_array($r))
		{
			echo "<tr>";
			for($i=0;$i<5;$i++)
			{
				echo "<td>";
				echo "$row[$i]";
				echo "</td>";	
			}
			if($row[5]=='Ongoing') 
				echo "<td style='text-align:center;font-weight:bold;font-size:19px;''><a href='prescription.php?a=$row[0]' class='btn btn-primary'>Start Appointment</a>";
			else if($row[5]=='Active') 
				echo "<td style='text-align:center;font-size:18px;color:green;'>Active</td>";
			else if($row[5]=='Completed') 
				echo "<td style='text-align:center;font-size:18px;color:gray;'>Completed</td>";
				
			echo "</tr>";
		}
	}
	else echo mysqli_error($con);
	
?>
</table></tbody>
<?php
	}
	else
		echo mysqli_error($con);
?>
						</div>
					</div>
				</div>

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
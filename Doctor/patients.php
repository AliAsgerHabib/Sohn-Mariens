<!DOCTYPE html>
<html>
<head>
	<title>Patient Details</title>
	<link rel="shortcut icon" href="../images/fav2.png">
  <?php
    include ('../head.php');
    include ('../bootstrap.php');
    include ('../database_connect.php');
  ?>
  <link rel="stylesheet" type="text/css" href="../styles/appointment_details.css">
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
        width: 210%!important;
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
        width: 150%!important;
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
        width: 110%!important;
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
		#area table td:nth-child(2),#area table td:nth-child(3)
		{
			text-align: left;
		}

		#area table td
		{
			text-align: center;
		}
	</style>
	<script type="text/javascript">
		$(document).ready(function() {
    	$('#example').DataTable(
    	{
    		 "order": [[ 1, "asc" ]],
    		"bLengthChange": false,
    		'columnDefs': [ {
        'targets': [0,1,3,4], // column index (start from 0)
        'orderable': false, // set orderable false for selected columns
     }]
    	});
		});
	</script>

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
							<img src="../images/app1.png" style="width: 90px;height: auto;"> Patient Details
						</div>	
					</div>

					<div class="row">
						<div class="col-sm-12">
							<div id="area">
								<?php
									$r=mysqli_query($con,"select distinct aadno,patients.name,fname,gender,phno,status from patients inner join departments on department=dept_id where doc_name='$dname' order by app_date desc,app_time desc");
										if($r)
										{
								?>
								<table id="example" class="table table-striped" style="width:100%;">
									<thead><tr>
										<th>Aadhar No.</th>
										<th>Patient Name</th>
										<th>Father's Name</th>
										<th>Gender</th>
										<th>Phone No</th>
									</tr></thead>
									<tbody>
									<?php
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
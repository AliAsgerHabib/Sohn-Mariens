<!DOCTYPE html>
<html>
<head>
	<title>My Department</title>
  <link rel="shortcut icon" href="../images/fav2.png">
  <?php
    include ('../head.php');
    include ('../bootstrap.php');
    include ('../database_connect.php');
  ?>
  <link rel="stylesheet" type="text/css" href="../styles/doctor_schedule_reception.css">
  <style type="text/css">
  	#area table td:nth-child(1),#area table td:nth-child(2)
  	{
  		text-align: left!important;
  	}
  	#area table td
  	{
  		text-align: center;
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
        width: 240%!important;
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
        width: 140%!important;
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
        width: 120%!important;
      }
    }

    @media (min-width: 1200px) {
    .container{
        max-width: 1200px;
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

  </style>
  <script>
		$(document).ready(function()
		{
		  $('#example').DataTable(
		  {
			"order": [[ 0, "asc" ]],
			"bLengthChange": false,
			'columnDefs': [ {
			'targets': [2,3,4,5,6,7,8,9], // column index (start from 0)
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
							<img src="../images/tt.jpg" style="width: 70px;height: 70px;"> My Department Schedule
						</div>	
					</div>

					<div class="row">
						<div class="col-sm-12">
							<div id="area">
								<table id="example" class="table table-striped" style="width:100%;">
									<thead><tr>
										<th>EID&nbsp;</th>
										<th>Employee Name</th>
										<th>Position</th>
										<th>Mon</th>
										<th>Tue</th>
										<th>Wed</th>
										<th>Thurs</th>
										<th>Fri</th>
										<th>Sat</th>
										<th>Sun</th>
									</tr></thead>
									<tbody>
								<?php
										$r=mysqli_query($con,"select duties.eid, employee.Name,position,duties.Mon,duties.Tues,duties.Wed,duties.Thurs,duties.Fri,duties.Sat,duties.Sun from duties inner join employee on duties.eid=employee.ID inner join departments using(dept_id) where dept_id='$dept'");
									if($r)
									{
										while($row=mysqli_fetch_array($r))
										{
											echo "<tr>";
											for($i=0;$i<10;$i++)
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
								</tbody></table>
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
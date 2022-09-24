<!DOCTYPE html>
<html>
<head>
	<title>Home - Reception</title>
  <link rel="shortcut icon" href="../images/fav2.png">
  <?php
    include ('../head.php');
    include ('../bootstrap.php');
    include ('../database_connect.php');
    date_default_timezone_set("Asia/Kolkata");
    $date=date("Y-m-d");
    $timestamp = strtotime($date);
    $day = date('w', $timestamp);
    $days=array('Sun','Mon','Tues','Wed','Thurs','Fri','Sat');

  ?>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#example1').DataTable(
      {
         "order": [[ 1, "asc" ]],
        "bLengthChange": false,
        'columnDefs': [ {
        'targets': [3,4,5,6], // column index (start from 0)
        'orderable': false, // set orderable false for selected columns
     }]
      });
  });
  </script>
  <link rel="stylesheet" type="text/css" href="../styles/dashboard_reception.css">
  <script type="text/javascript" src="../js/dashboard.js"></script>
</head>
<body>
	<header>
		<?php include 'header.php';?>
	</header>
	<main>
		<div style="text-align: center;" id="app_btn_sec">
			<button class=" btn btn-secondary"  onclick="app();" style="background-color: #008080;border:#008080" id="app_btn"> See Today's Appointments Instead <i class="fas fa-arrow-circle-right"></i></button>
		</div>
		<div style="text-align: center;"  id="opd_btn_sec">
			<button class="btn btn-secondary" onclick="opd();" style="background-color: #008080;border:#008080" id="opd_btn"> See OPD Schedule Instead <i class="fas fa-arrow-circle-right"></i></button>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-xs-7 col-sm-12 col-md-12 col-lg-1"></div>
				<div class="col-xs-7 col-sm-12 col-md-12 col-lg-10 table-body" id="opd" style="margin-bottom: 70px;"> 

					<div class="row">
	          <div class="heading col-sm-12">
	            <img src="../images/tt.jpg" style="width: 70px;height:auto;" > OPD Details
	          </div>  
        	</div>

        	<div class="col-sm-12 col-md-12 col-lg-12" id="area">
        		<table id="example" class="table table-striped">
							<thead><tr>
							  <th>ID</th>
							  <th>Doctor's Name</th>
							  <th>Department</th>
							  <th>Position</th>
							  <th>Status</th>
							</tr></thead>
							<tbody>
							<?php
							    $r=mysqli_query($con,"select duties.eid,employee.name,Departments.name,position,isOnline from employee inner join login_users on employee.id=login_users.eid inner join duties on employee.ID=duties.eid inner join Departments using(dept_id) where duties.$days[$day]='OPD' ");
							  if($r)
							  {
							    while($row=mysqli_fetch_array($r))
							    {
							      echo "<tr>";
							      for($i=0;$i<4;$i++)
							      {
							        echo "<td>";
							        echo "$row[$i]";
							        echo "</td>";
							      }
							      if($row[4])
							        echo "<td style='text-align:center;font-size:17px;color:green;'>Doctor In</td>";
							      else echo "<td style='text-align:center;font-size:17px;color:red;'>Doctor Out</td>";
							      echo "</tr>";
							    }
							  }
							  else echo mysqli_error($con);
							  
							?>
							</tbody></table>
        	</div>

        	<div id="back">
      			<a href="doctor_schedule.php" class='btn btn-primary' style="background-color: #004747;border:#004747"><i class="fas fa-eye"></i> See the complete detail</a>
    			</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-xs-7 col-sm-12 col-md-12 col-lg-11 table-body" id="app" style="margin:auto;margin-bottom: 70px;">
					
					<div class="row">
						<div class="heading col-sm-12">
            	<img src="../images/app1.png" style="width: 70px;height:auto;" > Today's Appointments
          	</div>  
        	</div>

        	<div class="col-sm-12 col-md-12 col-lg-12" id="area">
        		<table id="example1" class="table table-striped" style="width:100%">
							<thead><tr>
						  <th>ID</th>
						  <th>Time</th>
						  <th>Patient Name</th>
						  <th>Contact No</th>
						  <th>Doctor Name</th>
						  <th>Department</th>
						  <th>Status</th>
							</tr></thead>

							<tbody>
						<?php
						    $r=mysqli_query($con,"select id,app_time,patients.name,phno,doc_name,departments.name,status from patients inner join departments on department=dept_id where app_date='$date' order by app_date desc,app_time desc");
						  if($r)
						  {
						    while($row=mysqli_fetch_array($r))
						    {
						      echo "<tr>";
						      for($i=0;$i<6;$i++)
						      {
						        echo "<td>";
						        echo "$row[$i]";
						        echo "</td>";
						      }
						      if($row[6]=='Ongoing') 
										echo "<td style='text-align:center;font-size:18px;color:#ff9900;'>Ongoing</td>";
									else if($row[6]=='Active') 
										echo "<td style='text-align:center;font-size:18px;color:green;'>Active</td>";
									else if($row[6]=='Completed') 
										echo "<td style='text-align:center;font-size:18px;color:gray;'>Completed</td>";
								
						      echo "</tr>";
						    }
						  }
						  else echo mysqli_error($con);
						  
						?>
						</tbody></table>
        	</div>
        	
        	<div id="back">
      			<a href="appointment_details.php" class='btn btn-primary' style="background-color: #004747;border:#004747"><i class="fas fa-eye"></i> See the complete detail</a>
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
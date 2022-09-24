<!DOCTYPE html>
<html>
<head>
	<title>Home - Doctor</title>
  <link rel="shortcut icon" href="../images/fav2.png">
  <?php
    include ('../head.php');
    include ('../bootstrap.php');
    include ('../database_connect.php');
  ?>
  <link rel="stylesheet" type="text/css" href="../styles/dash_doctor.css">
  
</head>
<body>
	<header>
		<?php include 'header.php';?>
	</header>
	<main>
		<?php
    date_default_timezone_set("Asia/Kolkata");
    $date=date("Y-m-d");
    $timestamp = strtotime($date);
    $day = date('w', $timestamp);
    $days=array('Sun','Mon','Tues','Wed','Thurs','Fri','Sat');
    $x=$days[$day];
  	?>
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12 table-body">

					<div class="row">
	          <div class="heading col-sm-12">
	            <img src="../images/tt.jpg" style="width: 70px;height:auto;" > My Weekly Schedule
	          </div>  
        	</div>

        	<div class="row">
        		<div class="col-lg-12" id="area">
        			<table id="example" class="table table-striped">
							<thead><tr>
							  <th width="320px">DAYS OF THE WEEK</th>
							  <th>DUTIES</th>  
							</tr></thead><tbody>
							<?php
							    $r=mysqli_query($con,"select * from duties where eid='$eid'");
							  if($r)
							  {
							    if($row=mysqli_fetch_array($r))
							    {
							      if($x=="Mon")
							      echo "<tr style='background-color:lightgreen;box-shadow:2px 2px 10px black;'>";
							    	else echo "<tr>";
							      echo "<td>Monday</td>";
							      echo "<td>$row[2]</td>";
							      echo "</tr>";
							      if($x=="Tues")
							      echo "<tr style='background-color:lightgreen;box-shadow:2px 2px 10px black;'>";
							    	else echo "<tr>";
							      echo "<td>Tuesday</td>";
							      echo "<td>$row[3]</td>";
							      echo "</tr>";
							      if($x=="Wed")
							      echo "<tr style='background-color:lightgreen;box-shadow:2px 2px 10px black;'>";
							    	else echo "<tr>";
							      echo "<td>Wednesday</td>";
							      echo "<td>$row[4]</td>";
							      echo "</tr>";
							      if($x=="Thurs")
							      echo "<tr style='background-color:lightgreen;box-shadow:2px 2px 10px black;'>";
							    	else echo "<tr>";
							      echo "<td>Thrusday</td>";
							      echo "<td>$row[5]</td>";
							      echo "</tr>";
							      if($x=="Fri")
							      echo "<tr style='background-color:lightgreen;box-shadow:2px 2px 10px black;'>";
							    	else echo "<tr>";
							      echo "<td>Friday</td>";
							      echo "<td>$row[6]</td>";
							      echo "</tr>";
							      if($x=="Sat")
							      echo "<tr style='background-color:lightgreen;box-shadow:2px 2px 10px black;'>";
							    	else echo "<tr>";
							      echo "<td>Saturday</td>";
							      echo "<td>$row[7]</td>";
							      echo "</tr>";
							      if($x=="Sun")
							      echo "<tr style='background-color:lightgreen;box-shadow:2px 2px 10px black;'>";
							    	else echo "<tr>";
							      echo "<td>Sunday</td>";
							      echo "<td>$row[8]</td>";
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
	</main>
	<footer>
		Copyright &copy; <script type="text/javascript">document.write(new Date().getFullYear());</script>    <a> Sohn Mariens Hospital and Labs</a>
	</footer>
</body>
</html>
<?php include '../mydetails.php';?>
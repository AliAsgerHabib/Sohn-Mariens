<!DOCTYPE html>
<html>
<head>
	<title>Parcel Database</title>
  <link rel="shortcut icon" href="../images/fav2.png">
  <?php
    include ('../head.php');
    include ('../bootstrap.php');
    include ('../database_connect.php');
  ?>
  <link rel="stylesheet" type="text/css" href="../styles/parcel_detail.css">

  <script type="text/javascript">
		$(document).ready(function() {
    	$('#example').DataTable(
    	{
    		 "order": [[ 0, "desc" ]],
    		"bLengthChange": false,
    		'columnDefs': [ {
        'targets': [3,4,5], // column index (start from 0)
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
							<img src="../images/parc3.jpg" style="width: 90px;height:auto;" > Parcel Database
						</div>	
					</div>

					<div class="row">
						<div class="col-sm-12" id="area">
							<table id="example" class="table table-striped">
							<thead><tr>
								<th style="width:80px;">Date</th>
								<th style="width:40px!important;">Time</th>
								<th>Sender Name</th>
								<th>Sender's Address</th>
								<th>Sent To</th>
								<th>Dispatch Status</th>
							</tr></thead>

							<tbody>
							<?php
									$r=mysqli_query($con,"select ID, adate,atime,sname,saddress,sentto,isdis,dis_date,dis_time from parcel order by adate desc,atime desc");
								if($r)
								{
									while($row=mysqli_fetch_array($r))
									{
										echo "<tr>";
										for($i=1;$i<6;$i++)
										{
											echo "<td>";
											echo "$row[$i]";
											echo "</td>";	
										}
										if($row[6]==0)
											echo "<td style='text-align:center;color:red'>Not Dispatched</td>";
										else echo "<td style='text-align:center;'>Dispatched on <strong style='color:green'>$row[7]</strong> <br> at <strong style='color:green'>$row[8]</strong></td>";
									}
								}
								else echo mysqli_error($con);
							?>
							</tbody>
						</table>
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
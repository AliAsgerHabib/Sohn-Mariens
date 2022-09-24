<!DOCTYPE html>
<html>
<head>
	<title>Ward Details</title>
  <link rel="shortcut icon" href="../images/fav2.png">
  <?php
    include ('../head.php');
    include ('../bootstrap.php');
    include ('../database_connect.php');
  ?>
  <link rel="stylesheet" type="text/css" href="../styles/ward_details.css">

  <script>
		$(document).ready(function()
		{
			$("#wno").change(function()
			{
				var values=this.value;
				$.post("ward_table.php",{ward:values},function(data)
				{
					$("#area").html(data).show();
				});
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
				<div class="col-lg-1"></div>
				<div class="col-12 col-sm-12 col-md-12 col-lg-11 table-body">

					<div class="row">
						<div class="heading col-sm-12">
							<img src="../images/ward.jpg" style="width: 88px;height: auto;"> Ward Details
						</div>	
					</div>

					<div class="row form-inline" >
						<div class="col-4 col-sm-3 col-md-2 col-lg-2">
							<span class="label1">Ward No:</span>
						</div>	
						<div class="col-4 col-sm-3">
							<select name="wno" id="wno" class="form-control w3-hover-light-gray" required style="height: 100%">
	                <option value="All">All</option>
	                <option value="Ward 1"> Ward 1</option>
	                <option value="Ward 2"> Ward 2</option>
	                <option value="Ward 3"> Ward 3</option>
	                <option value="Ward 4"> Ward 4</option>
	                <option value="Cottage Wards">Cottage Ward</option>
	              </select>
						</div>	
					</div>

					<div class="row">
						<div class="col-sm-12">
							<div id="area">
							<?php
								echo "<table class='table table-striped' >
								<thead>
									<tr>
										<th class=tname colspan=4>WARD NO. 1</th>
									</tr>
									<tr>
										<th>Bed No</th>
										<th  style='width:300px;'>Status</th>
										<th>Bed No</th>
										<th style='width:300px;'>Status</th>
									</tr>
								</thead>
								<tbody>";
			for($i=1;$i<=10;$i++)
			{
				echo "<tr>";
				echo "<td>Bed $i</td>";
				$r=mysqli_query($con,"select pname from admit where ward='Ward 1' and bno='$i' and isadmit='1'");
				if($row=mysqli_fetch_array($r))
					echo "<td style='text-align:left!important;color:purple'>Occupied by $row[0]</td>";
				else 
					echo "<td style='text-align:left!important;color:green;'>Bed Available</td>";
				$x=$i+10;
				echo "<td>Bed $x</td>";
				$r=mysqli_query($con,"select pname from admit where ward='Ward 1' and bno='$x' and isadmit='1'");
				if($row=mysqli_fetch_array($r))
					echo "<td style='text-align:left!important;color:purple'>Occupied by $row[0]</td>";
				else 
					echo "<td style='text-align:left!important;color:green;'>Bed Available</td>";
				echo "</tr>";
			}
			echo "</tbody></table>";

			echo "<table class='table table-striped' >
				<thead>
					<tr>
						<th class=tname colspan=4>WARD NO. 2</th>
					</tr>
					<tr>
						<th>Bed No</th>
						<th  style='width:300px;'>Status</th>
						<th>Bed No</th>
						<th style='width:300px;'>Status</th>
					</tr>
				</thead>
				<tbody>";
			for($i=1;$i<=10;$i++)
			{
				echo "<tr>";
				echo "<td>Bed $i</td>";
				$r=mysqli_query($con,"select pname from admit where ward='Ward 2' and bno='$i' and isadmit='1'");
				if($row=mysqli_fetch_array($r))
					echo "<td style='text-align:left!important;color:purple'>Occupied by $row[0]</td>";
				else 
					echo "<td style='text-align:left!important;color:green;'>Bed Available</td>";
				$x=$i+10;
				echo "<td>Bed $x</td>";
				$r=mysqli_query($con,"select pname from admit where ward='Ward 2' and bno='$x' and isadmit='1'");
				if($row=mysqli_fetch_array($r))
					echo "<td style='text-align:left!important;color:purple'>Occupied by $row[0]</td>";
				else 
					echo "<td style='text-align:left!important;color:green;'>Bed Available</td>";
				echo "</tr>";
			}
			echo "</tbody></table>";

			echo "<table class='table table-striped' >
				<thead>
					<tr>
						<th class=tname colspan=4>WARD NO. 3</th>
					</tr>
					<tr>
						<th>Bed No</th>
						<th  style='width:300px;'>Status</th>
						<th>Bed No</th>
						<th style='width:300px;'>Status</th>
					</tr>
				</thead>
				<tbody>";
			for($i=1;$i<=10;$i++)
			{
				echo "<tr>";
				echo "<td>Bed $i</td>";
				$r=mysqli_query($con,"select pname from admit where ward='Ward 3' and bno='$i' and isadmit='1'");
				if($row=mysqli_fetch_array($r))
					echo "<td style='text-align:left!important;color:purple'>Occupied by $row[0]</td>";
				else 
					echo "<td style='text-align:left!important;color:green;'>Bed Available</td>";
				$x=$i+10;
				echo "<td>Bed $x</td>";
				$r=mysqli_query($con,"select pname from admit where ward='Ward 3' and bno='$x' and isadmit='1'");
				if($row=mysqli_fetch_array($r))
					echo "<td style='text-align:left!important;color:purple'>Occupied by $row[0]</td>";
				else 
					echo "<td style='text-align:left!important;color:green;'>Bed Available</td>";
				echo "</tr>";
			}
			echo "</tbody></table>";

			echo "<table class='table table-striped' >
				<thead>
					<tr>
						<th class=tname colspan=4>WARD NO. 4</th>
					</tr>
					<tr>
						<th>Bed No</th>
						<th  style='width:300px;'>Status</th>
						<th>Bed No</th>
						<th style='width:300px;'>Status</th>
					</tr>
				</thead>
				<tbody>";
			for($i=1;$i<=10;$i++)
			{
				echo "<tr>";
				echo "<td>Bed $i</td>";
				$r=mysqli_query($con,"select pname from admit where ward='Ward 4' and bno='$i' and isadmit='1'");
				if($row=mysqli_fetch_array($r))
					echo "<td style='text-align:left!important;color:purple'>Occupied by $row[0]</td>";
				else 
					echo "<td style='text-align:left!important;color:green;'>Bed Available</td>";
				$x=$i+10;
				echo "<td>Bed $x</td>";
				$r=mysqli_query($con,"select pname from admit where ward='Ward 4' and bno='$x' and isadmit='1'");
				if($row=mysqli_fetch_array($r))
					echo "<td style='text-align:left!important;color:purple'>Occupied by $row[0]</td>";
				else 
					echo "<td style='text-align:left!important;color:green;'>Bed Available</td>";
				echo "</tr>";
			}
			echo "</tbody></table>";
			echo "<table class='table table-striped' >
				<thead>
					<tr>
						<th class=tname colspan=4>COTTAGE WARDS</th>
					</tr>
					<tr>
						<th>Bed No</th>
						<th  style='width:300px;'>Status</th>
						<th>Bed No</th>
						<th style='width:300px;'>Status</th>
					</tr>
				</thead>
				<tbody>";
			for($i=1;$i<=10;$i++)
			{
				echo "<tr>";
				echo "<td>Bed $i</td>";
				$r=mysqli_query($con,"select pname from admit where ward='Cottage Wards' and bno='$i' and isadmit='1'");
				if($row=mysqli_fetch_array($r))
					echo "<td style='text-align:left!important;color:purple'>Occupied by $row[0]</td>";
				else 
					echo "<td style='text-align:left!important;color:green;'>Bed Available</td>";
				$x=$i+10;
				echo "<td>Bed $x</td>";
				$r=mysqli_query($con,"select pname from admit where ward='Cottage Wards' and bno='$x' and isadmit='1'");
				if($row=mysqli_fetch_array($r))
					echo "<td style='text-align:left!important;color:purple'>Occupied by $row[0]</td>";
				else 
					echo "<td style='text-align:left!important;color:green;'>Bed Available</td>";
				echo "</tr>";
			}
			echo "</tbody></table>";
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
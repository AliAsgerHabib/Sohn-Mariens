
	<?php
		include("../database_connect.php");
		$ward=$_REQUEST["ward"];
		if ($ward=="All")
		{
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
		}

		else if($ward=="")
			echo "";

		else
		{
			echo "<table class='table table-striped' >
				<thead>
					<tr>";
			
			if($ward=="Ward 1")	echo "<th class=tname colspan=4>WARD NO. 1</th>";
			else if($ward=="Ward 2")	echo "<th class=tname colspan=4>WARD NO. 2</th>";
			else if($ward=="Ward 3")	echo "<th class=tname colspan=4>WARD NO. 3</th>";
			else if($ward=="Ward 4")	echo "<th class=tname colspan=4>WARD NO. 4</th>";
			else if($ward=="Ward 5")	echo "<th class=tname colspan=4>WARD NO. 5</th>";
			else if($ward=="Cottage Wards")	echo "<th class=tname colspan=4>COTTAGE WARDS</th>";
			



			echo		"</tr>
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
				$r=mysqli_query($con,"select pname from admit where ward='$ward' and bno='$i' and isadmit='1'");
				if($row=mysqli_fetch_array($r))
					echo "<td style='text-align:left!important;color:purple'>Occupied by $row[0]</td>";
				else 
					echo "<td style='text-align:left!important;color:green;'>Bed Available</td>";
				$x=$i+10;
				echo "<td>Bed $x</td>";
				$r=mysqli_query($con,"select pname from admit where ward='$ward' and bno='$x' and isadmit='1'");
				if($row=mysqli_fetch_array($r))
					echo "<td style='text-align:left!important;color:purple'>Occupied by $row[0]</td>";
				else 
					echo "<td style='text-align:left!important;color:green;'>Bed Available</td>";
				echo "</tr>";
			}
			echo "</tbody></table>";
		}
	?>
	







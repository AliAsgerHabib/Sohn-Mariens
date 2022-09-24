<?php
						$id=$_REQUEST['a'];
						$r=mysqli_query($con, "select Name,fname,age,gender,weight,height,App_Date,App_time,pmc,doc_name from patients where id=$id");
						if($r)
						{
							if ($row=mysqli_fetch_array($r)) 
							{
					?>

<div class="container" id="pres">
	<div class="row">
		<div class="col-7 col-sm-12 col-md-12 col-lg-9 box-body" style="margin-bottom: 5px!important;padding-bottom: 50px;">
		
			<div class="row heading">
				<div class=" col-sm-9">
          &nbsp; SOHN MARIENS HOSPITAL AND LABS
          <div class="address">
						320, Madhuban, Udaipur</br>
	          Rajasthan, India</br>
            0294-242346</br>
            help@smhospital.com              	
          </div>
        </div>

	      <div class="col-sm-3" style="text-align: right!important;">
	        <img src="../images/logo.png" style="width:140px;padding-top: 18px;">
	      </div>
			</div>

			<div class="row heading1">
				<div class="col-12">
					Prescription Slip:
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12 patient-details">
					<table id="pd">
						<tr>
							<td><span class="label1">NAME &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;</span> <?php echo "$row[0]";?></td>
							<td><span class="label1">FATHER'S NAME :&nbsp;</span> <?php echo "$row[1]";?></td>
						</tr>

						<tr>
							<td><span class="label1">AGE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp; </span> <?php echo "$row[2]";?></td>
							<td><span class="label1">GENDER &nbsp;&nbsp;:&nbsp; </span> <?php echo "$row[3]";?></td>
						</tr>

						<tr>
							<td><span class="label1">WEIGHT &nbsp;&nbsp;:&nbsp; </span> <?php echo "$row[4] kg";?></td>
							<td><span class="label1">HEIGHT &nbsp;&nbsp;&nbsp;:&nbsp; </span> <?php echo "$row[5] cm";?></td>
						</tr>

						<tr>
							<td><span class="label1">DATE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp; </span> <?php echo "$row[6]";?></td>
							<td><span class="label1">TIME &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp; </span> <?php echo "$row[7]";?></td>
						</tr>
					</table>
					<br>
					<table>
						<tr>
							<td><span  class="label1">DOCTOR NAME : &nbsp;</span><?php echo "$row[9]";?></td>
						</tr>
					</table>
				</div>
			</div>

			<hr style="margin-top: 4px;margin-bottom: 8px;">


			
			<div class="row" style="font-size:17px">
				<div class="col-12">
					<table>
            <tr>
              <td colspan="2"><span  class="label1">DIAGNOSIS : &nbsp;</span><?php $r=mysqli_query($con,"select * from medicine where apid=$x");if($row=mysqli_fetch_array($r))echo "$row[1]";?></td>
            </tr>
          </table>
				</div>
			</div>
			<br>
			

			<div class="row" style="font-size: 17px;">
				<div class="col-12">
					<b style="color: red;">Rx</b>
          <br/>
          <table id="meds">
                      <tr>
                        <th style="font-family: for_label1">MEDICINE NAME</th>
                        <th style="font-family: for_label1">FREQUENCY</th>
                        <th style='font-family: for_label1;border-right: none;'>DURATION</th>
                      </tr>
                        <?php
                         $r=mysqli_query($con,"select * from medicine where apid=$x");
                         while($row=mysqli_fetch_array($r))
                         {
                          echo "<tr>";
                          echo "<td>$row[2]. $row[3]</td>";
                          echo "<td>$row[4] per day</td>";
                          echo "<td style='border-right: none;'>For $row[5] day(s)</td>";
                          echo "</tr>";
                         }
                        ?>
                    </table>
                    <br>
				</div>
			</div>


		</div>
	</div>
</div>
<?php 
		}
	} else echo mysqli_error($con);
?>
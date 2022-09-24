<?php
						$id=$_REQUEST['a'];
						$r=mysqli_query($con, "select Name,fname,age,gender,weight,height,App_Date,App_time,pmc,doc_name from patients where id=$id");
						if($r)
						{
							while ($row=mysqli_fetch_array($r)) 
							{
					?>

<div class="container" id="pres">
	<div class="row">
		<div class="col-7 col-sm-12 col-md-12 col-lg-9 box-body">

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


			<div class="row" style="font-size: 17px;">
				<div class="col-12">
					<table style="width:100%;">
	          <tr>
	            <td class="label1" style="text-decoration: underline 3px;">PRIOR MEDICAL CONDITION:</td>
	          </tr>
            
            <?php
            	$pmc=$row[8];
            	$arr=explode("::", $pmc);
           		echo "<tr>
            	<td colspan='2'>
            	<ul>";
            	for($i=0;$i<sizeof($arr);$i++) 
            	  echo "<li>$arr[$i]</li>";
            	echo "</ul>
            	</td>
           		</tr>";
          	?>
          </table>
				</div>
			</div>

			<hr style="margin-bottom: 8px;">

			<div class="row">
				<div class="col-12">
					<table>
            <tr>
              <td colspan="2"><span  class="label1">DIAGNOSIS : &nbsp;</span><input type="text" style="width: 300px;" required name="diag"></td>
            </tr>
          </table>
				</div>
			</div>
			<br>
			

			<div class="row" style="font-size: 17px;">
				<div class="col-12">
					<b style="color: red;">Rx</b>
          <br/>
          <table id="med">
                      <tr>
                        <th style="font-family: for_label1">TYPE</th>
                        <th style="font-family: for_label1">MEDICINE NAME</th>
                        <th style="font-family: for_label1">FREQUENCY</th>
                        <th style="font-family: for_label1">DURATION</th>
                        <th style="font-family: for_label1"></th>
                      </tr>
                        <tr>
                        <td><select class="form-control" name="type[]" style="width: 100px;margin: auto;">
                          <option value="Tab">Tab</option>
                          <option value="Syr">Syr</option>
                          <option value="Cap">Cap</option>
                          <option value="Inj">Inj</option>
                          <option value="Drops">Drops</option>
                          <option value="Cream">Cream</option>
                        </select></td>
                        <td><input type="text" name="med[]"></td>
                        <td><input type="text" name="freq[]" style="width: 50px;"> per day</td>
                        <td><input type="text" name="dur[]" style="width: 50px;"> days</td>
                        <td colspan="4"><button type="button" class="btn btn-primary" id="ad" onclick="addmed()"><i class="fas fa-plus-circle"></i></button></td>
                      </tr>
                      <tr id="next"></tr>
                      <tr id="next1"></tr>
                      <tr id="next2"></tr>
                      <tr id="next3"></tr>
                      <tr id="next4"></tr>
                      <tr id="next5"></tr>
                    </table>
				</div>
			</div>

			<div class="row" style="margin-top: 20px;margin-bottom: 20px;">
        <div class="col-sm-12" style="text-align: center">
          <input type='submit' value='Save and Print' id='bttn' class='btn btn-primary'>
          <input type="reset" id="btt2" value="Cancel" name="submit-btn" id="bttn2" class="btn btn-primary btn-sm">
        </div>
      </div>


		</div>
	</div>
</div>
<?php 
		}
	} else echo mysqli_error($con);
?>
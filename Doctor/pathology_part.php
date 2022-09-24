<?php
						$id=$_REQUEST['a'];
						$r=mysqli_query($con, "select Name,fname,age,gender,weight,height,App_Date,App_time,pmc,doc_name from patients where id=$id");
						if($r)
						{
							while ($row=mysqli_fetch_array($r)) 
							{
					?>

<div class="container" id="dts">
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
					Pathology Tests:
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
							<td><span class="label1">DATE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp; </span> <?php echo "$row[6]";?></td>
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
					<table style="width: 100%!important;">
        				<tr>
	                <td><input type="checkbox" name="tests[]" value="X-Ray"> X-Ray</td>
	                <td><input type="checkbox" name="tests[]" value="MRI"> MRI</td>
	                <td><input type="checkbox" name="tests[]" value="CT-Scan"> CT-Scan</td>
	                <td><input type="checkbox" name="tests[]" value="ECG"> ECG</td>
              	</tr>

              	<tr>
                <td><input type="checkbox" name="tests[]" value="CBC"> CBC</td>
                <td><input type="checkbox" name="tests[]" value="Blood Sugar"> Blood Sugar</td>
                <td><input type="checkbox" name="tests[]" value="Blood Urea"> Blood Urea</td>
                <td><input type="checkbox" name="tests[]" value="S Creatinine"> S Creatinine</td>
              	</tr>

              	<tr>
                <td><input type="checkbox" name="tests[]" value="S Uric Acid"> S Uric Acid</td>
                <td><input type="checkbox" name="tests[]" value="S Electrolytes"> S Electrolytes</td>
                <td><input type="checkbox" name="tests[]" value="Total Cholesterol"> Total Cholesterol</td>
                <td><input type="checkbox" name="tests[]" value="CSF and Other Fluids"> CSF and Other Fluids</td>
              	</tr>

              	<tr>
                <td><input type="checkbox" name="tests[]" value="T3"> T3</td>
                <td><input type="checkbox" name="tests[]" value="T4"> T4</td>
                <td><input type="checkbox" name="tests[]" value="TSH"> TSH</td>
                <td><input type="checkbox" name="tests[]" value="PSA"> PSA</td>
              	</tr>

              	<tr>
                <td><input type="checkbox" name="tests[]" value="Vit B 12"> Vit B 12</td>
                <td><input type="checkbox" name="tests[]" value="Vit D"> Vit D</td>
                <td><input type="checkbox" name="tests[]" value="Ferretin"> Ferretin</td>
                <td><input type="checkbox" name="tests[]" value="IL-6"> IL-6</td>
              	</tr>
              	<tr>
                <td><input type="checkbox" name="tests[]" value="Platelet Count"> Platelet Count&nbsp;&nbsp;</td>
                <td><input type="checkbox" name="tests[]" value="Bleeding Count"> Bleeding Count&nbsp;&nbsp;</td>
                <td><input type="checkbox" name="tests[]" value="Clotting Count"> Clotting Count&nbsp;&nbsp;</td>
                <td><input type="checkbox" name="tests[]" value="Blood Group"> Blood Group and RH</td>
              	</tr>

              	<tr>
                <td><input type="checkbox" name="tests[]" value="Urine Microscropy"> Urine Microscropy</td>
                <td><input type="checkbox" name="tests[]" value="Small Biopsy"> Small Biopsy</td>
                <td><input type="checkbox" name="tests[]" value="Large Biopsy"> Large Biopsy</td>
                <td><input type="checkbox" name="tests[]" value="PAPS Smear"> PAP'S Smear</td>
              	</tr>

              	<tr>
                <td><input type="checkbox" name="tests[]" value="Sputum Cytology"> Sputum Cytology</td>
                <td><input type="checkbox" name="tests[]" value="Urine Cytology"> Urine Cytology</td>
                <td><input type="checkbox" name="tests[]" value="CSF Cytology"> CSF Cytology</td>
                <td><input type="checkbox" name="tests[]" value="TEC/VEC"> TEC/VEC</td>
              	</tr>
              </table>
				</div>
			</div>
			<br>
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
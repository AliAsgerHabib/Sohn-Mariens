<?php
						$id=$_REQUEST['a'];
						$r=mysqli_query($con, "select Name,fname,age,gender,weight,height,App_Date,App_time,pmc,doc_name from patients where id=$id");
						if($r)
						{
							while ($row=mysqli_fetch_array($r)) 
							{
					?>

<div class="container" id="dts" style="display: block;">
	<div class="row">
		<div class="col-7 col-sm-12 col-md-12 col-lg-9 box-body" >

  
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
					<table style="width: 120%!important">
						<tr>
						<ol><?php
						$r=mysqli_query($con,"select test from tests where pid=$id");
						while($row=mysqli_fetch_array($r))
						{
							$tests=$row[0];
							$arr=explode("::", $tests);
							for($i=0;$i<sizeof($arr)-1;$i++)
							{
								if(($i%4==0)&&($i!=0)) echo "</tr><tr>";
								echo "<td><li>",$arr[$i],"</li></td>";
								
							}
						}
						
					?>
					</ol>
				</tr>
				</table>
				</div>
			</div>

			<br>
			
		</div>
	</div>
</div>
<?php 
		}
	} else echo mysqli_error($con);
?>

<?php
	include ('../database_connect.php');
	$doc=$_REQUEST["doc"];
	$date=$_REQUEST["date"];
	$r=mysqli_query($con,"select app_time from patients where app_date='$date' and doc_name='$doc'");
	$l=0;
	$arr=array('0' => 0 );
	while($row=mysqli_fetch_array($r))
	{
		$arr[$l]=$row[0];
		$l++;
	}
?>
	<select name="ap_time" required class="form-control w3-hover-light-gray">
		<option value="">--:--</option>
		<optgroup label="Morning">
			<?php
			for($i=10;$i<13;$i++)
			{	
				for($j=0;$j<60;$j+=15)
				{
					if($j==0)
						$k=$j."0";
					else $k=$j;
					$t=$i.":".$k;
					$v=$i.":".$k.":00";
					if(!in_array($v,$arr))
						echo "<option value='$v'>$t</option>";
				}	
			}
		echo "</optgroup><optgroup label='Evening'>";	
			for($i=14;$i<17;$i++)
			{	
				for($j=0;$j<60;$j+=15)
				{
					if($j==0)
						$k=$j."0";
					else $k=$j;
					$t=$i.":".$k;
					$v=$i.":".$k.":00";
					if(!in_array($v,$arr))
						echo "<option value='$v'>$t</option>";
				}	
			}
			
		?>
	</optgroup>
	</select>
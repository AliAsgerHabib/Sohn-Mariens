<style type="text/css">
  .error1
  {
    color:red;
    font-size: 18px;
    margin-top: 20px;
    text-align: center;
  }
  
</style>
<?php
	include ('../database_connect.php');
	$id=$_REQUEST["id"];
  if($id=='')
  {
    ?>
  <div id="det"><div class="row">
          <div class="col-3 col-sm-3 col-md-3 col-lg-3">
            <label class="control-label label1 " for="pname">Name:</label>
          </div>  
          <div class="col-6 col-sm-6 col-md-6 col-lg-6">
          </div>
        </div>
          
        
          <div class="row"> 
            <div class="col-3 col-sm-3 col-md-3 col-lg-3">
              <label class="control-label label1" for="Age">Ward No:</label>
            </div>
            <div class="col-3 col-sm-3 col-md-3 col-lg-2"> 
              
            </div>
            <div class="col-3 col-sm-3 col-md-3 col-lg-3">
              <label class="control-label label1" for="GENDER">Bed No:</label>
            </div>
            
          </div></div>
  <?php
  }
  else {
  

  $r1=mysqli_query($con,"select pname,ward,bno,vistag,isadmit from admit where pid='$id'");
	if($r1)
	{
?>
	<?php
		if($row=mysqli_fetch_array($r1))	
		{	
	?>		
	
        <div class="row">
          <div class="col-3 col-sm-3 col-md-3 col-lg-2">
            <label class="control-label label1 " for="pname">Name:</label>
          </div>  
          <div class="col-6 col-sm-6 col-md-6 col-lg-6">
            <?php echo "$row[0]";?> 
          </div>
        </div>
          
        
          <div class="row"> 
            <div class="col-3 col-sm-3 col-md-3 col-lg-2">
              <label class="control-label label1" for="Age">Ward No:</label>
            </div>
            <div class="col-3 col-sm-3 col-md-3 col-lg-5"> 
              <?php echo "$row[1]";?>
            </div>
            <div class="col-3 col-sm-3 col-md-3 col-lg-2">
              <label class="control-label label1" for="GENDER">Bed No:</label>
            </div>
            <div class="col-3 col-sm-3 col-md-3">
              <?php echo "$row[2]";?>
            </div>
          </div>

          <?php
            if(!$row[4])
            {
          ?>
          <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 error1 text-center">
            * Patient Already Discharged *
            </div>  
          </div>

          <?php
            }
            else if($row[3])
            {
          ?>
          <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 error1 text-center">
            * Visitor tags already issued for this patient *
            </div>  
          </div>
          <?php
            }
            else
            {
          ?>
          <div class="row" style="margin-top: 20px;margin-bottom: 20px;">
            <div class="col-sm-12" style="text-align: center">
              <?php echo "<a href='tag_printer.php?x=$id & a=$row[0] & b=$row[1] & c=$row[2]' id='bttn' class='btn btn-primary'>Print</a>";?>
              <input type="reset" id="btt2" value="Cancel" name="submit-btn" id="bttn2" class="btn btn-primary btn-sm">
            </div>
          </div>

          
	<?php	
	}	}
		else echo "<div class='row'>
          <div class='col-sm-12 col-md-12 col-lg-12 error1 text-center'>
            * Invalid ID *
            </div>  
          </div>";
  }
	?>

<?php
}
?>
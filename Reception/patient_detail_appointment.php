<style type="text/css">
	.error
	{
    color:red;
    font-size: 20px;
    padding-bottom:10px;
    padding-left: 350px; 
    margin: auto;
    text-align: center;
  }
</style>
<?php
	include ('../database_connect.php');
	$id=$_REQUEST["id"];
  if($id=='')
  {
    ?>
        <div class="row">
          <div class="col-5 col-sm-4 col-md-3 col-lg-3 form-group">
            <label class="control-label label1 " for="pname">Name:</label>
          </div>  
          <div class="col-6 col-sm-6 col-md-4 col-lg-5 form-group">
            <input type="text" maxlength="25" name="pname" id="pname" placeholder="Enter name here" required class="form-control w3-input w3-hover-light-gray w3-animate-input" style="width:97%">
          </div>
        </div>
          
        <div class="row">
          <div class="col-5 col-sm-4 col-md-3 col-lg-3 form-group">
             <label class="control-label label1" for="fname">Father's Name:</label>
          </div>
          <div class="col-6 col-sm-6 col-md-4 col-lg-5 form-group">  
            <input type="text" maxlength="25" name="fname" placeholder="Enter name here" required class="form-control w3-animate-input w3-hover-light-gray" style="width:97%">
          </div>
        </div>

          <div class="row"> 
            <div class="col-5 col-sm-4 col-md-3 col-lg-3 form-group">
              <label class="control-label label1" for="Age">Age:</label>
            </div>
            <div class="col-6 col-sm-3 col-md-4 col-lg-2 form-group"> 
              <input type="number" step="any" min=0 name="age" placeholder="0 yrs" required class="form-control w3-hover-light-gray w3-animate-input" style="width:97%">
            </div>
          </div>

          <div class="row">    
            <div class="col-5 col-sm-4 col-md-3 col-lg-3 form-group">
              <label class="control-label label1" for="GENDER">Gender:</label>
            </div>
            <div class="col-7 col-sm-8  form-group">
                <input type="radio" class="w3-radio" name="gender" value="Male" required> Male
                <input type="radio" class="w3-radio" name="gender" value="Female"> Female
                <input type="radio" name="gender" class="w3-radio" value="Others"> Others
            </div>
          </div>

          <div class="row">  
            <div class="col-5 col-sm-4 col-md-3 col-lg-3 form-group">
              <label class="control-label label1" for="Weight">Weight:</label>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 form-group">   
              <input type="number" step="any" name="weight" placeholder='0.0 kg' required class="form-control w3-hover-light-gray w3-animate-input" style="width:97%">
            </div>  
            <div class="col-5 col-sm-5 col-md-3 col-lg-3  form-group text-right">
              <label class="control-label label1" for="Height">Height:</label>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-3 col-xl-2 from-control"> 
              <input type="number" step="any" name="height" placeholder='0.0 cm' required class="form-control w3-hover-light-gray w3-animate-input" style="width:97%">
            </div>
          </div>
  <?php
  }else {
  

  $r1=mysqli_query($con,"select name,fname,gender from patients where aadno='$id'");
	if($r1)
	{
?>
	<?php
		if($row=mysqli_fetch_array($r1))	
		{	
	?>		
    <div class="row">
          <div class="col-5 col-sm-4 col-md-3 col-lg-3 form-group">
            <label class="control-label label1 " for="pname">Name:</label>
          </div>  
          <div class="col-6 col-sm-6 col-md-4 col-lg-5 form-group">
            <input type="text" maxlength="25" name="pname" id="pname" <?php echo "value='$row[0]' readonly";?> placeholder="Enter name here" required class="form-control w3-input w3-hover-light-gray w3-animate-input" style="width:97%">
          </div>
        </div>
          
        <div class="row">
          <div class="col-5 col-sm-4 col-md-3 col-lg-3 form-group">
             <label class="control-label label1" for="fname">Father's Name:</label>
          </div>
          <div class="col-6 col-sm-6 col-md-4 col-lg-5 form-group">  
            <input type="text" maxlength="25" name="fname" <?php echo "value='$row[1]' readonly";?> placeholder="Enter name here" required class="form-control w3-animate-input w3-hover-light-gray" style="width:97%">
          </div>
        </div>

          <div class="row"> 
            <div class="col-5 col-sm-4 col-md-3 col-lg-3 form-group">
              <label class="control-label label1" for="Age">Age:</label>
            </div>
            <div class="col-6 col-sm-3 col-md-4 col-lg-2 form-group"> 
              <input type="number" step="any" min=0 name="age" placeholder="0 yrs" required class="form-control w3-hover-light-gray w3-animate-input" style="width:97%">
            </div>
          </div>

          <div class="row">    
            <div class="col-5 col-sm-4 col-md-3 col-lg-3 form-group">
              <label class="control-label label1" for="GENDER">Gender:</label>
            </div>
            <div class="col-7 col-sm-8 col-sm-8 form-group">
                <input type="radio" class="w3-radio" <?php if($row[2]=='Male') echo "checked";?> name="gender" value="Male" required> Male
                <input type="radio" class="w3-radio"  <?php if($row[2]=='Female') echo "checked";?> name="gender" value="Female"> Female
                <input type="radio"  <?php if($row[2]=='Others') echo "checked";?> name="gender" class="w3-radio" value="Others"> Others
            </div>
          </div>

          <div class="row">  
            <div class="col-5 col-sm-4 col-md-3 col-lg-3 form-group">
              <label class="control-label label1" for="Weight">Weight:</label>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2  form-group">   
              <input type="number" step="any" name="weight" placeholder='0.0 kg' required class="form-control w3-hover-light-gray w3-animate-input" style="width:97%">
            </div>  
            <div class="col-5 col-sm-5 col-md-3 col-lg-3  form-group text-right">
              <label class="control-label label1" for="Height">Height:</label>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-3 col-xl-2 from-control"> 
              <input type="number" step="any" name="height" placeholder='0.0 cm' required class="form-control w3-hover-light-gray w3-animate-input" style="width:97%">
            </div>
          </div>
	<?php	
		}
		else 
    {
      ?>
      <div class="row">
          <div class="col-sm-4 col-md-3 col-lg-3 form-group">
            <label class="control-label label1 " for="pname">Name:</label>
          </div>  
          <div class="col-sm-6 col-md-4 col-lg-5 form-group">
            <input type="text" maxlength="25" name="pname" id="pname" placeholder="Enter name here" required class="form-control w3-input w3-hover-light-gray w3-animate-input" style="width:97%">
          </div>
        </div>
          
        <div class="row">
          <div class="col-sm-4 col-md-3 col-lg-3  form-group">
             <label class="control-label label1" for="fname">Father's Name:</label>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-5  form-group">  
            <input type="text" maxlength="25" name="fname" placeholder="Enter name here" required class="form-control w3-animate-input w3-hover-light-gray" style="width:97%">
          </div>
        </div>

          <div class="row"> 
            <div class="col-sm-4 col-md-3 col-lg-3 form-group">
              <label class="control-label label1" for="Age">Age:</label>
            </div>
            <div class="col-sm-3 col-md-4 col-lg-2 form-group"> 
              <input type="number" step="any" min=0 name="age" placeholder="0 yrs" required class="form-control w3-hover-light-gray w3-animate-input" style="width:97%">
            </div>
          </div>

          <div class="row">    
            <div class="col-sm-4 col-md-3 col-lg-3 form-group">
              <label class="control-label label1" for="GENDER">Gender:</label>
            </div>
            <div class="col-sm-8 form-group">
                <input type="radio" class="w3-radio" name="gender" value="Male" required> Male
                <input type="radio" class="w3-radio" name="gender" value="Female"> Female
                <input type="radio" name="gender" class="w3-radio" value="Others"> Others
            </div>
          </div>

          <div class="row">  
            <div class="col-sm-4 col-md-3 col-lg-3 form-group">
              <label class="control-label label1" for="Weight">Weight:</label>
            </div>
            <div class="col-sm-4 col-md-2 col-lg-2 form-group">   
              <input type="number" step="any" name="weight" placeholder='0.0 kg' required class="form-control w3-hover-light-gray w3-animate-input" style="width:97%">
            </div>  
            <div class="col-sm-5 col-md-3 col-lg-3 form-group text-right">
              <label class="control-label label1" for="Height">Height:</label>
            </div>
            <div class="col-sm-4 col-md-2 col-lg-2 from-control"> 
              <input type="number" step="any" name="height" placeholder='0.0 cm' required class="form-control w3-hover-light-gray w3-animate-input" style="width:97%">
            </div>
          </div>
    <?php  
    }
  }
	?>

<?php
}
?>
<style type="text/css">
	#pp
	{
		width: 70px;
		height: 90px;
		border:0.5px solid black;
	}
	.delete
	{
		margin-top: 20px;
		text-align: center;
		vertical-align: middle;
	}
</style>

<script type="text/javascript">
    $(document).ready(function() {
      $('#example').DataTable(
      {
         "order": [[ 1, "asc" ]],
        "bLengthChange": false,
        'columnDefs': [ {
        'targets': [0,4,5], // column index (start from 0)
        'orderable': false, // set orderable false for selected columns
     }]
      });
  });
</script>

<form action="delete_all.php" method="post">
<table class="table table-striped" id="example" style="width:100%;">
<thead><tr>
	<th><i class='fas fa-check-square' style='font-size: 24px;'></i></th>
	<th>EID</th>
	<th>Full Name</th>
	<th>User ID</th>
	<th>Department</th>
	<th>Actions</th>
	
	
</tr></thead><tbody>
<?php
	include("../database_connect.php");
	$dept=$_REQUEST["dept"];
	if($dept=="All")
		$r=mysqli_query($con,"select employee.ID, employee.name, username,departments.name from employee inner join login_users on employee.id=login_users.eid inner join departments USING(dept_id)");
	else 
		$r=mysqli_query($con,"select employee.ID, employee.name,username, departments.name from employee inner join login_users on employee.id=login_users.eid inner join departments USING(dept_id) where dept_id='$dept'");
	if($r)
	{
		while($row=mysqli_fetch_array($r))
		{
			echo "<tr>";
			echo "<td style='text-align:center;'><input type='checkbox' style='width:16px!important;height:auto!important;margin-left:0px!important;' name='chk[]' value=$row[0]></td>";
			for($i=0;$i<4;$i++)
			{
				echo "<td>";
				echo "$row[$i]";
				echo "</td>";	
			}
			echo "<td style='text-align:center'><a href='delete.php?a=$row[0]' title='Delete ID' id='del' class='btn btn-primary'><i  class='fas fa-trash-alt' style='font-size: 20px;'></i> Delete</td>";
			echo "</tr>";
		}
	}
	else echo mysqli_error($con);
	
?>
</tbody></table>
<div class="delete">
	<input type="submit" value="Delete Selection" name="del" class="btn btn-secondary" style="background-color: red;border:red;">
</div>
</form>
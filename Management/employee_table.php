<style type="text/css">
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
        'targets': [0,3,4,5,6,7], // column index (start from 0)
        'orderable': false, // set orderable false for selected columns
     }]
      });
  });
  </script>
<form action="delete_employee_all.php" method="post">
<table class="table table-striped" id="example" style="width:100%;">
<thead><tr>
	<th><i class='fas fa-check-square' style='font-size: 24px;'></i></th>
	<th>EID</th>
	<th>Employee Name</th>
	<th>Department</th>
	<th>Position</th>
	<th>Mobile No</th>
	<th>Email</th>
	<th>Actions</th>
</tr></thead><tbody>
<?php
	include("../database_connect.php");
	$dept=$_REQUEST["dept"];
	if($dept=="All")
		$r=mysqli_query($con,"select ID, employee.name, departments.name,position,mob,email from employee inner join departments USING(dept_id)");
	else 
		$r=mysqli_query($con,"select ID, employee.name, departments.name,position,mob,email from employee inner join departments USING(dept_id) where dept_id='$dept'");
	if($r)
	{
		while($row=mysqli_fetch_array($r))
		{
			echo "<tr>";
			echo "<td><input type='checkbox' style='width:16px!important;height:auto!important;margin-left:5px!important;' name='chk[]' value=$row[0]></td>";
			echo "<td>$row[0]</td>";
			echo "<td style='text-align:left'>$row[1]</td>";
			for($i=2;$i<6;$i++)
			{
				echo "<td>";
				echo "$row[$i]";
				echo "</td>";	
			}
			echo "<td><table id='intab'>
					<tr>
						<td><a href='emp_file.php?a=$row[0]' class=''><i title='Show Complete' class='fas fa-file' style='font-size: 24px;'></i></td>
						<td><a href='change_emp.php?a=$row[0]'><i title='Update Record' class='fas fa-edit' style='font-size: 20px;'></i></td>
						<td><a href='delete_employee.php?a=$row[0]' class='' id='del'><i title='Delete Record' class='fas fa-trash-alt' style='font-size: 20px;'></i></td>
					</tr>
				</table></td>";
			echo "</tr>";
		}
	}
	else echo mysqli_error($con);
	
?>
</tbody></table>
<div class="delete">
	<input type="submit" value="Delete Selection" name="del" class="btn btn-secondary" style="background-color: red;border:red!important;">
</div>
</form>


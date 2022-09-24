<link rel="stylesheet" type="text/css" href="../styles/mydetails.css">
<?php
  $r=mysqli_query($con,"select employee.name,photo,departments.Name,position from employee inner join departments using(dept_id)  where ID='$eid'");
  $r1=mysqli_query($con,"select username from login_users where eid='$eid'");  
?>
<div class="bg-modal">
  <div class="modal-content">
    <div class="close-button">+</div>
    <?php  
      if($row=mysqli_fetch_array($r))
      {
        echo '<img src="../upload/',$row[1],'" id="image">';
        echo '<div id="name">',$row[0],"</div>";
        if($row1=mysqli_fetch_array($r1))
          echo '<div id="emp_id">',$row1[0],"</div>";
        echo '<div id="emp_id">',"Employee ID:",$eid,"</div>";
        echo "<br>";
        echo '<div id="depp">',$row[2],"</div>";
        echo '<div id="posi">',$row[3],"</div>";
      }
      else echo mysqli_error($con);
    ?>
    <div><button type="button" class="btne2" onclick="location.href=' <?php echo "cpu.php?id=$eid";?>'"><i class="fas fa-key"></i> Change Password</button></div>
    <div><button type="button" class="btne" onclick="location.href='../logout.php'"><i class="fas fa-power-off"></i> Logout</button></div>
  </div>
  </div>
  <script type="text/javascript">
    document.querySelector("#user-name").addEventListener('click',function()
      {
        document.querySelector('.bg-modal').style.display="flex";
      });
    document.querySelector(".close-button").addEventListener('click',function()
      {
        document.querySelector('.bg-modal').style.display="none";
      });
  </script>
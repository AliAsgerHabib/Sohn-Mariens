<link rel="stylesheet" type="text/css" href="../styles/header.css">
<?php
    include ('../database_connect.php');
    session_start();
    if(!isset($_SESSION["eid"]))
    {
      header("location:../index.php");
    }
    else if($_SESSION["dept"]!='IT')
      header("location:../index.php");
    $eid=$_SESSION["eid"];
    $r=mysqli_query($con,"select name from employee where id='$eid'");
  ?>

  <div class="hname">
    <img src="../images/logo.png" id="logo" style="width: 120px;height: auto;"> SOHN MARIENS HOSPITAL AND LABS
  </div>  

<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
  <button onclick="w3_close()" class="w3-bar-item closer w3-large">Close &times;</button>
  <a href="dashboard.php" class="w3-bar-item w3-button"><i class="fas fa-home"></i> Home</a>
  <a href="create_user.php" class="w3-bar-item w3-button"><i class="fas fa-user-plus"></i> &nbsp;Create User</a>
  <a href="enable_user.php" class="w3-bar-item w3-button"><i class="fas fa-user-lock"></i> &nbsp;Enable/Disable Users</a>
  <a href="reset_password.php" class="w3-bar-item w3-button"><i class="fas fa-unlock-alt"></i> &nbsp;Reset Password</a>
  <a href="delete_user.php" class="w3-bar-item w3-button"><i class="fas fa-user-times"></i> &nbsp;Delete User</a>
</div>

<!-- Page Content -->
<div class="sb">
  <table>
    <tr>
      <td><button class="w3-button w3-large" onclick="w3_open()">☰</button></td>
      <td id="dc" style="width: 480px;text-align: center;"><span id="date"></span> <span id="day"></span></td>
      <td id="cc" style="width: 570px;text-align: center;"><span id="clock">00:00:00</span></td>
      <td id="uname"><?php if($row=mysqli_fetch_array($r)) echo "<span id='user-name'><i class='fas fa-user'></i>  $row[0]</span>"; ?></td>
      <td class="logout" ><button title="Logout" class="w3-button w3-xlarge" id="lo" onclick="location.href='../logout.php'"><i class="fas fa-power-off"></i> </button></td>
    </tr>
  </table>
  
  <script type="text/javascript">
    setInterval(showTime, 1000); 
    function showTime()
    {
      let time=new Date();
      var days = ['SUN', 'MON', 'TUES', 'WED', 'THURS', 'FRI', 'SAT'];
      var dayName = days[time.getDay()];
      document.getElementById("day").innerHTML = dayName;
      document.getElementById("date").innerHTML = time.toLocaleDateString();
      let hour = time.getHours(); 
      let min = time.getMinutes(); 
      let sec = time.getSeconds(); 
      am_pm = "AM"; 
      
      if (hour > 12) 
      { 
        hour -= 12; 
        am_pm = "PM"; 
      } 
      else if (hour == 0) 
      { 
        hour = 12; 
        am_pm = "AM"; 
      } 
      
      else if (hour == 12) 
      { 
        hour = 12; 
        am_pm = "PM"; 
      } 
      
      hour = hour < 10 ? "0" + hour : hour; 
      min = min < 10 ? "0" + min : min; 
      sec = sec < 10 ? "0" + sec : sec; 
    
      let currentTime = hour + ":" + min +' '+ am_pm; 
      document.getElementById("clock").innerHTML = currentTime;
    }
    showTime();
  </script>
  
</div>

<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>


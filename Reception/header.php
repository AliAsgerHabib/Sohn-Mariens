
<link rel="stylesheet" type="text/css" href="../styles/header.css">
<?php
    include ('../database_connect.php');
    session_start();
    if(!isset($_SESSION["eid"]))
    {
      header("location:../index.php");
    }
    else if($_SESSION["dept"]!='Reception')
      header("location:../index.php");
    $eid=$_SESSION["eid"];
    $r=mysqli_query($con,"select name from employee where id='$eid'");
  ?>

  <div class="hname">
    <img id="logo" src="../images/logo.png" style="width: 120px;height: auto;"> SOHN MARIENS HOSPITAL AND LABS
  </div>  

<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
  <button onclick="w3_close()" class="w3-bar-item closer w3-large">Close &times;</button>
  <a href="dashboard.php" class="w3-bar-item w3-button"><i class="fas fa-home"></i> Home</a>
  <a href="patient_form_app.php" class="w3-bar-item w3-button"><i class="fas fa-calendar-check"></i> &nbsp;Appointment</a>
  <a href="patient_form_admit.php" class="w3-bar-item w3-button"><i class="fas fa-procedures"></i> &nbsp;Admission</a>
  <a href="discharge.php" class="w3-bar-item w3-button"><i class="fas fa-heart"></i> &nbsp;Discharge</a>
  <a href="parcel_form.php" class="w3-bar-item w3-button"><i class="fas fa-truck"></i> &nbsp;Parcel</a>
  <a href="visitor_tag_creation.php" class="w3-bar-item w3-button"><i class="fas fa-users"></i> &nbsp;Visitor Creation</a>
  <a href="visitor_tag_reclaim.php" class="w3-bar-item w3-button"><i class="fas fa-user-friends"></i> &nbsp;Reclaim Tags</a>
   <a href="doctor_schedule.php" class="w3-bar-item w3-button"><i class="fas fa-calendar-alt"></i> &nbsp;Doctor's Schedules</a>
  <a href="appointment_details.php" class="w3-bar-item w3-button"><i class="fas fa-calendar-check"></i> &nbsp;Appt. Details</a>
  <a href="admit_details.php" class="w3-bar-item w3-button"><i class="fas fa-bed"></i> &nbsp;Admit Details</a>
  <a href="parcel_details.php" class="w3-bar-item w3-button"><i class="fas fa-box-open"></i> &nbsp;Parcel Details</a>
  <a href="ward_details.php" class="w3-bar-item w3-button"><i class="fas fa-procedures"></i> &nbsp;Ward Details</a>
</div>
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


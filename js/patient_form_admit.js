$(document).ready(function()
{
      // This is to get the patient details from pid
      // ===============================================

      $("#pid").change(function()
      {
        var values=$("#pid").val();
        $.post("patient_detail_admit.php",{id:values},function(data)
        {
          $("#det").html(data).show();
        });
      });
//-------------------------------------------------------------------------
      
      // This is to get the doctor name
      //==================================
      
      $("#dept").change(function()
      {
        var values=$("#dept").val();
        $.post("get_doctor_admit.php",{dept:values},function(data)
        {
          $("#dname").html(data).show();
        });
      });
//-------------------------------------------------------------------------
      
      $("#wno").change(function()
      {
        $("#bno").val("");
      });

      // This is to check for bed availability
      //=======================================

     $("#bno").change(function()
      {
        var x=$("#wno").val();
        var y=$("#bno").val();
        $.post("check_bed.php",{ward:x,bed:y},function(data)
        {
          if(data=="true"||data=="false")
          {
            if(data=="true")
            {
              $("#msg").html("* Bed Already Occupied *").show();
              document.getElementById("bttn").disabled=true;
            }
            else
            {
              $("#msg").html("").show();
              document.getElementById("bttn").disabled=false; 
            }
          } 
          else
            $("#msg").html(data).show();
        });
      });
});
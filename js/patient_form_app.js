$(document).ready(function()
    {
      // For getting patient's details
      //================================
      $("#aadno").change(function()
      {
        var values=$("#aadno").val();
        $.post("patient_detail_appointment.php",{id:values},function(data)
        {
          $("#det").html(data).show();
        });
      });

//----------------------------------------------------------------------------------------------
      // For checking doctor's schedule
      //=================================
      $("#dept").change(function()
      {
        var values=$("#dept").val();
        var x=$("#ap_date").val();
        var days = ['Sun', 'Mon', 'Tues', 'Wed', 'Thurs', 'Fri', 'Sat'];
        var d = new Date(x);
        var dayName = days[d.getDay()];
        $.post("get_doctor_appointment.php",{dept:values,day:dayName},function(data)
        {
          $("#dname").html(data).show();
        });
      });

      $("#ap_date").change(function()
      {
        var values=$("#dept").val();
        var x=$("#ap_date").val();
        var days = ['Sun', 'Mon', 'Tues', 'Wed', 'Thurs', 'Fri', 'Sat'];
        var d = new Date(x);
        var dayName = days[d.getDay()];
        $.post("get_doctor_appointment.php",{dept:values,day:dayName},function(data)
        {
          $("#dname").html(data).show();
        });
      });
//----------------------------------------------------------------------------------------------
      // For payment mode: 
      //===================

      $("#Cash").click(function()
      {
      	var values=this.value;
      	var y="";
      	var x="";
      	$("#lab").html(y).show();
      	$("#sect").html(x).show();

      });

      $("#Cheque").click(function()
      {
      	var values=this.value;
      	var y="Cheque No:";
      	var x="<input type='text' name='chq_no' required class='form-control w3-input w3-hover-light-gray w3-animate-input' placeholder='Enter Cheque No'>";
      	$("#lab").html(y).show();
      	$("#sect").html(x).show();
      	
      });

      $("#CD").click(function()
      {
      	var y="Card Holder Name:";
      	var values=this.value;
      	var x="<input type='text' name='acc_name' required class='form-control w3-input w3-hover-light-gray w3-animate-input' placeholder='Enter Name'>";
      	$("#lab").html(y).show();
      	$("#sect").html(x).show();
      	
      });

      $("#UPI").click(function()
      {
      	var y="UPI ID:";
      	var x="<input type='text' name='upi' required class='form-control w3-input w3-hover-light-gray w3-animate-input' placeholder='Enter UPI ID'>";
      	$("#lab").html(y).show();
      	$("#sect").html(x).show();
      });

});

function discount_calc(x){
      if(x=="0")
      {
        document.getElementById("discountper").readOnly=true;
        document.getElementById("discountper").value=0; 
      } 
      
      else if(x=="1")
      {
        document.getElementById("discountper").readOnly=true;
        document.getElementById("discountper").value=10;
      }

      else if(x=="2")
      {
        document.getElementById("discountper").readOnly=true;
        document.getElementById("discountper").value=20;
      }
      
      else if(x=="3")
      {
        document.getElementById("discountper").readOnly=true;
        document.getElementById("discountper").value=15;
      }

      else if(x=="4")
      {
        document.getElementById("discountper").readOnly=true;
        document.getElementById("discountper").value=15;
      }
      
      else if(x=="5")
        document.getElementById("discountper").readOnly=false;
    }

    function amtcalc()
    {
      var x=document.getElementById("discountper").value /100;
      x=x*document.getElementById("fees").value;
      x=document.getElementById("fees").value-x;
      document.getElementById("amount").value=x;
    }
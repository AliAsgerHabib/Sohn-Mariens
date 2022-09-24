function picValidation(x,y)
{
	var preview=y;
  document.getElementById(preview).innerHTML='';
  var fileInput=x;
  var filePath=fileInput.value;
  var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
  if(fileInput.files.length < 1) 
  {
    return;
  }  
  if (!allowedExtensions.exec(filePath)) 
	{ 
  	alert('Invalid file type'); 
    fileInput.value = ''; 
    return false; 
  }
  else
  {
    sizeValidation(fileInput);
    // Image preview 
    if (fileInput.files && fileInput.files[0])
    { 
     	var reader = new FileReader(); 
     	reader.onload = function(e) 
      { 
        document.getElementById(preview).innerHTML='<img src="' + e.target.result + '" style=" height:125px; border:2px solid black;"/>'; 
      }; 
      reader.readAsDataURL(fileInput.files[0]); 
    } 
  }
}




//-------------------------------------------------------------------------------------------------------------------

function fileValidation(x)
{ 
  var fileInput=x; 
  var filePath = fileInput.value; 
  var allowedExtensions =  /(\.doc|\.docx|\.odt|\.pdf|\.tex|\.txt|\.rtf|\.wps|\.wks|\.wpd)$/i; 
  if(fileInput.files.length < 1) 
  {
    return;
  }  
  if (!allowedExtensions.exec(filePath))
  { 
    alert('Invalid file type'); 
    fileInput.value = ''; 
    return false; 
  }
  else sizeValidation(fileInput); 
} 


//-------------------------------------------------------------------------------------------------------------------


function sizeValidation(x)
{
  var fi=x;
  if (fi.files.length > 0)
  {
    for (var i = 0; i <= fi.files.length - 1; i++)
    {
      var fsize = fi.files.item(i).size;
      var file = Math.round((fsize / 1024));
      // The size of the file.      
      if (file >= 2048)
      {
        alert("File too big,\nSelect a file less than 2MB");
        fi.value='';
        return false;
      }  
    }
  }
}


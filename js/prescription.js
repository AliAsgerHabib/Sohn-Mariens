function addmed()
    {
      document.getElementById("next").innerHTML="<td><select name='type[]' class='form-control' style='width: 100px;margin: auto;'><option value='Tab'>Tab</option><option value='Syr'>Syr</option><option value='Cap'>Cap</option><option value='Inj'>Inj</option><option value='Drops'>Drops</option><option value='Tube'>Tube</option></select></td><td><input type='text' name='med[]'></td><td><input type='text' name='freq[]' style='width: 50px;'> per day</td><td><input type='text' name='dur[]' style='width: 50px;'> days</td><td colspan='4'><button type='button' class='btn btn-primary' id='ad' onclick='addmed1()'><i class='fas fa-plus-circle'></i></button></td>";
    }
    function addmed1()
    {
      document.getElementById("next1").innerHTML="<td><select name='type[]' class='form-control' style='width: 100px;margin: auto;'><option value='Tab'>Tab</option><option value='Syr'>Syr</option><option value='Cap'>Cap</option><option value='Inj'>Inj</option><option value='Drops'>Drops</option><option value='Tube'>Tube</option></select></td><td><input type='text' name='med[]'></td><td><input type='text' name='freq[]' style='width: 50px;'> per day</td><td><input type='text' name='dur[]' style='width: 50px;'> days</td><td colspan='4'><button type='button' class='btn btn-primary' id='ad' onclick='addmed2()'><i class='fas fa-plus-circle'></i></button></td>";
    }
    function addmed2()
    {
      document.getElementById("next2").innerHTML="<td><select name='type[]' class='form-control' style='width: 100px;margin: auto;'><option value='Tab'>Tab</option><option value='Syr'>Syr</option><option value='Cap'>Cap</option><option value='Inj'>Inj</option><option value='Drops'>Drops</option><option value='Tube'>Tube</option></select></td><td><input type='text' name='med[]'></td><td><input type='text' name='freq[]' style='width: 50px;'> per day</td><td><input type='text' name='dur[]' style='width: 50px;'> days</td><td colspan='4'><button type='button' class='btn btn-primary' id='ad' onclick='addmed3()'><i class='fas fa-plus-circle'></i></button></td>";
    }
    function addmed3()
    {
      document.getElementById("next3").innerHTML="<td><select name='type[]' class='form-control' style='width: 100px;margin: auto;'><option value='Tab'>Tab</option><option value='Syr'>Syr</option><option value='Cap'>Cap</option><option value='Inj'>Inj</option><option value='Drops'>Drops</option><option value='Tube'>Tube</option></select></td><td><input type='text' name='med[]'></td><td><input type='text' name='freq[]' style='width: 50px;'> per day</td><td><input type='text' name='dur[]' style='width: 50px;'> days</td><td colspan='4'><button type='button' class='btn btn-primary' id='ad' onclick='addmed4()'><i class='fas fa-plus-circle'></i></button></td>";
    }
    function addmed4()
    {
      document.getElementById("next4").innerHTML="<td><select name='type[]' class='form-control' style='width: 100px;margin: auto;'><option value='Tab'>Tab</option><option value='Syr'>Syr</option><option value='Cap'>Cap</option><option value='Inj'>Inj</option><option value='Drops'>Drops</option><option value='Tube'>Tube</option></select></td><td><input type='text' name='med[]'></td><td><input type='text' name='freq[]' style='width: 50px;'> per day</td><td><input type='text' name='dur[]' style='width: 50px;'> days</td><td colspan='4'><button type='button' class='btn btn-primary' id='ad'><i class='fas fa-plus-circle'></i></button></td>";
    }

function dts()
{
  document.getElementById("dts").style.display="block";
  document.getElementById("dts_sec").style.display="none";
  document.getElementById("pres_sec").style.display="block";
  document.getElementById("pres").style.display="none";
}
function pres()
{
  document.getElementById("dts").style.display="none";
  document.getElementById("dts_sec").style.display="block";
  document.getElementById("pres_sec").style.display="none";
  document.getElementById("pres").style.display="block";
}
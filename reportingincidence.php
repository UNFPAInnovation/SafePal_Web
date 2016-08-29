
<script type="text/javascript">
function validateForm()
{
var a=document.forms["name"]["name"].value;
if (a==null || a=="")
  {
  alert("Pls. Enter  name");
  return false;
  }
var b=document.forms["sex"]["sex"].value;
if (b==null || b=="")
  {
  alert("Pls. Enter sex");
  return false;
  }
}
</script>

<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
-->
</style>

<form action="addexec5.php" method="post" enctype="multipart/form-data" name="addproduct" onsubmit="return validateForm()">

<a href="">Welcome to the instant web reporter</a><br />
<table>
<tr><td>Survivor's Name:<input name="name" type="text" class="ed" /></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td>Gender:<br><select name="sex" class="ed">
 <option value="Male">Male</option>
  <option value="Female">Female</option>
  </select></td></tr>
<tr><td>Phone:<input name="phone" type="text" class="ed" /></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td>Email:<input name="email" type="text" class="ed" /></td></tr>
<tr><td>Birth date:<input name="bot" type="text" class="ed" /></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td>Age:  <input name="age" type="text" class="ed" /></td></tr>
<tr><td>Location:<input name="loc" type="text" class="ed" /></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td>Incident reported by: <select name="reporter" class="ed">
 <option value="Survivor">Survivor</option>
  <option value="Victim">Friend</option>
  </select></td></tr>
<tr><td>Incidence Description:<textarea name="des" class="ed">
</textarea></td></tr>
<tr><td>Perpetrator relationship:<input name="rel" type="text" class="ed" /></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td>Number of perpetrators: <input name="nop" type="text" class="ed" /></td></tr>
<tr><td>Perpetrator's name: <input name="pname" type="text" class="ed" /></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td>Perpetrator'sestimated age: <input name="page" type="text" class="ed" /></td></tr>

<tr><td><input type="submit" name="Submit" value="Report incidence" id="button1" /></td></tr>
     
 </table>
</form>

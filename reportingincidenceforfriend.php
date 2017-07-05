
<script type="text/javascript">
function validateForm()
{
var a=document.forms["addinc"]["story"].value;
if (a==null || a=="")
  {
  alert("Pls. Tell us the story");
  return false;
  }

}
</script>

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

<form action="reportnowforfrd.php" method="post" enctype="multipart/form-data" name="addinc" onsubmit="return validateForm()">

<table>
<tr><td>What is your relationship with the survivor:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name="rel" class="ed">
 <option value="Relative">Relative</option>
  <option value="Friend">Friend</option>
   <option value="Schoolate">Schoolmate</option>
    <option value="Other">Other</option>
  </td> </tr>
<tr><td>How old is He/She:<select name="age" class="ed">
 <option value="Below 10">Below 10</option>
  <option value="Between 10-24">Between 10-24</option>
   <option value="Above 24">Above 24</option>
     </td> </tr>
	 <tr><td>Victim's Sex:<select name="sex" class="ed"> <br>
 <option value="Male">Boy</option>
  <option value="Female">Girl</option>
     </td> </tr>
	 <tr><td>In what location did the incident happen?:&nbsp;&nbsp;
 <select name="place" class="ed" >
			<?php
			include('connect.php');
			$result = mysql_query("SELECT * from locations");
			while ($row = mysql_fetch_array($result)){?>
			<option value="<?php echo $row['loc_name']?>"><?php echo $row['loc_name']?></option>
			<?php 
			}			
			?>
			</select></td>
  </tr>
  <tr>
<td>What happened to your freind:<select name="whathappened" class="ed" >
 <option value="Male">Bad Touches</option>
  <option value="Female">Some one tried to rape my friend</option>
   <option value="Female">He/She was raped</option>
    <option value="Female">He/She was defiled</option>
	 <option value="Female">Other</option>
  </select></td> </tr>
   <tr> <td>Tell us the story:<textarea name="story" class="ed">
</textarea></td>
  </tr>

<tr><td><input type="submit" name="Submit" value="Report incidence" id="button1" /></td></tr>
     
 </table>
</form>

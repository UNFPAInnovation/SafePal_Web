
<script type="text/javascript">
function validateForm()
{
var a=document.forms["fname"]["fname"].value;
if (a==null || a=="")
  {
  alert("Pls. Enter name");
  return false;
  }

}
</script>


<form action="addexec3.php" method="post" enctype="multipart/form-data" name="addproduct" onsubmit="return validateForm()">
CSO Name<br />
  <input name="name" type="text" class="ed" /><br />
Location<br />
     <select name="dist" class="ed">
			<?php
			include('connect.php');
			$result = mysql_query("SELECT * from locations");
			while ($row = mysql_fetch_array($result)){?>
			<option value="<?php echo $row['loc_name']?>"><?php echo $row['loc_name']?></option>
			<?php 
			}			
			?>
			</select><br />

Phone Number<br />
    <input name="phone" type="text" class="ed"/><br />			<br />
Status:
   
<select name="status" class="ed">
 <option value="Active">Active</option>
  <option value="Closed">Closed</option>
  </select>
 <br /><br />
    <input type="submit" name="Submit" value="save" id="button1" />
 
</form>

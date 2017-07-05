
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


<form action="addexec31.php" method="post" enctype="multipart/form-data" name="addproduct" onsubmit="return validateForm()">
 Full Name<br />
  <input name="fname" type="text" class="ed" /><br />
 User Name<br />
    <input name="uname" type="text" id="rate" class="ed" /><br />
 Password<br />
    <input name="password" type="password" id="qty" class="ed"/><br />
			
	User Group<br />
     <select name="level" class="ed">
			<?php
			include('connect.php');
			$result = mysql_query("SELECT * from user_categories");
			while ($row = mysql_fetch_array($result)){?>
			<option value="<?php echo $row['user_category']?>"><?php echo $row['user_category']?></option>
			<?php 
			}			
			?>
			</select><br />
	
		Attached CSO<br />
     <select name="loc" class="ed">
			<?php
			include('connect.php');
			$resultx = mysql_query("SELECT * from  locations");
			while ($row = mysql_fetch_array($resultx)){?>
			<option value="<?php echo $row['loc_name']?>"><?php echo $row['loc_name']?></option>
			<?php 
			}			
			?>
			</select><br />
		

  Enter password to confirm Administrative permission<br />
    <input name="password" type="password" id="qty" class="ed"/><br />
  <br />
    
 
    <input type="submit" name="Submit" value="save" id="button1" />
 
</form>

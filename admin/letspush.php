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
<?php
	include('connect.php');
	$id=$_GET['id'];
	$result = mysql_query("SELECT * FROM  incident_report_details where incident_report_id='$id'");
		while($row = mysql_fetch_array($result))
			{
			
				$name=$row['survivor_name'];
				
				$phone=$row['survivor_contact_phone_number'];
				$email=$row['survivor_contact_email'];
				$des=$row['incident_description'];
			
				
				
			}
?>
<form action="reportcase.php" method="post">
	<input type="hidden" name="prodid" value="<?php echo $id=$_GET['id'] ?>">
	Name:<br><input type="text" name="name" value="<?php echo $name ?>" readonly class="ed" ><br>
	
	Phone:<br><input type="text" name="phone" value="<?php echo $phone ?>" readonly class="ed"><br>
	Email:<br><input type="text" name="email" value="<?php echo $email?>" readonly class="ed"><br>
	Description:<br><textarea name="des" class="ed" ><?php echo $des?></textarea><br>
   
	Feedback after follow up:<br><textarea name="feedback"> </textarea><br>
  Staus:<br><select name="status">
	<option>Contacted</option>
	<option>Not Contacted</option>
	<option>Contacted and Helped</option>
	<option>New</option>
	<option>Pushed</option>
	<option>Need later followup</option>
	
	</select><br /><br>
	Authority:<br><select name="authority">
	<option>Not Reported</option>
	<option>N/A</option>
	<option>Police</option>
	<option>NVBD</option>
	
	</select><br /><br>
	<input type="submit" value="Update" id="button1">
</form>
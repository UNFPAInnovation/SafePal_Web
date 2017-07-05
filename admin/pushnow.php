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
			
				$name=$row['incident_report_id'];
				
				$phone=$row['survivor_contact_phone_number'];
				$email=$row['survivor_contact_email'];
				$des=$row['incident_description'];
			
				
				
			}
?>
<form action="reportcase.php" method="post">
	<input type="hidden" name="prodid" value="<?php echo $id=$_GET['id'] ?>">
	Report this case to authority <br>
	Unique Number:<br><input type="text" name="fname" value="<?php echo 'SFPINC'.$name ?>" readonly class="ed" ><br>
	
  Report To:<br><select name=name="district">
	<option>Police</option>
	<option>NVBD</option>

	
	</select><br /><br>
	<input type="submit" value="Report this incidence" id="button1">
</form>
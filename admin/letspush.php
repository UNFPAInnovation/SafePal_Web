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
				$incident_report_id=$row['incident_report_id'];
				$phone=$row['survivor_contact_phone_number'];
				$email=$row['survivor_contact_email'];
				$des=$row['incident_description'];
			
				
				
			}
?>
<form action="reportcase.php" method="post">
	<input type="hidden" name="incident_report_id" value="<?php echo $incident_report_id ?>">
	Name:<br><input type="text" name="name" value="<?php echo $name ?>"  class="ed" ><br>
	
	Contact:<br><input type="text" name="phone" value="<?php echo $phone ?>" class="ed"><br>
	Location<br>     <select name="email" class="ed">
			<?php
			include('connect.php');
			$result = mysql_query("SELECT * from locations");
			while ($row = mysql_fetch_array($result)){?>
			<option value="<?php echo $row['loc_name']?>"><?php echo $row['loc_name']?></option>
			<?php 
			}			
			?>
			</select><br />
	Description:<br><textarea name="des" class="ed" ><?php echo $des?></textarea><br>
   
	Feedback after follow up:<br><textarea name="feedback"> </textarea><br>
  Status:<br>
  
     <select name="status" class="ed">
			<?php
			include('connect.php');
			$result = mysql_query("SELECT * from incidence_status");
			while ($row = mysql_fetch_array($result)){?>
			<option value="<?php echo $row['desc']?>"><?php echo $row['desc']?></option>
			<?php 
			}			
			?>
			</select><br />
	
	<br /><br>
	
	<input type="submit" value="Update" id="button1">
</form>
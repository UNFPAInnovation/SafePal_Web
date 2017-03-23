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
	$result = mysql_query("SELECT * FROM cso_details where cso_details_id ='$id'");
		while($row = mysql_fetch_array($result))
			{
				$fname=$row['cso_name'];
				$loc=$row['cso_location'];
				$phone=$row['cso_phone_number'];
				$email=$row['cso_email'];
			}
?>
<form action="submiteditcso.php" method="post">
	<input type="text" hidden name="id" value="<?php echo $id=$_GET['id'] ?>">
	CSO name:<br><input type="text" name="cname" value="<?php echo $fname ?>" class="ed"><br>
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
			Phone Number:<br><input type="text" name="phone" value="<?php echo $phone?>" class="ed"><br>
			Status:
   
<select name="status" class="ed">
 <option value="Active">Active</option>
  <option value="Closed">Closed</option>
  </select>
 <br /><br />
	<input type="submit" value="Edit CSO" id="button1">
</form>
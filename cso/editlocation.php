
<?php
	include('connect.php');
	$id=$_GET['id'];
	$result = mysql_query("SELECT * FROM  locations where loc_id='$id'");
		while($row = mysql_fetch_array($result))
			{
				$dname=$row['loc_name'];
				$des=$row['des'];
				
			}
?>
<form action="editlevelsubmit.php" method="post">
	<input type="text" hidden name="id" value="<?php echo $id=$_GET['id'] ?>">
	Location Name:<br><input type="text" name="dname" value="<?php echo $dname ?>" class="ed"><br>
	Description:<br>
	<textarea name="des"><?php echo $des ?></textarea><br><br>

	
			
	<input type="submit" value="Edit Location" id="button1">
</form>
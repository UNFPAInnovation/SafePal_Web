
<?php
	include('connect.php');
	$id=$_GET['id'];
	$result = mysql_query("SELECT * FROM  user_categories where user_category_id='$id'");
		while($row = mysql_fetch_array($result))
			{
				$dname=$row['user_category'];
				$des=$row['des'];
				
			}
?>
<form action="execeditlevel.php" method="post">
	<input type="text" hidden name="id" value="<?php echo $id=$_GET['id'] ?>">
	User group:<br><input type="text" name="dname" value="<?php echo $dname ?>" class="ed"><br>
	Description:<br>
	<textarea name="des"><?php echo $des ?></textarea><br><br>

	
			
	<input type="submit" value="Edit User" id="button1">
</form>
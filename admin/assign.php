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
	$result = mysql_query("SELECT * FROM lecturers where ID='$id'");
		while($row = mysql_fetch_array($result))
			{
			
				$fname=$row['fname'];
				
			}
?>
<form action="addexec7.php" method="post">
	<input type="hidden" name="prodid" value="<?php echo $id=$_GET['id'] ?>">
	Assign a survivor to:<br><input type="text" name="fname" value="<?php echo $fname ?>" readonly class="ed"><br>
	
   Survivor<br />
   <select name="unit" class="ed">
			<?php
			include('connect.php');
			$result = mysql_query("SELECT * from incidences");
			while ($row = mysql_fetch_array($result)){?>
			<option value="<?php echo $row['name']?>"><?php echo $row['name']?></option>
			<?php 
			}			
			?>
			</select>
  <br />
	
	<input type="submit" value="Assign" id="button1">
</form>
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
	$result = mysql_query("SELECT * FROM incidences where incid='$id'");
		while($row = mysql_fetch_array($result))
			{
				$id=$row['incid'];
				$name=$row['name'];
				$district=$row['district'];
				$village=$row['village'];
				$des=$row['des'];
				
			}
?>
<form action="nowreport.php" method="post">
	<input type="text" hidden name="id" class="ed" value="<?php echo $id=$_GET['id'] ?>"><br>
	<input type="text" hidden name="cl" class="ed" value="<?php echo $cl  ?>"><br>
	Report this Violance to:<br><br>
   <select name="authority" class="ed">
			<?php
			include('connect.php');
			$result = mysql_query("SELECT * from authority");
			while ($row = mysql_fetch_array($result)){?>
			<option value="<?php echo $row['name']?>"><?php echo $row['name']?></option>
			<?php 
			}			
			?>
			</select>
			
			
			
  <br>
	
		<input type="submit" value="Report" id="button1">
</form>
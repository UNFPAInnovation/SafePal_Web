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
height: 4px;
}
-->
</style>
<?php
	include('connect.php');
	$id=$_GET['id'];
	$result = mysql_query("SELECT * FROM dashboardactivity where ID='$id'");
		while($row = mysql_fetch_array($result))
			{
				$name=$row['name'];
				$count=$row['count'];
				
				
			}
	
?>
<form action="execeditproduct.php" method="post">
	<input type="hidden" name="prodid" value="<?php echo $id=$_GET['id'] ?>">
	View the  <?php echo $name ?>:<input type="text" name="name" readonly value="<?php echo $name ?>" class="ed" hidden>
		<!--<input type="submit" value="Edit" id="button1">-->
</form>
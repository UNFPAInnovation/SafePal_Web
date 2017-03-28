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
	$result = mysql_query("SELECT * FROM  incidence_status where incidence_status_id ='$id'");
		while($row = mysql_fetch_array($result))
			{
				$status_name=$row['status_name'];
				$desc=$row['desc'];
			
			}
?>
<form action="execeditstatus.php" method="post">
	<input type="text" hidden name="id" value="<?php echo $id=$_GET['id'] ?>">
	Status Name:<br><input type="text" name="status_name" value="<?php echo $status_name ?>" class="ed"><br>
	Description:<br><input type="text" name="desc" value="<?php echo $desc ?>" class="ed"><br>
	
			
	<input type="submit" value="Edit Status" id="button1">
</form>
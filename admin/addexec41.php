<?php
include('connect.php');


			$dname=$_POST['dname'];
			$des=$_POST['des'];
			
			
$update=mysql_query("INSERT INTO incidence_status(incidence_name,desc)
VALUES
('AA','VV')");
header("location: settings.php");
			exit();
		



?>

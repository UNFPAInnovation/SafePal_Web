<?php
include('connect.php');


			$dname=$_POST['dname'];
			$des=$_POST['des'];
			
			
$update=mysql_query("INSERT INTO incidence_status(incidence_name,desc)
VALUES
('$dname','$des')");
header("location: incidencestatus.php");
			exit();
		



?>

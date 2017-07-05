<?php
include('connect.php');


			$dname=$_POST['dname'];
			$des=$_POST['des'];
			
			
			

			
$update=mysql_query("INSERT INTO locations (loc_name, des)
VALUES
('$dname','$des')");
header("location: settings.php");
			exit();
		



?>

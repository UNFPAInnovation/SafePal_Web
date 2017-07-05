<?php
include('connect.php');
			
			$rel=$_POST['rel'];
			$age=$_POST['age'];
			$sex=$_POST['sex'];
			$place=$_POST['place'];
			$whathappened=$_POST['whathappened'];
			$story=$_POST['story'];
			
			
			
			
$update=mysql_query("INSERT INTO incident_report_details(survivor_name,survivor_gender,survivor_date_of_birth,incident_location,incident_type,incident_description,status)
VALUES
('$rel','$sex','$age','$place','$whathappened','$story','New')");


header("location: incidencesubmited.php");

			exit();
		



?>

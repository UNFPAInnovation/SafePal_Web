<?php
include('connect.php');
			$rel=$_POST['rel'];
			$age=$_POST['age'];
			$sex=$_POST['sex'];
			$place=$_POST['place'];
			$whathappened=$_POST['whathappened'];
			$story=$_POST['story'];
			
			
			
			
$update=mysql_query("INSERT INTO incident_report_details(survivor_gender,perpetrator_estimated_age,incident_location,incident_reported_by,incident_description,perpetrator_relationship,status)
VALUES
('$sex','$age','$place','$whathappened','$story','$rel','New')");


header("location: submitsucess.php");

			exit();
		



?>

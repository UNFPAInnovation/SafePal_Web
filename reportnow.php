<?php
include('connect.php');
			$year=$_POST['year'];
			$age=$_POST['age'];
			$sex=$_POST['sex'];
			$place=$_POST['place'];
			$whathappened=$_POST['whathappened'];
			$story=$_POST['story'];
			
			
			
			
$update=mysql_query("INSERT INTO incident_report_details(survivor_gender,perpetrator_estimated_age,incident_location,incident_reported_by,incident_description,number_of_perpetrators,status)
VALUES
('$sex','$age','$place','$whathappened','$story','$year','New')");


header("location: incidencesubmited.php");

			exit();
		



?>

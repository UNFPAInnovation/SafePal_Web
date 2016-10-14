<?php
include('connect.php');

			$age=$_POST['age'];
			$sex=$_POST['sex'];
			$place=$_POST['place'];
			$whathappened=$_POST['whathappened'];
			$story=$_POST['story'];
			$contacted=$_POST['contacted'];
			$pnumber=$_POST['pnumber'];
			$location=$_POST['location'];
			
$update=mysql_query("INSERT INTO incident_report_details(survivor_gender,survivor_contact_phone_number,perpetrator_estimated_age,incident_location,incident_reported_by,incident_description,perpetrator_relationship,perpetrator_name,status)
VALUES
('$sex','$pnumber','$age','$location','$whathappened','$story','$place','$contacted','New')");


header("location: message.php");
header..
			exit();
		



?>

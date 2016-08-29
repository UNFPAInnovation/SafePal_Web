<?php
include('connect.php');

			$name=$_POST['name'];
			$sex=$_POST['sex'];
			$phone=$_POST['phone'];
			$email=$_POST['email'];
			$bot=$_POST['bot'];
			$age=$_POST['age'];
			$loc=$_POST['loc'];
			$reporter=$_POST['reporter'];
			$des=$_POST['des'];
			$rel=$_POST['rel'];
			$nop=$_POST['nop'];
			$pname=$_POST['pname'];
			$page=$_POST['page'];
		
$update=mysql_query("INSERT INTO incident_report_details(survivor_name,survivor_gender,survivor_contact_phone_number,survivor_contact_email,survivor_date_of_birth,perpetrator_estimated_age,incident_location,incident_reported_by,incident_description,perpetrator_relationship,number_of_perpetrators,perpetrator_name,perpetrator_gender,status)
VALUES
('$name','$sex','$phone','$email','$bot','$age','$loc','$reporter','$des','$rel','$nop','$pname','$page','New')");


header("location: index.php");
			exit();
		



?>

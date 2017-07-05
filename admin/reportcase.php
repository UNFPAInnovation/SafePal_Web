<?php
include('connect.php');

			$incident_report_id= $_POST['incident_report_id'];
			$name=$_POST['name'];
			$status=$_POST['status'];
			$feedback=$_POST['feedback'];
			
					
mysql_query("UPDATE incident_report_details SET survivor_name='$name',status='$status',feedback='$feedback' WHERE incident_report_id='$incident_report_id'");
header("location: incidents.php");
			exit();
		



?>

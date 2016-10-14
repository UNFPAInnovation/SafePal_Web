<?php
include('connect.php');

			$id = $_POST['id'];
			$name=$_POST['name'];
			$status=$_POST['status'];
			$feedback=$_POST['feedback'];
			$authority=$_POST['authority'];
					
mysql_query("UPDATE  incident_report_details SET status='$status',feedback='$feedback',authority='$authority' WHERE survivor_name='$name'");
header("location: followup.php");
			exit();
		



?>

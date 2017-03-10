<?php
include('connect.php');


			$name=$_POST['name'];
			$dist=$_POST['dist'];
			$phone=$_POST['phone'];
			$status=$_POST['status'];
			

			
$update=mysql_query("INSERT INTO cso_details(cso_name,cso_location,cso_phone_number,cso_email)
VALUES
('$name','$dist','$phone','$status')");
header("location: cso.php");
			exit();
		



?>

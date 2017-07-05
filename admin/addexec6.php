<?php
include('connect.php');


			$tittle=$_POST['tittle'];
			$fname=$_POST['fname'];
			$department=$_POST['department'];
			$phone=$_POST['phone'];
			$role=$_POST['role'];
			$sex=$_POST['sex'];
			$position=$_POST['position'];
			$jobtype=$_POST['jobtype'];
			
			

			
$update=mysql_query("INSERT INTO lecturers ( tittle, fname, department,phone,role,sex,position,jobtype)
VALUES
('$tittle','$fname','$department','$phone','$role','$sex','$position','$jobtype')");
header("location: staff.php");
			exit();
		



?>

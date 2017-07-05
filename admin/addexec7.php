<?php
include('connect.php');


			$fname=$_POST['fname'];
			$class=$_POST['class'];
			$unit=$_POST['unit'];
			$duration=$_POST['duration'];
			$cat=$_POST['cat'];
			$cat2=$_POST['cat2'];
			
			$catf=$_POST['cat']." ".$_POST['cat2'];

			
$update=mysql_query("INSERT INTO assignment ( fname, class,unit,duration,cat)
VALUES
('$fname','$class','$unit','$duration','$catf')");
header("location: staffload.php");
			exit();
		



?>

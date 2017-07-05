<?php
include('connect.php');


			$dname=$_POST['dname'];
			$des=$_POST['des'];
			
			
			

			
$update=mysql_query("INSERT INTO user_categories (user_category, des)
VALUES
('$dname','$des')");
header("location: levels.php");
			exit();
		



?>

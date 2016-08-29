<?php
include('connect.php');


			$fname=$_POST['fname'];
			$uname=$_POST['uname'];
			$password=$_POST['password'];
			$level=$_POST['level'];
			

			
$update=mysql_query("INSERT INTO users ( fullname ,username, password,user_categories_user_category_id)
VALUES
('$fname','$uname','$password','$level')");
header("location: user.php");
			exit();
		



?>

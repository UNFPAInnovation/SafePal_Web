
<?php
	
	include('connect.php');
	$password = $_POST['password'];
	
	$query = "select Password FROM users where Password='$password'" ;
	$result = mysql_query($query);
	
	if(!$result) die("Access to the database failed. Try again later".mysql_error());

    $num_row =mysql_num_rows($result);
	   
	if($num_row  == 0) 
	{
	header("location: invaliduser.php");
	exit();
			}		
	
	else
	{


			$fname=$_POST['fname'];
			$uname=$_POST['uname'];
			$password=$_POST['password'];
			$level=$_POST['level'];
			$loc=$_POST['loc'];
			

			
$update=mysql_query("INSERT INTO users( fullname,username, password,user_categories_user_category_id,location)
VALUES
('$fname','$uname','$password','$level','$loc')");
header("location: user.php");
			exit();
		}



?>


<?php
	
	include('connect.php');
	$password = $_POST['password'];
	
	$query = "select Password FROM users where Password='$password'" ;
	$result = mysql_query($query);
	
	if(!$result) die("Access to the database failed. Try again later".mysql_error());

    $num_row =mysql_num_rows($result);
	   
	if($num_row  == 0) 
	{
	header("location: invalidlevels.php");
	exit();
			}		
	
	else
	{


			$dname=$_POST['dname'];
			$des=$_POST['des'];
			
			
			

			
$update=mysql_query("INSERT INTO user_categories (user_category, des)
VALUES
('$dname','$des')");
header("location: levels.php");
			exit();
		
}
?>

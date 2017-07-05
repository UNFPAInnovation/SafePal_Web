
<?php
	
	include('connect.php');
	$password = $_POST['password'];
	
	$query = "select Password FROM users where Password='$password'" ;
	$result = mysql_query($query);
	
	if(!$result) die("Access to the database failed. Try again later".mysql_error());

    $num_row =mysql_num_rows($result);
	   
	if($num_row  == 0) 
	{
	header("location: invalidpassword.php");
	exit();
	}
				
	
	else
	{
	$name=$_POST['name'];
			$dist=$_POST['dist'];
			$phone=$_POST['phone'];
			$email=$_POST['email'];
			$status=$_POST['status'];
			

			
$update=mysql_query("INSERT INTO cso_details(cso_name,cso_location,cso_phone_number,cso_email,status)
VALUES
('$name','$dist','$phone','$email','$status')");
header("location: cso.php");
			exit();
	}
			
?>

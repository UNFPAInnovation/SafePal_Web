<?php
	
	require "reservation/connect.php";
		
	session_start();
	
	$user = $_REQUEST['user'];
	$password = $_REQUEST['password'];
	
	
	$query = "select * FROM users where username='$user' and Password='$password'" ;
	$result = mysql_query($query);
	
	if(!$result) die("Access to the database failed. Try again later".mysql_error());

    $num_row =mysql_num_rows($result);
	   
	if($num_row  == 0) 
	{
	header("location: index.php");
	exit();
	}
	
		
	$row = mysql_fetch_assoc($result);
					
	$usergroup=$row['user_categories_user_category_id'];	
						
	if($usergroup =='Admin')
	{
	$_SESSION['Admin']= $user;
	$_SESSION['password'] = $password;
	$_SESSION['fname'] = $row['fullname '];
	$_SESSION['ID'] = $row['user_id'];
	$_SESSION['username'] = $row['username'];	
	$_SESSION['usergroup'] = $row['user_categories_user_category_id'];	

	header("location: admin/dashboard.php");
	}
							
	else if($usergroup =='CSO')
							
	{
	
	
							
	header("");
	}
	

	
	else
	{
	header("location: index.php");
	}
			
?>

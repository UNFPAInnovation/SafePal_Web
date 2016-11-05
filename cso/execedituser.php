<?php
	include('connect.php');
	$id = $_POST['id'];
	$fname=$_POST['fname'];
	$username=$_POST['username'];
	$password=$_POST['password'];

	mysql_query("UPDATE users SET fullname='$fname',username='$username',password='$password' WHERE user_id='$id'");
	header("location: user.php");
?>
<?php
	include('connect.php');
	$id = $_POST['id'];
	$fname=$_POST['fname'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$level=$_POST['level'];
	mysql_query("UPDATE users SET fullname='$fname',username='$username',password='$password', user_categories_user_category_id='$level' WHERE user_id='$id'");
	header("location: user.php");
?>
<?php
	include('connect.php');
	$id = $_POST['id'];
	$dname=$_POST['dname'];
	$des=$_POST['des'];
	mysql_query("UPDATE  user_categories SET user_category='$dname',des='$des' WHERE user_category_id='$id'");
	header("location: levels.php");
?>
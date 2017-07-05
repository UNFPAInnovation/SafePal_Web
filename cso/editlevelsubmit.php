<?php
	include('connect.php');
	$id = $_POST['id'];
	$dname=$_POST['dname'];
	$des=$_POST['des'];
	mysql_query("UPDATE  locations SET loc_name='$dname',des='$des' WHERE loc_id='$id'");
	header("location: settings.php");
?>
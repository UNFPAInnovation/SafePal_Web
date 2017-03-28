<?php
	include('connect.php');
	$id = $_POST['id'];
	$status_name=$_POST['status_name'];
	$desc=$_POST['desc'];
	
	mysql_query("UPDATE  incidence_status SET status_name='$status_name',desc='$desc' WHERE incidence_status_id='$id'");
	header("location: incidencestatus.php");
?>
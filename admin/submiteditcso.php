<?php
	include('connect.php');
	$id = $_POST['id'];
	$cname=$_POST['cname'];
	$loc=$_POST['loc'];
	$phone=$_POST['phone'];
	$status=$_POST['status'];
	mysql_query("UPDATE cso_details SET cso_name='$fname',cso_location='$loc',cso_phone_number='$phone', status='$status' WHERE cso_details_id ='$id'");
	header("location: cso.php");
?>
<?php
	include('connect.php');
	$id = $_POST['id'];
	$name=$_POST['name'];
	$authority=$_POST['authority'];
	
	//$clx=$dep .','. $cl;
	//echo "$clx";
	//mysql_query("UPDATE unit SET class='$clx' WHERE ID='$id'");
	
$update=mysql_query("INSERT INTO reportedcases ( name,district,village, des,authority)
VALUES
('$name','xx','xx','xx','$authority')");
header("location: incidents.php");
			exit();
?>
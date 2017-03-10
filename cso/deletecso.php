<?php

include('connect.php');
$id=$_GET['id'];
 $sql = "delete from  cso_details where cso_details_id='$id'";
 mysql_query($sql);
header("location: cso.php");

?>
<?php

include('connect.php');
if($_GET['id'])
{
$id=$_GET['id'];
 $sql = "delete from incident_report_details where incident_report_id ='$id'";
 mysql_query( $sql);
 header("location: incidents.php");
}
?>
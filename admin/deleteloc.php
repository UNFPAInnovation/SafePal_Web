<?php

include('connect.php');
if($_GET['id'])
{
$id=$_GET['id'];
 $sql = "delete from locations where loc_id='$id'";
 mysql_query( $sql);
 header("location: settings.php");
}
?>
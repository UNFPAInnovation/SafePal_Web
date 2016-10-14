<?php

include('connect.php');
if($_GET['id'])
{
$id=$_GET['id'];
 $sql = "delete from classtrack where ID='$id'";
 mysql_query( $sql);
}
?>
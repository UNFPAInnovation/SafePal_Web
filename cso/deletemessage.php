<?php

include('connect.php');
if($_GET['id'])
{
$id=$_GET['id'];
 $sql = "delete from message where message_id='$id'";
 mysql_query( $sql);
}
header("message.php");
?>
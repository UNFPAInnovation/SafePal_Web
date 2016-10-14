<?php

// This is a sample code in case you wish to check the username from a mysql db table
include('connect.php');
$id=$_GET['id'];
if($_GET['id'])
{
$id=$_GET['id'];
 $sql = "delete from users where user_id='$id'";
 mysql_query( $sql);
}

?>
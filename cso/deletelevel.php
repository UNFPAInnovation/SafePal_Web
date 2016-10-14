<?php

include('connect.php');
if($_GET['id'])
{
$id=$_GET['id'];
 $sql = "delete from user_categories where user_category_id='$id'";
 mysql_query( $sql);
}
?>
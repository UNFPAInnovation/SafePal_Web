<?php

include('connect.php');
$id=$_GET['id'];
 $sql = "delete from users where user_id='$id'";
 mysql_query($sql);
header("location: user.php");

?>
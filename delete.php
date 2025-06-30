<?php
$id=$_REQUEST['id'];
//echo $id;
include("connection.php");
$query="delete from register where id='$id'";
mysql_query($query);
header("Location:display.php");
?>

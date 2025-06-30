<?php
include("connection.php");
session_start();
$name=$_POST['name'];
echo $name;
echo $password;
$password=$_POST['password'];
echo $password;
$query="insert into tbl_admin(user_name,password)values('$name','$password')";
mysql_query($query);
?>

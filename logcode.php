<?php
session_start();
include("connection.php");

$email=$_POST['email']; 
//echo $email;
$password=$_POST['password'];
//echo $password;
$user=$_POST['who'];
//echo $user;
if($user==doctor)
{
$query1="select * from tbl_doctor where email='$email' and password='$password'";

$res1=mysql_query($query1);
if($row=mysql_fetch_assoc($res1))
{

	$_SESSION['email']=$email;
	header("Location:doctorprofile.php");
}
else
{
	header("Location:login.php?msg=1");
}
}
else
	if($user==patient)
{
$query2="select * from tbl_patient where email='$email' and password='$password'";

$res2=mysql_query($query2);
if($row=mysql_fetch_assoc($res2))
{
	$_SESSION['email']=$email;
	header("Location:patientprofile.php");
}
else
{
	header("Location:login.php?msg=1");
}
}
else
{
	header("Location:login.php");
}
?>
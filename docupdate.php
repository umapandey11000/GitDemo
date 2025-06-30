<?php
$name=$_POST['name'];
//echo "your name is:$name";
//echo "</br>";
$spec=$_POST['spec'];
//echo "your specification is:$spec";
//echo "</br>";
$address=$_POST['address'];
//echo "your fees is:$address";
//echo "</br>";
$fees=$_POST['fees'];
//echo "your fees is:$fees";
//echo "</br>";
$time=$_POST['time'];
//echo "your fees is:$time";
//echo "</br>";
$email=$_POST['email'];
//echo "your emailid is:$email";
//echo "</br>";
$mobile_number=$_POST['mobile_number'];
//echo "your mobile no. is:$mobile_number";
//echo "</br>";
$password=$_POST['password'];
//echo "your password is:$password";
//echo "</br>";

include("connection.php");
 echo $query="update tbl_doctor set name='$name',spec='$spec',address='$address',fees='$fees',timing='$time',email='$email',mobile_number='$mobile_number',password='$password')";
mysql_query($query);
header("Location:doctordisplay.php");
?>



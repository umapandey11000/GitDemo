<?php
$id=$_REQUEST['id'];
//echo $id;
include("connection.php");
$query="select * from register where id='$id'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<html>
<head>
</head>
<body>
<form action="update.php" method="post">
<input type="hidden" name="id" value="<?php echo $row['id'];?>">
name<input type="text" name="name" value="<?php echo $row['name'];?>"/></br></br>
fname<input type="text" name="fname"value="<?php echo $row['fname'];?>"/></br></br>
gender<input type="radio" name="a" value="male" <?php
 if($row['gender']=='male') 
 {
?> 
checked 
<?php 
}
 ?>/>male
<input type="radio" name="a" value="female" <?php
 if($row['gender']=='female')
{
?>
checked <?php } ?>/>female
</br></br>
email<input type="email" name="email" value="<?php echo $row['email'];?>"/></br></br>
password<input type="password" name="password" value="<?php echo $row['password'];?>"/></br></br>
mobile_number<input type="number" name="mobile_number" value="<?php echo $row['mobile_number'];?>"/></br></br>
<input type="submit" value="update"/>
</form>
</body>
</html>
<?php
}
?>
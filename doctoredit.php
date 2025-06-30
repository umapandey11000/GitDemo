<?php
$doc_id=$_REQUEST['doc_id'];
//echo $id;
include("connection.php");
$query="select * from tbl_doctor where doc_id='$doc_id'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<html>
<head>
</head>
<body>
<form action="docupdate.php" method="post">
<input type="hidden" name="id" value="<?php echo $row['doc_id'];?>">
name<input type="text" name="name" value="<?php echo $row['name'];?>"/></br></br>
specification<input type="text" name="specification" value="<?php echo $row['spec'];?>"/></br></br>
address<textarea type="text" name="address" value="<?php  echo $row['address'];?>"/></br></br>
fees<input type="text" name="fees" value="<?php echo $row['fees'];?>"/></br></br>
timing<input type="text" name="time" value="<?php echo $row['timing'];?>"/></br></br>
email<input type="email" name="email" value="<?php echo $row['email'];?>"/></br></br>
mobile_number<input type="number" name="mobile" value="<?php echo $row['mobile'];?>"/></br></br>
 password<input type="password" name="password" value="<?php echo $row['password'];?>"/></br></br>
<input type="submit" value="update"/>
</form>
</body>
</html>
<?php
}
?>
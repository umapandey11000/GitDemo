<?php
include("connection.php");
$query="select * from tbl_doctor order by doc_id";
//desc is descending order
$res=mysql_query($query);
?>
<html>
<head></head>
<body>
<table border="1" align="center">
<tr>
<th>S.no</th>
<th>name</th>
<th>specification</th>
<th>address</th>
<th>fees</th>
<th>time</th>
<th>email</th>
<th>mobile_number</th>
<th>password</th>
<th>delete</th> 
</tr>
<?php
$a=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<tr>
<td><?php echo $a;?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['specification'];?></td>
<td><?php echo $row['address'];?></td>
<td><?php echo $row['fees'];?></td>
<td><?php echo $row['timing'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['mobile_number'];?></td>
<td><?php echo $row['password'];?></td>
<td><a href="doctordelete.php?doc_id=<?php echo $row['doc_id'];?>">delete</a></td></tr>
<?php
$a++;
}
?>
</table>
</body>
</html>
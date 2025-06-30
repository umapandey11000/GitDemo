<?php
$doc_id=$_REQUEST['doc_id'];
//echo $doc_id;
include("connection.php");
$query="delete from tbl_doctor where doc_id='$doc_id'";
mysql_query($query);
header("Location:doctordisplay.php");
?>

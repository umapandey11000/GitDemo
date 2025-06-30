
//sfsdgfggtf
//sdedfrgrhthyryj
<?php
session_start();
include("connection.php");
$op=$_POST['op'];
//echo $old;
//echo"</br>";
$np=$_POST['np'];
//echo $new;
//echo"</br>";
$cnp=$_POST['cnp'];
//echo $cnp;
//echo"</br>";
$email=$_SESSION['email'];
//echo $email;
$query="select * from tbl_admin where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_assoc($res))
	{
		$pp=$row['password'];
		echo $pp;
	}
	else
	{
		echo "failed";
	}
	if($pp==$op)
	{
		if($np==$op)
		{
		 header("Location:changepassword.php");
		}
        else
		{
         if($np==$cnp)
		  {
			  $update_query="update tbl_admin set password='$np' where email='$email'";
              $update_res=mysql_query($update_query);
              header("Location:logout.php");			
	       }
			   else
		  {
			  header("Location:changepassword.php");
		  }
	  }
	}
	else
	{
		header("Location:changepassword.php");
	}
			 
	
	


?>
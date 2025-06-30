<?php
session_start();
include("connection.php");
$query="select question from tbl_question";
$res=mysql_query($query);
$query1="select answer from tbl_answer";
$res1=mysql_query($query1);
?>
<html>
<head>
<link href="../css/docdiscuss.css" rel="stylesheet" type="text/css">
</head>
<body>
<center>
<div id="outer">
<div id ="s">
<div id="s1">
<marquee direction="right" behavior="alternate" scrollamount="5"><i><b>MEDICOUNSEL</b></i></marquee>
</div>
<div id="s2">
<marquee behavior="alternate" scrollamount="10" direction="right"><big><big><span style="color:black">WELCOME TO DOCTOR ZONE</big></big></marquee>
</div>
</div>
<div id="menu">
<ul>
<li><a href="home.php">HOME</a></li>
<li><a href="doctordisplay.php">VIEW ALL DOCTOR</a></li>
<li><a href="patientdisplay.php">VIEW ALL PATIENT</a></li>
<li><a href="#">VIEW ALL APPOINTMENT</a></li>
<li><a href="changepassword.php">CHANGE PASSWORD</a></li>
<li><a href="logout.php">LOGOUT</a></li>
</ul>
</div>

<div id="main">
</br></br></br></br>
<table border="1">
<tr>
<th>s.no</th>
<th>Question</th>
<th> ViewAnswer</th>
<th>delete</th>
</tr>
<?php
$a=1;
while($row=mysql_fetch_assoc($res))
{
?>
<tr>
<td><?php echo $a;?></td>
<td><?php echo $row['question'];?></td>
<td><a href="../view.php?id=<?php echo $row['ques_id'];?>">view answer</td>
<td><a href="delete.php?id=<?php echo $row['ques_id'];?>">delete</td>
</tr>
<?php
$a++;
}
?>
</table>
</div>
<div id="footer">
<div id="f1">
<ul>
<li><a href="discuss.php"><h4>Ask a question</h4></a></li>
<li><a href="specialist.php"><h4>Our specialist</h4></a></li>
<li><a href="success.php"><h4>Success story</h4></a></li>
<li><a href="#"><h4>Advisory board</h4></a></li>
</ul>
</div>
<div id="f2">
<ul>
<li><a href="#"><h4>How we help ?</h4></a></li>
<li><a href="#"><h4>How we remain unbiased</h4></a></li>
<li><a href="#"><h4>Fees policy </h4></a></li>
<li><a href="#"><h4>Terms of use</h4></a></li>
</ul>
</div>
<div id="f3">
<ul>
<li><a href="#"><h4>Privacy policy</h4></a></li>
<li><a href="#"><h4>Case update</h4></a></li>
<li><a href="contact.php"><h4>Contact us</h4></a></li>
<li><a href="login.php"><h4>Login</h4></a></li>
</ul>
</div>
</div>
</div>
</body>
</html>

</center>

</body>
</html>







































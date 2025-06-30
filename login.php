<?php
?>
<html>
<head>
<link href="css\login.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id="outer">
<div id="inner">
<div id="i1">
<div id="i11">
<img src="image/logo.png">
</div>
<div id="i12">
<button style="background:teal;border-radius:80px 80px 80px 80px;height:60px;width:120px;"><a href="doctorregister.php" style="text-decoration:none;color:white"><span style="font-size:20;color:white"><b>DOCTOR REGISTER</b></span></a></button>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button style="background:teal;border-radius:80px 80px 80px 80px;height:60px;width:120px;"><a href="patientregister.php" style="text-decoration:none;color:white"><span style="font-size:20;color:white"><b>PATIENT REGISTER</b></span></a></button>
</div>
</div>
<div id="i2">
<center><button style="background:teal;border-radius:65px 65px 65px 65px;height:60px;width:100px;margin-top:15px;"><a href="login.php" style="text-decoration:none;color:white"><span style="font-size:20;color:white"><b>LOGIN</b></span></a></button></center>
</div>
</div>
<div id="ms">
<div id="menu">
<ul>
<li><a href="#">HOME</a></li>
<li><a href="#">ABOUT US</a></li>
<li><a href="#">CONSULTANTS</a></li>
<li><a href="#">SPECIALIST</a></li>
<li><a href="#">SUCCESS STORIES</a></li>
<li><a href="#">CONTACT US</a></li>
</ul>
</div>
<div id="slider">
<marquee behavior="alternate"><img src="image/4.jpg"/><img src="image/1.jpg"/><img src="image/2.jpg"/><img src="image/10.jpg"/></marquee>
</div>
</div>
<div id="main">
<form action="logcode.php" method="post">
<center>
<h1>LOGIN FORM</h1>
who are you ? <select name="who">
<option>--select--</option>
<option>doctor</option>
<option>patient</option>
</select>
</br></br>
Email<input type="email" name="email" placeholder="email"/></br></br>
Password<input type="password" name="password" placeholder="password"/></br></br>
<input type="submit" value="Login" name="submit"/>
</center>
</form>
</div>
<div id="footer">
<div id="f1">
<ul>
<li><a href="#"><h4>Ask a question</h4></a></li>
<li><a href="#"><h4>Our specialist</h4></a></li>
<li><a href="#"><h4>Success story</h4></a></li>
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
<li><a href="#"><h4>Contact us</h4></a></li>
<li><a href="login.php"><h4>Login</h4></a></li>
</ul>
</div>
</div>
</div>
</body>
</html>
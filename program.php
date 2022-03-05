<?php
include "config.php";
if(isset($_POST['submit']))
	{
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$confirmpassword=$_POST['confirmpassword'];

$sql = "INSERT INTO `user details` ( `username`, `email`, `password`, `confirmpassword`) VALUES ( '$username', '$email','$password', '$confirmpassword')";
$result=$conn->query($sql);
if($result==TRUE)
	{
	echo "new record created successfully";
}
else
{
	echo "Error".$sql."<br>".$conn->error;
}
$conn->close();
}
?>
<html>
<head>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<h2> <center>MEDCARE</center> </h2>
<div class="main-agileinfo">
<div class="agileits-top"> 
<form action="" method="POST">
username:<br>
<input type="text" name="username">
email:<br>
<input type="text" name="email">
password:<br>
<input type="password" name="password">
confirmpassword:
<input type="password" name="confirmpassword">
<input type="submit" name="submit" value="submit">
<div class="wthree-text">  
<label class="anim">
<input type="checkbox" class="checkbox" required="">
<span>I Agree To The Terms & Conditions</span> 
</label>  
<div class="clear"> </div>
</div>   
<!--<input type="submit" name="b1" value="Register" onclick="location.href='home.html'">-->
</body>
</html>
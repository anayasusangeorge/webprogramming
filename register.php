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
<h1>MEDCARE</h1>
<div class="main-agileinfo">
<div class="agileits-top"> 
<form action="" method="POST">
<input class="text" type="text" name="username" placeholder="username" required="">
<input class="text email" type="email" name="email" placeholder="Email" required="">
<input class="text" type="password" name="password" placeholder="Password" required="">
<input class="text w3lpass" type="password" name="confirmpassword" placeholder="ConfirmPassword" required="">
<div class="wthree-text">  
<label class="anim">
<input type="checkbox" class="checkbox" required="">
<span>I Agree To The Terms & Conditions</span> 
</label>  
<div class="clear"> </div>
</div>   
<input type="submit" name="submit" value="submit">
</form>	
</body>
</html>


<?php
$u = $_POST["email"];
if(isset($_POST['submit']))
{
    $pass= $_POST["password"];
	$user=false;
	
	if(empty($u))
	{
			echo "<center>Please enter the username</center>";
			if(empty($pass))
			{
				echo "<center>Please enter the password</center>";
				header("location:../index.php");
			}
			else
				header("location:../index.php");
	}
	else
	{
		require("../API/userLoginAPI.php");
	}
	

	if($user==true)
	{
		header("location:home.php");
	}
	else
		header("location:../index.php");
}
else
{
	header("location:../index.php");
}
?>
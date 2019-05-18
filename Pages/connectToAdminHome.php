<?php
$u = $_POST["Username"];
if(isset($_POST['submit']))
{
    $pass= $_POST["Password"];
	$admin=false;
	
	if(empty($u))
	{
			echo "<center>Please enter the username</center>";
			if(empty($pass))
			{
				echo "<center>Please enter the password</center>";
				header("location:admin.php");
			}
			else
				header("location:admin.php");
	}
	else
	{
		require("../API/adminAPI.php");
	}
	

if($admin==true)
{
	header("location:adminHome.php");
}
else
	header("location:admin.php");
	}
?>
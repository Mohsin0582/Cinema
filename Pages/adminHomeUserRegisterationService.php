<?php 
	$_SESSION['message']="";
	$fname=$_POST["fname"];
	 $lname=$_POST["lname"];
	 $email=$_POST["email"];
	 $pass=$_POST["password"];
	 $inserted=false;
	
 if(isset($_POST['submit']) && ($fname!="" && $lname!="" && $email!="" && $pass!=""))
 {
	  require ("../API/userRegisterationAPI.php");
	 
	 if($inserted)
	{
		$_SESSION['message']='Successful';		
		header("location:adminHome.php");
	}
	else
	{	
	    $_SESSION['message']='Failure';	
		header("location:adminHome.php");
	}
 }
 else
 {
	 $inserted=false;
	 $path="";
	 $movie="";
	 $price="";
	
	 $_SESSION['message']='Failure';
	 header("location:adminHome.php");
 }
?>
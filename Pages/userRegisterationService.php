<?php 
	$_SESSION['message']="";
	$fname=$_POST["First_Name"];
	 $lname=$_POST["Last_Name"];
	 $email=$_POST["Email"];
	 $pass=$_POST["Password"];
	 $inserted=false;

	 
 if(isset($_POST['submit']) && ($fname!="" && $lname!="" && $email!="" && $pass!=""))
 {
	 require ("../API/userRegisterationAPI.php");
	 
	 if($inserted)
	{
		$_SESSION['message']='Successful';		
		header("location:../index.php");
	}
	else
	{	
	    $_SESSION['message']='Failure';	
		header("location:register.php");
	}
 }
 else
 {
	 $inserted=false;
	 $fname="";
	 $lname="";
	 $email="";
	 $password="";
	
	 $_SESSION['message']='Failure';
	 header("location:register.php");
 }
?>
<?php
	session_start();
	$count_id = $_SESSION["count_id"];

	$inserted="";
	
	 $fname=$_POST["fname"];
	 $lname=$_POST["lname"];
	 $email=$_POST["email"];
	 $pass=$_POST["password"];
	
	 
 if(isset($_POST['submit']) && ($fname!="" && $lname!="" && $email!="" && $pass!=""))
 {
	 require ("../API/editUserAPI.php");

	 if($inserted)
	{
		$_SESSION['message']='Record Updated Successfully!';		
		header("location:adminHome.php");
	}
	else
	{	
	    $_SESSION['message']='Record Not Updated';	
		header("location:adminHome.php");
	}
 }
 else
 {
	 $inserted="";
	 $path="";
	 $movie="";
	 $price="";
	
	 $_SESSION['message']='Record Not Updated';
	 header("location:adminHome.php");
 }
?>
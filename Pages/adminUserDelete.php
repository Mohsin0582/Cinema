<?php
	$deleted="";
	$id=$_GET["id"];
    $count_id=$id;
	require ("../API/deleteUserAPI.php");
	if($deleted===TRUE)
	{
		$_SESSION['message']='Record Deleted Successfully!';		
		header("location:adminHome.php");
	}
	else
	{
		$_SESSION['message']='Record Not Deleted!';		
		header("location:adminHome.php");
	}
?>
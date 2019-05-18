<?php
  $_SESSION['read']="";
  
  $result="";
  $select="";
	$select=true;
	require ("../API/readMovieAPI.php");
if ($result->num_rows > 0)
{
	// set array
	$array = array();
	
	// output data of each row
	while($row = $result->fetch_assoc())
	{
	$array[] = $row;
	}
		$_SESSION['read']=$array; 
		$_SESSION["r"]=$_SESSION['read'];
     	//print_r($_SESSION['read']);
		//header("location:adminHome.php");
		return;
}
else
{
	    $_SESSION['read']='Failure';
		//header("location:adminHome.php");
		return;
}
?>
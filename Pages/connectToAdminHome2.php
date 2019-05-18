<?php 
	$_SESSION['message']="";
	$movie=$_POST["movie"];
	 $hall=$_POST["hall"];
	 $time=$_POST["time"];
	 $seat=$_POST["seat"];
	 $price=$_POST["price"];
	 $path=$_FILES["path"]["name"];
	 
	if(filter_var($price, FILTER_VALIDATE_INT) === false)
	{
		$_SESSION['message']='Failure';
		header("location:adminHome.php");
	}

	 
 if(isset($_POST['upload']) && ($path!="" && $movie!="" && $hall!="" && $time!="" && $seat!="" && $price!=""))
 {
	 $filetmp=$_FILES["path"]["tmp_name"];
	 $filename=$_FILES["path"]["name"];
	 $path= "../Images/movies/".$filename;
	 move_uploaded_file($filetmp, $path);
	 require "../API/movieAPI.php";
	 
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
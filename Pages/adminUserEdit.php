<?php
    session_start();
	$id=$_GET["id"];
    $_SESSION["count_id"]=$id;
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Edit</title>
<link rel="stylesheet" href="../assests/css/style.css" />
</head>
<body>
<div id="movieForm">
<!-- form start --->
<form id="adminMovieForm" action="adminUserEditService.php" method="POST" enctype="multipart/form-data">
<div>
    <label>First Name</label>&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" id="movie" name="fname" placeholder="First Name" size="35.5" required/>
</div>
<br/><br/>
<div>
	<label>Last Name</label>&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" id="movie" name="lname" placeholder="Last Name" size="35.5" required/>
</div>
<br/><br/>
<div>
	<label>Email</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" id="movie" name="email" placeholder="Email" size="35.5" required/>
</div>
<br/><br/>
<div>
	<label>Password</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="password" id="movie" name="password" placeholder="Password" size="35.5" required/>
</div>
<br/><br/>
<input id="movieUploadBtn" name="submit" type="submit" value="Submit"/>
</form>
<!-- form ends --->
</div>
</body>
</html>
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
<form id="adminMovieForm" action="connectToAdminHome3.php" method="POST" enctype="multipart/form-data">
<div>
    <label>Upload Image</label>
    <input type="file" class="form-control" id="path" name="path" />
</div>
<br/><br/>
<div>
	<label for="movie">Movie</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" id="movie" name="movie" placeholder="Name" size="35.5" required/>
</div>
<br/><br/>
<div>
  <label for="hall">Select Hall</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <select name="hall" id="hall" >
    <option>1</option>
    <option>2</option>
    <option>3</option>
  </select>
</div>
<br/><br/>
<div>
  <label for="time">Time</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <select name="time" id="time">
    <option>08:00am - 11:00am</option>
    <option>12:00pm - 3:00pm</option>
    <option>04:00pm - 7:00pm</option>
    <option>8:00pm - 12:00am</option>
  </select>
</div>
<br/><br/>
<div>
  <label for="time">Seat</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <select name="seat" id="seat">
    <option>Deluxe</option>
    <option>Medium</option>
    <option>Low</option>
  </select>
</div>
<br/><br/>
<div>
	<label for="movie">Price</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" id="price" name="price" placeholder="Dollars in whole number" size="35.5" required/>
</div>
<br/><br/>
<input id="movieUploadBtn" name="upload" type="submit" value="Upload"/>
</form>
<!-- form ends --->
</div>
</body>
</html>
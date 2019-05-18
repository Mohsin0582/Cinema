<?php
 session_start(); 
  $result="";
	$select=true;
	$host = "localhost";
     $username = "root";
     $password = "";
	 $db="cinema";
     $conn;


    // get the database connection
	$conn = null;
	$conn = new mysqli($host, $username, $password, $db);
	if ($conn->connect_error) 
		die("Connection failed: " . mysqli_connect_error()); 
	
	// query to select record
				$sql = "SELECT id, name, hall, time, seat, price, path FROM movies ORDER BY id DESC";				
				if($result = $conn->query($sql))
				{
					$select=true;
				}else
				{
					$select=false;
				}
				
				
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
}
else
{
	    $_SESSION['read']='Failure';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin</title>
  <link rel="stylesheet" href="../assests/css/style.css" />
</head>
<body>
<?php
 if(isset($_SESSION['message']))
	{
		$msg = $_SESSION["message"];
		if($msg=='Successful')
		{
?>	
		<div class="row">
		<div class="alert alert-success alert-dismissable fade in">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<center><strong>Successful!</strong></center><br/>
		</div>
		</div>
<?php
		}
		if($msg=='Failure')
		{
?>	
		<div class="row">
		<div class="alert alert-danger alert-dismissable fade in">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<center><strong>Failure!</strong></center><br/>
		</div>
		</div>
<?php
		}
	}
	unset($_SESSION["message"]);
?>

<header>
<div id="welcome">
<h3 id="temp"><a href="#">Cinestar</a></h3>
<nav id="wlc">
	<h3>
		<a href="adminHome.php">Users</a> |
		<a href="#">Movies</a>
	</h3>
</nav>
<h3 id="logout"><a href="logout.php">Logout</a></h3>
</div>
</header>


<div id="movieForm">
<!-- form start --->
<form id="adminMovieForm" action="connectToAdminHome2.php" method="POST" enctype="multipart/form-data">
<div>
    <label>Upload Image</label>
    <input type="file" id="path" name="path" />
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

<div class="" id="userAndAdmin">
<?php
 if(isset($_SESSION["read"]))
	{
				
		$read = $_SESSION["read"];
		if($read=='Failure')
		{
?>	
			<div class="alert alert-danger alert-dismissable fade in">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				<center><strong>Failure!</strong></center><br/>
			</div>
<?php
		}
		else
		{
?>	
		
			<div id="displayData">
				<table id="displayDataTable">
				    <thead>
						<tr>
							<th  align="center">Id</th>
							<th  align="center">Cover</th>
							<th  align="center">Movie</th>
							<th  align="center">Hall</th>
							<th  align="center">Time</th>
							<th  align="center">Seat</th>
							<th  align="center">Price</th>
							<th colspan="2" align="center">Action</th>
						</tr>
					</thead>
					<tbody>
<?php      		
				for($i = 0 ; $i < count($read) ; $i++) { 
?>
					<tr>
						<td align="center"><?php echo $i+1 ?></td>
						<td align="center"><img src="<?php echo $read[$i]['path']; ?>"  alt="<?php echo $read[$i]['name']; ?>" width="150" height="200" /></td>
						<td align="center"><?php echo $read[$i]["name"]; ?></td>
						<td align="center"><?php echo $read[$i]["hall"]; ?></td>
						<td align="center"><?php echo $read[$i]["time"]; ?></td>
						<td align="center"><?php echo $read[$i]["seat"]; ?></td>
						<td align="center"><?php echo $read[$i]["price"]; ?></td>
						<td align="center"><a href="movieEditService.php?id='<?php echo $read[$i]['id']; ?>'" >Edit</a></td>
						<td align="center"><a href="movieDeleteService.php?id='<?php echo $read[$i]['id']; ?>'" >Delete</a></td>
					</tr>
<?php			
				}	
?>
					</tbody>		
				</table>
			</div>
<?php
		}
	}
	//unset($_SESSION["read"]);
?>

</div>
<script src="../assests/js/adminLogin.js"></script>
</body>
</html>
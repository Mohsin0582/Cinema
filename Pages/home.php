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
  <title>Home</title>
  <link rel="stylesheet" href="../assests/css/style.css" />
</head>
<body>


<header>
<div id="welcome">
<h3 id="temp"><a href="#">Cinestar</a></h3>
<nav id="wlc">
	<h3>
		<a href="#">Home</a> |
		<a href="booking.php">Booking</a> |
		<a href="contactUs.php">Contact</a>
	</h3>
</nav>
<h3 id="logout"><a href="logout.php">Logout</a></h3>
</div>
</header>


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
						</tr>
					</thead>
					<tbody>
<?php      		
				for($i = 0 ; $i < count($read) ; $i++) { 
?>
					<tr>
						<td align="center"><?php echo $i ?></td>
						<td align="center"><img src="<?php echo $read[$i]['path']; ?>"  alt="<?php echo $read[$i]['name']; ?>" width="150" height="200" /></td>
						<td align="center"><?php echo $read[$i]["name"]; ?></td>
						<td align="center"><?php echo $read[$i]["hall"]; ?></td>
						<td align="center"><?php echo $read[$i]["time"]; ?></td>
						<td align="center"><?php echo $read[$i]["seat"]; ?></td>
						<td align="center"><?php echo $read[$i]["price"]; ?></td>
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
	unset($_SESSION["read"]);
?>

</div>
<footer><center>Copyright &copy; 2018</center></footer>
</body>
</html>
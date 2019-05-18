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
				$sql = "SELECT id, first_name, last_name, email, password FROM users";				
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
  <title>Users</title>
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
		<a href="#">Users</a> |
		<a href="adminHomeMovies.php">Movies</a>
	</h3>
</nav>
<h3 id="logout"><a href="logout.php">Logout</a></h3>
</div>
</header>


<div id="movieForm">
<!-- form start --->
<form id="adminMovieForm" action="adminHomeUserRegisterationService.php" method="POST" enctype="multipart/form-data">
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
							<th  align="center">First Name</th>
							<th  align="center">Last Name</th>
							<th  align="center">Email</th>
							<th  align="center">Password</th>
							<th colspan="2" align="center">Action</th>
						</tr>
					</thead>
					<tbody>
<?php      		
				for($i = 0 ; $i < count($read) ; $i++) { 
?>
					<tr>
						<td align="center"><?php echo $i+1 ?></td>
						<td align="center"><?php echo $read[$i]["first_name"]; ?></td>
						<td align="center"><?php echo $read[$i]["last_name"]; ?></td>
						<td align="center"><?php echo $read[$i]["email"]; ?></td>
						<td align="center"><?php echo $read[$i]["password"]; ?></td>
						<td align="center"><a href="adminUserEdit.php?id='<?php echo $read[$i]['id']; ?>'" >Edit</a></td>
						<td align="center"><a href="adminUserDelete.php?id='<?php echo $read[$i]['id']; ?>'" >Delete</a></td>
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
<footer><center>Copyright &copy; 2018</center></footer>
</body>
</html>
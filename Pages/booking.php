<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact Us</title>
  <link rel="stylesheet" href="../assests/css/style.css" />
</head>

<body>

<header>
<div id="welcome">
<h3 id="temp"><a href="#">Cinestar</a></h3>
<nav id="wlc">
	<h3>
		<a href="home.php">Home</a> |
		<a href="booking.php">Booking</a> |
		<a href="#">Contact</a>
	</h3>
</nav>
<h3 id="logout"><a href="logout.php">Logout</a></h3>
</div>
</header>


<div id="contactDiv">
		<form id="contactForm" action="contactService.php" method="POST">
			<strong><h4>Name:</h4></strong><br/>
				<input type="text" name="name" size="100" required /><br/><br/><br/>
			<strong><h4>Email:</h4></strong><br/>
				<input type="email" name="email" size="100" required /><br/><br/><br/>
			<strong><h4>Message:</h4></strong><br/>
				<textarea name="message" rows="10" cols="83" required>
				</textarea><br/><br/><br/><br/>
			<input id="submitContactFormBtn" type="submit" value="Send"/>
		</form>
</div>

<footer><center>Copyright &copy; 2018</center></footer>
</body>
</html>
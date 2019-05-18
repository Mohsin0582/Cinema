<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <link rel="stylesheet" href="../assests/css/style.css" />
</head>
<body background="../Images/black-mountain.jpg">

<div id="message"></div>

<div class="loginContainer">
<!-- form start --->
<form class="formContainer" id="adminLogin" action="userRegisterationService.php" method="POST">
	<h1>Register</h1>
	<br/><br/><br/>
	<div>
		<label for="inputLoginUsername">First Name</label><br/><br/>
		<input type="hidden"  id="method" name="method" value="adminLogin"/>
		<input type="text" id="inputLoginUsername" name="First_Name" placeholder="First Name" size="50" required autofocus>
	</div>
	<br/><br/>
	<div>
		<label for="inputLoginUsername">Last Name</label><br/><br/>
		<input type="text" id="inputLoginUsername" name="Last_Name" placeholder="Last Name" size="50" required >
	</div>
	<br/><br/>
	<div>
		<label for="inputLoginUsername">Email</label><br/><br/>
		<input type="hidden"  id="method" name="method" value="adminLogin"/>
		<input type="email" id="inputLoginUsername" name="Email" placeholder="Email" size="50" required >
	</div>
	<br/><br/>
	<div>
		<label for="inputLoginPassword">Password</label><br/><br/>
		<input type="password" id="inputLoginPassword"  name="Password" placeholder="Password" size="50" required>
	</div>
	<br/><br/><br/>
	 <input id="submitLogin" name="submit" type="submit" value="Submit"/>
</form>
<!-- form ends --->
</div>
</body>
</html>
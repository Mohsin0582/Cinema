<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Login</title>
  <link rel="stylesheet" href="../assests/css/style.css" />
</head>
<body background="../Images/black-mountain.jpg">
<div class="loginContainer">
<!-- form start --->
<form class="formContainer" id="adminLogin" action="connectToAdminHome.php" method="POST">
	<h1>Login Form</h1>
	<br/><br/><br/>
	<div>
		<label for="inputLoginUsername">Username</label><br/><br/>
		<input type="hidden"  id="method" name="method" value="adminLogin"/>
		<input type="text" id="inputLoginUsername" name="Username" placeholder="Username" size="50" required autofocus>
	</div>
	<br/><br/>
	<div>
		<label for="inputLoginPassword">Password</label><br/><br/>
		<input type="password" class="form-control" id="inputLoginPassword"  name="Password" placeholder="Password" size="50" required>
	</div>
	<br/><br/><br/>
	 <input id="submitLogin" name="submit" type="submit" value="Submit"/>
</form>
<!-- form ends --->
</div>
</body>
</html>
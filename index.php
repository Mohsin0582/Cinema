<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <link rel="stylesheet" href="assests/css/style.css" />
</head>

<body background="Images/black-mountain.jpg">
<div class="loginContainer">
<!-- form start --->
<form class="formContainer" action="Pages/userHomeService.php" method="POST">
<h1>Login Form</h1>
<br/><br/><br/>
<div>
	<label for="inputLoginEmail">Email address</label><br/><br/>
	<input type="hidden" id="method" name="method" value="userLogin"/>
    <input type="email" id="inputLoginEmail" name="email" placeholder="Email" size="50" required>
</div>
<br/><br/>
<div>
	<label for="inputLoginPassword">Password</label><br/><br/>
    <input type="password" id="inputLoginPassword" name="password" placeholder="Password" size="50" required>
</div>
<br/><br/>
  <input id="submitLogin" type="submit" name="submit" value="Sign in"/>
 <br/><br/>
<div class="adminAndRegister">
	<a id="adminLink" href="Pages/admin.php" ><h5>Admin</h5></a>
	<a id="regLink" href="Pages/register.php"><h5 >Sign Up</h5></a>
</div>
</form>
<!-- form ends --->
</div>
</body>
</html>
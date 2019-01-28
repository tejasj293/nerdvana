<!DOCTYPE html>
<html>
<head>
	<title>Nerdvana</title>
	<link rel="icon" href="Nerdvana.ico" type="image/ico" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
</head>
<body class="login">
	<form class="loginForm" action="includes/login.php" method="post">
		<h1>Login to Nerdvana</h1>
		<div class="sup">Or <a href="signup.php">SignUp</a></div>
		<br><br>
		<div><input type="text" name="username" placeholder="Username" class="formInput"></div><br>
		<div><input type="password" name="password" placeholder="Password" class="formInput"></div><br>
		<button type="submit" class="submitButton" name="login">Login</button>
	</form>
</body>
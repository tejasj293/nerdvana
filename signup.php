<?php include "includes/db.php"; ?>
<?php 

if (isset($_POST["submit"])) {
	$firstName = $_POST["firstName"];
    $emailAdd = $_POST["EmailAdd"];
    $phoneNumber = $_POST["phoneNumber"];
    $gender = $_POST["gender"];
    $birthDate = $_POST["bday"];
    $password = $_POST["SupPasswd"];
    
    $firstName = mysqli_real_escape_string($connection, $firstName);
    $password = mysqli_real_escape_string($connection, $password);
    $phoneNumber = mysqli_real_escape_string($connection, $phoneNumber);
    $emailAdd = mysqli_real_escape_string($connection, $emailAdd);
    $birthDate = mysqli_real_escape_string($connection, $birthDate);
    $gender = mysqli_real_escape_string($connection, $gender);

    $hashFormat = "$2y$10$";
    $salt = "iusesomecrazystrings22";
    $hashF_and_salt = $hashFormat . $salt;
    $password = crypt($password, $hashF_and_salt);
    
    $query = "INSERT INTO users(firstName, password, gender, birthDate, emailAdd, phoneNumber) ";
    $query .= "VALUES ('$firstName', '$password', '$gender', '$birthDate', '$emailAdd', '$phoneNumber')";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("Query FAILED" . mysqli_error());
    } else {
        echo "Record Created.";
    }
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Nerdvana</title>
	<link rel="icon" href="Nerdvana.ico" type="image/ico" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<script src="js/auth.js"></script>
</head>
<body class="signup">
	<div class="signupForm">
		<h1>Join Nerdvana</h1>
		<div class="sup">Or <a href="login.html">Login</a></div>
		<br><br>
		<form name="SignupForm" onsubmit="return formValidate()" method="post" action="signup.php">
		
		<div><input type="text" name="firstName" placeholder="First Name" class="formInput" id="name" required></div><br>
		<span id="namefault" class="fault"></span>

		<div><input type="email" name="EmailAdd" placeholder="Email Address"class="formInput" id="EmailAdd" required></div><br>
		<span id="emailfault" class="fault"></span>

		<div><input type="number" name="phoneNumber" placeholder="Mobile Number" class="formInput" id="phoneNumber" required></div><br>
		<span id="numberfault" class="fault"></span>
		
		<div>
			<span >Gender: </span><input type="radio" name="gender" value="male" checked> <span> Male   </span> 
  			<input type="radio" name="gender" value="female"><span> Female </span>
  		</div><br>
	
		<div><span>Date of Birth: </span><input type="date" name="bday" required></div><br>
		
		<div><input type="password" name="SupPasswd" placeholder="Password" class="formInput" id="SupPasswd" required></div><br>
		<span id="passwdfault" class="fault"></span>
		
		<div><input type="password" name="RepSupPasswd" placeholder="Confirm Password" class="formInput" id="RepSupPasswd" required></div><br>
		<span id="conpasswdfault" class="fault"></span>
		
		<button type="submit" class="submitButton" name="submit">Submit</button>
	</form>
	</div>
</body>
</html>
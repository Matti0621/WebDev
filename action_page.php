<!DOCTYPE html>
	<head><title>Registration</title>
	</head>
	
	<body background="body background.jpg">
	<p align = "center">
		<font face = "Comic Sans MS" color= "gray" size = "+2">
		<b>Summary of Registration<br>
		</b>
		</font>
	        <form action="registration.html" method="POST">
	         
		<input type="submit" name"back" value="Back">
		</form>
	</body>
	<br></br>
</html>

<?php


	$lastname = $_GET["lastname"];
	echo "Last Name: " . $lastname;
	echo "<br>";
	

	$firstname = $_GET["firstname"];
	echo "First Name: " . $firstname;
	echo "<br>";
	
	$gender = $_GET["gender"];
	echo "Gender: " . $gender;
	echo "<br>";
	
	$phone = $_GET["phone"];
	echo "Phone: " . $phone;
	echo "<br>";
        
    $address = $_GET["address"];
	echo "Address: " . $address;
	echo "<br>";

    $email = $_GET["email"];
	echo "Email: " . $email;
	echo "<br>";

	$password = $_GET["psw"];
	echo "Password: " . $psw;
	echo "<br>";
        
	
?> 
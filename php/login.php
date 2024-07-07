<?php
$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "users";
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
	
	$email = $GET["email"];
	$password = $GET['password'];
	$stmt = $pdo->prepare("SELECT * FROM users WHERE email=?");
	$stmt->execute([$email]); 
	$user = $stmt->fetch();
	if ($user) {
    echo "Welcome to Wrapped and Ready Gifts";
	} else {
        echo "This email is not registered with Wrapped and Ready Gifts. Please register.";
	} 
 ?>
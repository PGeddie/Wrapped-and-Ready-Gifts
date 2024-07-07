<?php
$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "users";
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
	
$name = $_POST['username'];
$name = $_POST['name'];
$name = $_POST['surname'];
$name = $_POST['email'];
$name = $_POST['password'];

if ($_SERVER['REQUEST-METHOD'] == 'POST'){
	if (empty($_POST['username'])||$_POST['name'])||empty($_POST['surname'])||empty($_POST['email'])||empty($_POST['password'])){
		$error = 'Please fill in all required fields.';
	} else {
		if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
			$error = 'Invalid email format.';
		}
	}
}

$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
?>

<?php
$stmt = $pdo ->prepare("INSERT INTO users (username, name, surname, email, password) VALUES (?, ?, ?, ?, ?)");
$stmt -> execute([$_POST['username'], $_POST['name'], $_POST['surname'], $_POST['email'], $_POST['password']);
 if ($stmt) {
	 echo 'Registration successful.';
 } else {
	 echo 'Registration failed.';
 }
 ?>
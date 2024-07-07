<?php
$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "info";
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
	
$name = $_POST['name'];
$name = $_POST['email'];
$name = $_POST['address'];
$name = $_POST['city'];
$name = $_POST['state'];
$name = $_POST['zip'];


if ($_SERVER['REQUEST-METHOD'] == 'POST'){
	if empty($_POST['name'])||empty($_POST['email'])||empty($_POST['address'])||empty($_POST['city'])||empty($_POST['state'])||empty($_POST['zip']){
		$error = 'Please fill in all required fields.';
	} else {
		if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
			$error = 'Invalid email format.';
		}
	}
}

?>

<?php
$stmt = $pdo ->prepare("INSERT INTO info (name, email, address, city, state, zip) VALUES (?, ?, ?, ?, ?, ?)");
$stmt -> execute([$_POST['name'], $_POST['email'], $_POST['address'], $_POST['city'], $_POST['state'], $_POST['zip']);
 if ($stmt) {
	 echo 'Details saved.';
 } else {
	 echo 'Failed';
 }
 ?>
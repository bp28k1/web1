<?php

$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$name = mysqli_real_escape_string($conn, $_POST["name"]);
$email = mysqli_real_escape_string($conn, $_POST["email"]);
$message = mysqli_real_escape_string($conn, $_POST["message"]);

$sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";

if (mysqli_query($conn, $sql)) {
	//echo "Az üzenet sikeresen elküldve!";
	$uzenet = "Az üzenet sikeresen elküldve!";
	$ujra = false;
} else {
	//echo "Hiba történt az üzenet elküldésekor: " . mysqli_error($conn);
	$uzenet = "Hiba történt az üzenet elküldésekor.";
	$ujra = true;
}

mysqli_close($conn);
?>

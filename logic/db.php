<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "game-signup-manager";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if($conn->connect_error){
	echo "something failed";
	die('DB connection failed: '. $conn->connect_error);
}
// db is not being reached
?>

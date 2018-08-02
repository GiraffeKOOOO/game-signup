<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword);

if($conn->connect_error){
	echo "something failed";
	die('DB connection failed: '. $conn->connect_error);
}

// Make my_db the current database
$db_selected = mysqli_select_db('game-signup-manager', $conn);
if (!$db_selected) {
    $sql = "CREATE DATABASE `game-signup-manager`"; // create database
    if (mysqli_query($conn, $sql)) { // success
      echo "<p>Database created successfully.</p>";
    } else { // failure
      echo "<p>Error creating database: " . mysqli_error($conn) . "</p>";
    }
}

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword,
                       'game-signup-manager'); // selects database

$query = "SELECT id FROM staff";
$result = mysqli_query($conn, $query);

if(empty($result)) { // test for existence of table
    $sql = "CREATE TABLE staff (
                id INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
                staff_username VARCHAR(100) NOT NULL,
                staff_password VARCHAR(100) NOT NULL
            )"; //create table

    if (mysqli_query($conn, $sql)) {
        echo "<p>Table created successfully.</p>";
    } else {
        echo "<p>Error creating table: " . mysqli_error($conn) . "</p>";
    }

    $sql = "INSERT INTO staff VALUES(NULL,'admin','root')";
    mysqli_query($conn, $sql);
}

?>

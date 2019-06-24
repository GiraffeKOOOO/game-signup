<?php
/**
 * Created by PhpStorm.
 * User: pstep
 * Date: 24/06/2019
 * Time: 12:11
 */

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "game-signup-manager";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if ($conn->connect_error) {
    echo "something failed";
    die('DB connection failed: ' . $conn->connect_error);
}
//db is not being reached

?>
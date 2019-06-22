<?php
/**
 * Created by PhpStorm.
 * User: pstep
 * Date: 22/06/2019
 * Time: 19:26
 */

session_start();

$userName = $_POST['userName'];
echo $userName;

$cookie_name = "userName";
$cookie_value = $userName;

//setcookie($cookie_name, $cookie_value, time() + (86400 * 4), "/");

/*
if(!isset($_COOKIE[$cookie_name])) {
    echo "cookie is not set";
} else {
    echo "Value is: " . $_COOKIE[$cookie_name];
}
*/

//header("Location: ../index.php");
//unset($_COOKIE[$cookie_name]);

setcookie($cookie_name, "", time() - 3600, "/");

if(!isset($_COOKIE[$cookie_name])) {
    echo "cookie is not set";
} else {
    echo "Value is: " . $_COOKIE[$cookie_name];
}
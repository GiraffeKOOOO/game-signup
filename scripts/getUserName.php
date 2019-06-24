<?php
/**
 * Created by PhpStorm.
 * User: pstep
 * Date: 22/06/2019
 * Time: 19:26
 */

session_start();

$userName = $_POST['userName'];

$sanitizedString = filter_var($userName, FILTER_SANITIZE_STRING);
$_SESSION['userName'] = $sanitizedString;

header("Location: ../index.php");
die();
<?php

global $_SESSION;

if (isset($_POST['login-btn'])){
	include 'db.php';
	global $conn;
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$pwd = mysqli_real_escape_string($conn, $_POST['password']);

	if (empty($username) || empty($pwd)) {
		header("Location: ../index.php?login=empty");
		exit();
	} else {
		$query = "SELECT * FROM staff WHERE staff_username='$username' AND staff_password='$pwd'";
		$result = mysqli_num_rows(mysqli_query($conn, $query));

		if ($result > 0){
			session_start();
			$_SESSION['user'] = $username;
			header("Location: ../admin-view.php");
		} else {
			header("Location: ../admin-login.php?incorrect");
		}
	}
} else {
	header("Location: ../index.php");
	exit();
}
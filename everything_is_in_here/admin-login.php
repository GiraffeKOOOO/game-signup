<!DOCTYPE html>
<html>
<head>
	<title>admin-login</title>
	<link rel="stylesheet" type="text/css" href="CSS/admin-login.css">
</head>
<body>
	<div id="main-container">
		<h1 id="login-text">Admin Login</h1>

		<div id="login-container">

			<form action="logic/login.php" method="POST">

				<div id="username">
					<label id="username-label" for="username">Username</label>
					<input type="text" name="username" id="username-in" placeholder="Username">
				</div>

				<div id="password">
					<label id="password-label" for="password">Password</label>
					<input type="password" name="password" id="password-in" placeholder="Password">
				</div>

				<div id="button-container">
                    <button class="login-btn" type="submit" name="login-btn"><span>Log in</span></button>
                </div>

			</form>

		</div>

	</div>
</body>
</html>